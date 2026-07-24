<?php
// vamoscasar.online — Landing Page | Contabilidade e Serviços Financeiros
// ALTERE AQUI: nome da empresa e número do WhatsApp (formato internacional, só dígitos)
$empresa  = 'Prospera Contabilidade';
$whatsapp = '5511999999999';
$wa_link  = "https://wa.me/{$whatsapp}?text=" . rawurlencode('Olá! Quero organizar as finanças da minha empresa.');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $empresa ?> — Contabilidade e Serviços Financeiros</title>
    <meta name="description" content="Assessoria contábil, planejamento tributário e BPO financeiro para empresas que querem crescer com segurança. Fale com um especialista.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="topo" id="topo">
    <nav class="nav container" aria-label="Navegação principal">
        <a href="#topo" class="nav__logo">
            <span class="nav__logo-marca">P</span>
            <span><?= $empresa ?></span>
        </a>

        <button class="nav__toggle" id="navToggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="navMenu">
            <span></span><span></span><span></span>
        </button>

        <ul class="nav__menu" id="navMenu">
            <li><a href="#sobre" class="nav__link">Sobre</a></li>
            <li><a href="#servicos" class="nav__link">Serviços</a></li>
            <li><a href="#contato" class="nav__link">Contato</a></li>
            <li><a href="<?= $wa_link ?>" class="btn btn--whatsapp nav__cta" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm5.2 14.2c-.2.6-1.2 1.2-1.7 1.2-.4.1-1 .1-1.6-.1a13 13 0 0 1-1.5-.5 11.6 11.6 0 0 1-4.4-3.9 5 5 0 0 1-1-2.7 2.9 2.9 0 0 1 .9-2.2.9.9 0 0 1 .7-.3h.5c.2 0 .4 0 .6.4l.8 2c.1.2.1.3 0 .5l-.3.5-.4.5c-.1.1-.3.3-.1.6a8.4 8.4 0 0 0 1.6 2 7.7 7.7 0 0 0 2.2 1.4c.3.1.5.1.6-.1l.7-.8c.2-.3.4-.2.6-.1l1.8.8c.3.1.4.2.5.3a2.3 2.3 0 0 1-.5 1.5Z"/></svg>
                Falar no WhatsApp
            </a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- ===== HERO ===== -->
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__conteudo reveal">
                <span class="hero__tag">Contabilidade consultiva para empresas</span>
                <h1>Finanças organizadas, <em>impostos sob controle</em> e uma empresa pronta para crescer.</h1>
                <p class="hero__sub">
                    Cuidamos da sua contabilidade, do seu planejamento tributário e da sua rotina financeira
                    para você focar no que importa: fazer o negócio prosperar.
                </p>
                <div class="hero__acoes">
                    <a href="<?= $wa_link ?>" class="btn btn--whatsapp btn--grande" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm5.2 14.2c-.2.6-1.2 1.2-1.7 1.2-.4.1-1 .1-1.6-.1a13 13 0 0 1-1.5-.5 11.6 11.6 0 0 1-4.4-3.9 5 5 0 0 1-1-2.7 2.9 2.9 0 0 1 .9-2.2.9.9 0 0 1 .7-.3h.5c.2 0 .4 0 .6.4l.8 2c.1.2.1.3 0 .5l-.3.5-.4.5c-.1.1-.3.3-.1.6a8.4 8.4 0 0 0 1.6 2 7.7 7.7 0 0 0 2.2 1.4c.3.1.5.1.6-.1l.7-.8c.2-.3.4-.2.6-.1l1.8.8c.3.1.4.2.5.3a2.3 2.3 0 0 1-.5 1.5Z"/></svg>
                        Falar com um especialista
                    </a>
                    <a href="#servicos" class="btn btn--fantasma">Conhecer os serviços</a>
                </div>
                <ul class="hero__provas">
                    <li><strong>+10 anos</strong><span>de experiência contábil</span></li>
                    <li><strong>100%</strong><span>digital e sem burocracia</span></li>
                    <li><strong>Resposta</strong><span>em até 1 dia útil</span></li>
                </ul>
            </div>
            <div class="hero__arte reveal" aria-hidden="true">
                <div class="hero__cartao">
                    <div class="hero__cartao-linha"><span>Receita mensal</span><strong>R$ 184.300</strong></div>
                    <div class="hero__grafico">
                        <span style="--h:40%"></span><span style="--h:55%"></span><span style="--h:48%"></span>
                        <span style="--h:70%"></span><span style="--h:62%"></span><span style="--h:88%"></span>
                    </div>
                    <div class="hero__cartao-rodape">
                        <span class="hero__selo">▲ 23% no trimestre</span>
                        <span>Impostos em dia ✓</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SOBRE ===== -->
    <section class="sobre" id="sobre">
        <div class="container sobre__grid">
            <div class="sobre__texto reveal">
                <span class="secao__tag">Sobre a empresa</span>
                <h2>Contabilidade que enxerga além do balanço.</h2>
                <p>
                    Nascemos para ser o braço financeiro das empresas que querem crescer com segurança.
                    Nossa visão é simples: contabilidade não é obrigação burocrática — é ferramenta de decisão.
                </p>
                <p>
                    Por isso, trabalhamos com foco em resultados: números claros, impostos otimizados dentro da lei
                    e uma rotina financeira que funciona sem depender de planilhas improvisadas.
                </p>
            </div>
            <ul class="sobre__pilares reveal">
                <li>
                    <span class="sobre__icone" aria-hidden="true">◆</span>
                    <h3>Transparência</h3>
                    <p>Relatórios claros e linguagem sem "contabilês". Você entende cada número.</p>
                </li>
                <li>
                    <span class="sobre__icone" aria-hidden="true">◆</span>
                    <h3>Agilidade</h3>
                    <p>Atendimento direto com especialistas e prazos que respeitam o seu negócio.</p>
                </li>
                <li>
                    <span class="sobre__icone" aria-hidden="true">◆</span>
                    <h3>Resultado</h3>
                    <p>Economia tributária real e caixa organizado para sustentar o crescimento.</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- ===== SERVIÇOS ===== -->
    <section class="servicos" id="servicos">
        <div class="container">
            <div class="secao__cabecalho reveal">
                <span class="secao__tag">Serviços</span>
                <h2>Tudo o que sua empresa precisa em um só lugar.</h2>
            </div>
            <div class="servicos__grid">
                <article class="card reveal">
                    <span class="card__icone" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 20h16M6 20V9m4 11V4m4 16v-7m4 7V7"/></svg>
                    </span>
                    <h3>Assessoria Contábil</h3>
                    <p>Contabilidade completa: abertura de empresa, obrigações fiscais, folha de pagamento e demonstrativos sempre em dia.</p>
                    <ul class="card__lista">
                        <li>Escrituração e obrigações acessórias</li>
                        <li>Folha de pagamento e pró-labore</li>
                        <li>Balanços e relatórios gerenciais</li>
                    </ul>
                    <a href="#contato" class="card__link" data-servico="Assessoria Contábil">Quero saber mais →</a>
                </article>

                <article class="card card--destaque reveal">
                    <span class="card__selo">Mais procurado</span>
                    <span class="card__icone" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M7 8c0-1.7 2.2-3 5-3s5 1.3 5 3-2.2 3-5 3-5 1.3-5 3 2.2 3 5 3 5-1.3 5-3"/></svg>
                    </span>
                    <h3>Planejamento Tributário</h3>
                    <p>Análise do regime ideal (Simples, Presumido ou Real) e estratégias legais para pagar menos impostos.</p>
                    <ul class="card__lista">
                        <li>Estudo de enquadramento tributário</li>
                        <li>Recuperação de créditos</li>
                        <li>Simulações e projeções fiscais</li>
                    </ul>
                    <a href="#contato" class="card__link" data-servico="Planejamento Tributário">Quero saber mais →</a>
                </article>

                <article class="card reveal">
                    <span class="card__icone" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m-9 0h10a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3v-8a3 3 0 0 1 3-3Zm4 5h4"/></svg>
                    </span>
                    <h3>BPO Financeiro</h3>
                    <p>Terceirize a rotina financeira: contas a pagar e receber, conciliação e fluxo de caixa nas mãos de especialistas.</p>
                    <ul class="card__lista">
                        <li>Contas a pagar e a receber</li>
                        <li>Conciliação bancária</li>
                        <li>Fluxo de caixa e indicadores</li>
                    </ul>
                    <a href="#contato" class="card__link" data-servico="BPO Financeiro">Quero saber mais →</a>
                </article>
            </div>
        </div>
    </section>

    <!-- ===== CONTATO ===== -->
    <section class="contato" id="contato">
        <div class="container contato__grid">
            <div class="contato__texto reveal">
                <span class="secao__tag secao__tag--claro">Contato</span>
                <h2>Vamos organizar as finanças da sua empresa?</h2>
                <p>
                    Preencha o formulário e um especialista entra em contato em até 1 dia útil.
                    Prefere agilidade? Chame direto no WhatsApp.
                </p>
                <a href="<?= $wa_link ?>" class="btn btn--whatsapp" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm5.2 14.2c-.2.6-1.2 1.2-1.7 1.2-.4.1-1 .1-1.6-.1a13 13 0 0 1-1.5-.5 11.6 11.6 0 0 1-4.4-3.9 5 5 0 0 1-1-2.7 2.9 2.9 0 0 1 .9-2.2.9.9 0 0 1 .7-.3h.5c.2 0 .4 0 .6.4l.8 2c.1.2.1.3 0 .5l-.3.5-.4.5c-.1.1-.3.3-.1.6a8.4 8.4 0 0 0 1.6 2 7.7 7.7 0 0 0 2.2 1.4c.3.1.5.1.6-.1l.7-.8c.2-.3.4-.2.6-.1l1.8.8c.3.1.4.2.5.3a2.3 2.3 0 0 1-.5 1.5Z"/></svg>
                    Chamar no WhatsApp
                </a>
            </div>

            <form class="formulario reveal" id="formLead" action="processar-lead.php" method="POST" novalidate>
                <h3>Solicite uma proposta</h3>

                <div class="campo">
                    <label for="nome">Nome completo *</label>
                    <input type="text" id="nome" name="nome" placeholder="Como podemos te chamar?" autocomplete="name" required maxlength="120">
                    <small class="campo__erro" aria-live="polite"></small>
                </div>

                <div class="campo">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" placeholder="voce@empresa.com.br" autocomplete="email" required maxlength="160">
                    <small class="campo__erro" aria-live="polite"></small>
                </div>

                <div class="campo">
                    <label for="telefone">Telefone / WhatsApp *</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" autocomplete="tel" required maxlength="20" inputmode="tel">
                    <small class="campo__erro" aria-live="polite"></small>
                </div>

                <div class="campo">
                    <label for="servico">Serviço de interesse *</label>
                    <select id="servico" name="servico" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option>Assessoria Contábil</option>
                        <option>Planejamento Tributário</option>
                        <option>BPO Financeiro</option>
                        <option>Outro assunto</option>
                    </select>
                    <small class="campo__erro" aria-live="polite"></small>
                </div>

                <!-- Honeypot anti-spam: humanos não veem este campo -->
                <div class="campo campo--hp" aria-hidden="true">
                    <label for="site">Deixe em branco</label>
                    <input type="text" id="site" name="site" tabindex="-1" autocomplete="off">
                </div>

                <button type="submit" class="btn btn--dourado btn--bloco" id="btnEnviar">Enviar solicitação</button>
                <p class="formulario__retorno" id="formRetorno" role="status" aria-live="polite"></p>
            </form>
        </div>
    </section>
</main>

<footer class="rodape">
    <div class="container rodape__grid">
        <p>© <?= date('Y') ?> <?= $empresa ?>. Todos os direitos reservados.</p>
        <nav aria-label="Links do rodapé">
            <a href="#sobre">Sobre</a>
            <a href="#servicos">Serviços</a>
            <a href="#contato">Contato</a>
        </nav>
    </div>
</footer>

<a href="<?= $wa_link ?>" class="whats-flutuante" target="_blank" rel="noopener" aria-label="Conversar no WhatsApp">
    <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm5.2 14.2c-.2.6-1.2 1.2-1.7 1.2-.4.1-1 .1-1.6-.1a13 13 0 0 1-1.5-.5 11.6 11.6 0 0 1-4.4-3.9 5 5 0 0 1-1-2.7 2.9 2.9 0 0 1 .9-2.2.9.9 0 0 1 .7-.3h.5c.2 0 .4 0 .6.4l.8 2c.1.2.1.3 0 .5l-.3.5-.4.5c-.1.1-.3.3-.1.6a8.4 8.4 0 0 0 1.6 2 7.7 7.7 0 0 0 2.2 1.4c.3.1.5.1.6-.1l.7-.8c.2-.3.4-.2.6-.1l1.8.8c.3.1.4.2.5.3a2.3 2.3 0 0 1-.5 1.5Z"/></svg>
</a>

<script src="script.js"></script>
</body>
</html>
