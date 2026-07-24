<?php
/**
 * conexao.php — Conexão PDO com o PostgreSQL
 * O acesso direto a este arquivo via navegador é bloqueado no Nginx.
 */

declare(strict_types=1);

const DB_HOST = '127.0.0.1';
const DB_PORT = '5432';
const DB_NAME = 'vamoscasar_db';
const DB_USER = 'vamoscasar_user';
const DB_PASS = 'ccad215fed5b05159ab3c49aa7f2919d';

function conectar(): PDO
{
    static $pdo = null;

    if ($pdo === null) {
        $dsn = sprintf('pgsql:host=%s;port=%s;dbname=%s', DB_HOST, DB_PORT, DB_NAME);
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
    }

    return $pdo;
}
