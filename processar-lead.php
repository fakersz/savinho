<?php
/**
 * processar-lead.php — Recebe o formulário de contato e grava o lead no PostgreSQL.
 * Responde sempre em JSON: { sucesso: bool, mensagem: string }
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/conexao.php';

function responder(bool $sucesso, string $mensagem, int $status = 200): never
{
    http_response_code($status);
    echo json_encode(['sucesso' => $sucesso, 'mensagem' => $mensagem], JSON_UNESCAPED_UNICODE);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    responder(false, 'Método não permitido.', 405);
}

// Honeypot: bots preenchem o campo oculto "site"; humanos não.
if (trim($_POST['site'] ?? '') !== '') {
    responder(true, 'Recebemos sua solicitação. Em breve entraremos em contato!');
}

$nome     = trim($_POST['nome'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$servico  = trim($_POST['servico'] ?? '');

$servicosValidos = ['Assessoria Contábil', 'Planejamento Tributário', 'BPO Financeiro', 'Outro assunto'];

if (mb_strlen($nome) < 3 || mb_strlen($nome) > 120) {
    responder(false, 'Informe seu nome completo.', 422);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 160) {
    responder(false, 'Informe um e-mail válido.', 422);
}
$digitosTelefone = preg_replace('/\D/', '', $telefone);
if (strlen($digitosTelefone) < 10 || strlen($digitosTelefone) > 13) {
    responder(false, 'Informe um telefone válido com DDD.', 422);
}
if (!in_array($servico, $servicosValidos, true)) {
    responder(false, 'Selecione um serviço válido.', 422);
}

try {
    $pdo = conectar();

    // Limite simples anti-flood: máx. 5 envios por IP por hora
    $ip = $_SERVER['REMOTE_ADDR'] ?? null;
    if ($ip !== null) {
        $stmt = $pdo->prepare(
            "SELECT COUNT(*) FROM leads WHERE ip_origem = :ip AND criado_em > NOW() - INTERVAL '1 hour'"
        );
        $stmt->execute([':ip' => $ip]);
        if ((int) $stmt->fetchColumn() >= 5) {
            responder(false, 'Muitos envios recentes. Aguarde um pouco e tente novamente.', 429);
        }
    }

    $stmt = $pdo->prepare(
        'INSERT INTO leads (nome, email, telefone, servico_interesse, ip_origem)
         VALUES (:nome, :email, :telefone, :servico, :ip)'
    );
    $stmt->execute([
        ':nome'     => $nome,
        ':email'    => $email,
        ':telefone' => $telefone,
        ':servico'  => $servico,
        ':ip'       => $ip,
    ]);

    responder(true, 'Recebemos sua solicitação. Em breve entraremos em contato!');
} catch (PDOException $e) {
    error_log('Erro ao gravar lead: ' . $e->getMessage());
    responder(false, 'Erro interno ao salvar seus dados. Tente novamente mais tarde.', 500);
}
