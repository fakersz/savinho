<?php
/**
 * processa_lead.php — Recebe o formulário e grava o lead em leads_contabilidade (PostgreSQL).
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

$nome      = trim($_POST['nome'] ?? '');
$telefone  = trim($_POST['telefone'] ?? '');
$email     = trim($_POST['email'] ?? '');
$atividade = trim($_POST['atividade'] ?? '');
$estado    = strtoupper(trim($_POST['estado'] ?? ''));
$municipio = trim($_POST['municipio'] ?? '');

$estadosValidos = [
    'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG',
    'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO',
];

if (mb_strlen($nome) < 3 || mb_strlen($nome) > 120) {
    responder(false, 'Informe seu nome completo.', 422);
}
$digitosTelefone = preg_replace('/\D/', '', $telefone);
if (strlen($digitosTelefone) < 10 || strlen($digitosTelefone) > 13) {
    responder(false, 'Informe um telefone válido com DDD.', 422);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 160) {
    responder(false, 'Informe um e-mail válido.', 422);
}
if ($atividade === '' || mb_strlen($atividade) > 80) {
    responder(false, 'Selecione a atividade da empresa.', 422);
}
if (!in_array($estado, $estadosValidos, true)) {
    responder(false, 'Selecione um estado válido.', 422);
}
if (mb_strlen($municipio) < 2 || mb_strlen($municipio) > 100) {
    responder(false, 'Informe o município.', 422);
}

try {
    $pdo = conectar();

    // Limite simples anti-flood: máx. 5 envios por IP por hora
    $ip = $_SERVER['REMOTE_ADDR'] ?? null;
    if ($ip !== null) {
        $stmt = $pdo->prepare(
            "SELECT COUNT(*) FROM leads_contabilidade WHERE ip_origem = :ip AND data_cadastro > NOW() - INTERVAL '1 hour'"
        );
        $stmt->execute([':ip' => $ip]);
        if ((int) $stmt->fetchColumn() >= 5) {
            responder(false, 'Muitos envios recentes. Aguarde um pouco e tente novamente.', 429);
        }
    }

    $stmt = $pdo->prepare(
        'INSERT INTO leads_contabilidade (nome, telefone, email, atividade, estado, municipio, ip_origem)
         VALUES (:nome, :telefone, :email, :atividade, :estado, :municipio, :ip)'
    );
    $stmt->execute([
        ':nome'      => $nome,
        ':telefone'  => $telefone,
        ':email'     => $email,
        ':atividade' => $atividade,
        ':estado'    => $estado,
        ':municipio' => $municipio,
        ':ip'        => $ip,
    ]);

    responder(true, 'Recebemos sua solicitação. Em breve entraremos em contato!');
} catch (PDOException $e) {
    error_log('Erro ao gravar lead_contabilidade: ' . $e->getMessage());
    responder(false, 'Erro interno ao salvar seus dados. Tente novamente mais tarde.', 500);
}
