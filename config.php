<?php
/**
 * config.php — Dados gerais do site, compartilhados entre as páginas.
 */

declare(strict_types=1);

$empresa      = 'Lógica Contabilidade';
$empresaLegal = 'Lógica Contabilidade';
$cnpj         = '26.258.229/0001-14';
$endereco     = 'Rua Genésio de Oliveira, 104 - Rua ao Lado do JD Material de construção.';
$horario      = 'Segunda a sexta, das 8:00h às 17h30m';
$emailContato = 'administrativo@logicacontabilidade-es.com.br';

// Número de WhatsApp em uso neste site (formato internacional, só dígitos)
$whatsapp = '5528992913611';

function linkWhatsapp(string $mensagem): string
{
    global $whatsapp;
    return "https://wa.me/{$whatsapp}?text=" . rawurlencode($mensagem);
}
