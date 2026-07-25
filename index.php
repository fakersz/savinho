<?php
require __DIR__ . '/config.php';

// Estados brasileiros (sigla => nome) para o select do formulário
$estados = [
    'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas',
    'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo',
    'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul',
    'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná',
    'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte',
    'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina',
    'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins',
];

$atividades = [
    'Serviços de TI', 'Advocacia', 'Comércio', 'Indústria', 'Saúde e Estética',
    'Educação', 'Alimentação', 'Construção Civil', 'Consultoria', 'Outros',
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($empresa) ?> — Contabilidade em Marataízes, ES</title>
    <meta name="description" content="Escritório de contabilidade em Marataízes – ES. Abertura de empresa, contabilidade mensal, folha de pagamento e planejamento tributário, do MEI ao Lucro Real.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ===== NAVBAR FIXA ===== -->
<header class="topo">
    <nav class="nav container" aria-label="Navegação principal">
        <a href="#inicio" class="nav__logo">
            <img src="img/logo.png" alt="<?= htmlspecialchars($empresa) ?>" width="154" height="55">
        </a>

        <button class="nav__toggle" id="navToggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="navMenu">
            <span></span><span></span><span></span>
        </button>

        <ul class="nav__menu" id="navMenu">
            <li><a href="#inicio" class="nav__link">Início</a></li>
            <li><a href="#sobre" class="nav__link">Sobre Nós</a></li>
            <li><a href="#servicos" class="nav__link">Serviços</a></li>
            <li><a href="#duvidas" class="nav__link">Dúvidas</a></li>
            <li><a href="#contato" class="nav__link">Contato</a></li>
            <li><a href="#contato" class="btn btn--primario nav__cta">Começar Agora</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- ===== HERO ===== -->
    <section class="hero" id="inicio">
        <div class="container hero__grid">
            <div class="hero__conteudo">
                <span class="secao__tag secao__tag--claro">Escritório de contabilidade em Marataízes – ES</span>
                <h1>Contabilidade com <span class="destaque">lógica</span> para o seu negócio crescer.</h1>
                <p class="hero__sub">
                    Da abertura da empresa ao planejamento tributário, cuidamos da contabilidade da sua
                    empresa em Marataízes e região sul do Espírito Santo — com atendimento próximo,
                    digital e sem burocracia.
                </p>
                <div class="hero__acoes">
                    <a href="<?= linkWhatsapp('Olá! Quero falar com um contador da ' . $empresa . '.') ?>" class="btn btn--primario btn--grande" target="_blank" rel="noopener">Falar com um contador</a>
                    <a href="#servicos" class="btn btn--fantasma btn--grande">Ver serviços</a>
                </div>
                <ul class="hero__checklist">
                    <li>Abertura de empresa sem custo*</li>
                    <li>Do MEI ao Lucro Real</li>
                    <li>Atendimento humano</li>
                </ul>
            </div>

            <div class="hero__painel">
                <p class="hero__painel-titulo">Sua contabilidade em <strong>Marataízes – ES</strong>, próximo a Praia Central.</p>
                <div class="hero__stats">
                    <div class="stat"><strong>+8</strong><span>anos de atuação</span></div>
                    <div class="stat"><strong>100%</strong><span>digital e presencial</span></div>
                    <div class="stat"><strong>MEI</strong><span>Simples · Presumido</span></div>
                    <div class="stat"><strong>ES</strong><span>sul do Espírito Santo</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== DIFERENCIAIS ===== -->
    <section class="vantagens">
        <div class="container">
            <div class="secao__cabecalho secao__cabecalho--centro">
                <span class="secao__tag">Por que a Lógica</span>
                <h2>Contabilidade próxima, técnica e de confiança</h2>
                <p class="secao__descricao">
                    Unimos a tecnologia da contabilidade digital com o atendimento humano de quem entende
                    o comércio e os serviços de Marataízes e do litoral sul capixaba.
                </p>
            </div>
            <div class="vantagens__grid">
                <div class="vantagem">
                    <span class="vantagem__icone" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h7l-1 8 10-12h-7l1-8Z"/></svg>
                    </span>
                    <h3>Agilidade</h3>
                    <p>Respostas rápidas pelo WhatsApp e documentos resolvidos sem você sair de casa.</p>
                </div>
                <div class="vantagem">
                    <span class="vantagem__icone" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.5 8.5 8 11 4.5-2.5 8-6 8-11V5l-8-3Z"/></svg>
                    </span>
                    <h3>Segurança fiscal</h3>
                    <p>Sua empresa sempre em dia com o Fisco, sem multas e sem surpresas.</p>
                </div>
                <div class="vantagem">
                    <span class="vantagem__icone" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm5.2 14.2c-.2.6-1.2 1.2-1.7 1.2-.4.1-1 .1-1.6-.1a13 13 0 0 1-1.5-.5 11.6 11.6 0 0 1-4.4-3.9 5 5 0 0 1-1-2.7 2.9 2.9 0 0 1 .9-2.2.9.9 0 0 1 .7-.3h.5c.2 0 .4 0 .6.4l.8 2c.1.2.1.3 0 .5l-.3.5-.4.5c-.1.1-.3.3-.1.6a8.4 8.4 0 0 0 1.6 2 7.7 7.7 0 0 0 2.2 1.4c.3.1.5.1.6-.1l.7-.8c.2-.3.4-.2.6-.1l1.8.8c.3.1.4.2.5.3a2.3 2.3 0 0 1-.5 1.5Z"/></svg>
                    </span>
                    <h3>Atendimento humano</h3>
                    <p>Você fala com pessoas que conhecem o seu negócio, não com robôs.</p>
                </div>
                <div class="vantagem">
                    <span class="vantagem__icone" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 20h16M6 20V9m4 11V4m4 16v-7m4 7V7"/></svg>
                    </span>
                    <h3>Visão de gestão</h3>
                    <p>Relatórios e orientação para você tomar decisões com números na mão.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SOBRE ===== -->
    <section class="sobre" id="sobre">
        <div class="container sobre__grid">
            <div>
                <span class="secao__tag">Sobre nós</span>
                <h2>Contabilidade digital com atendimento de perto</h2>
                <p>
                    A <?= htmlspecialchars($empresa) ?> é um escritório de contabilidade em Marataízes – ES,
                    na Barra do Itapemirim, com atendimento presencial na região e 100% digital para
                    empresas de todo o sul do Espírito Santo.
                </p>
                <p>
                    Cuidamos de empresas de todos os portes, do MEI ao Lucro Real, sempre com relatórios
                    claros e um time que explica o que está fazendo — não só entrega guias no fim do mês.
                </p>
            </div>
        </div>
    </section>

    <!-- ===== SERVIÇOS ===== -->
    <section class="servicos" id="servicos">
        <div class="container">
            <div class="secao__cabecalho secao__cabecalho--centro">
                <span class="secao__tag">O que fazemos por você</span>
                <h2>Serviços de contabilidade em Marataízes</h2>
                <p class="secao__descricao">Soluções contábeis completas para abrir, regularizar e fazer sua empresa crescer com segurança fiscal.</p>
            </div>
            <div class="servicos__grid">
                <article class="card-servico">
                    <span class="card-servico__numero">01</span>
                    <h3>Abertura de empresa</h3>
                    <p>Abrimos seu CNPJ em Marataízes sem burocracia, com a escolha do CNAE e do regime tributário ideal para o seu negócio.</p>
                    <a href="#contato" class="card-servico__link">Falar sobre isso</a>
                </article>
                <article class="card-servico">
                    <span class="card-servico__numero">02</span>
                    <h3>Contabilidade mensal</h3>
                    <p>Escrituração contábil, balancetes e demonstrações em dia, com relatórios claros para você tomar as melhores decisões.</p>
                    <a href="#contato" class="card-servico__link">Falar sobre isso</a>
                </article>
                <article class="card-servico">
                    <span class="card-servico__numero">03</span>
                    <h3>Departamento fiscal</h3>
                    <p>Apuração de impostos, emissão de guias e notas fiscais e cumprimento das obrigações do Simples Nacional, Presumido e Real.</p>
                    <a href="#contato" class="card-servico__link">Falar sobre isso</a>
                </article>
                <article class="card-servico">
                    <span class="card-servico__numero">04</span>
                    <h3>Folha de pagamento</h3>
                    <p>Admissões, férias, rescisões, eSocial e todos os cálculos trabalhistas dos seus colaboradores com total conformidade.</p>
                    <a href="#contato" class="card-servico__link">Falar sobre isso</a>
                </article>
                <article class="card-servico card-servico--destaque">
                    <span class="card-servico__numero">05</span>
                    <h3>Planejamento tributário</h3>
                    <p>Analisamos seu regime de tributação para você pagar menos impostos dentro da lei e aumentar a lucratividade.</p>
                    <a href="#contato" class="card-servico__link">Falar sobre isso</a>
                </article>
                <article class="card-servico">
                    <span class="card-servico__numero">06</span>
                    <h3>MEI e regularização</h3>
                    <p>Suporte completo ao Microempreendedor Individual e regularização de pendências fiscais e cadastrais da sua empresa.</p>
                    <a href="#contato" class="card-servico__link">Falar sobre isso</a>
                </article>
            </div>
        </div>
    </section>

    <!-- ===== COMO FUNCIONA ===== -->
    <section class="como-funciona">
        <div class="container">
            <div class="secao__cabecalho secao__cabecalho--centro secao__cabecalho--claro">
                <span class="secao__tag secao__tag--claro">Como funciona</span>
                <h2>Do formulário à sua empresa em dia, 100% online</h2>
            </div>
            <ol class="passos">
                <li>
                    <span class="passos__numero">1</span>
                    <h3>Preencha o formulário</h3>
                    <p>Conte seus dados e a atividade da sua empresa.</p>
                </li>
                <li>
                    <span class="passos__numero">2</span>
                    <h3>Fale com um especialista</h3>
                    <p>Retornamos por telefone ou WhatsApp em até 1 dia útil.</p>
                </li>
                <li>
                    <span class="passos__numero">3</span>
                    <h3>Envie os documentos</h3>
                    <p>Tudo pelo celular ou computador, sem precisar sair de casa.</p>
                </li>
                <li>
                    <span class="passos__numero">4</span>
                    <h3>Pronto</h3>
                    <p>Sua empresa aberta ou sua contabilidade migrada, sem dor de cabeça.</p>
                </li>
            </ol>
        </div>
    </section>

    <!-- ===== DÚVIDAS FREQUENTES ===== -->
    <section class="duvidas" id="duvidas">
        <div class="container">
            <div class="secao__cabecalho secao__cabecalho--centro">
                <span class="secao__tag">Dúvidas frequentes</span>
                <h2>Perguntas sobre contabilidade em Marataízes</h2>
            </div>
            <div class="faq">
                <details class="faq__item">
                    <summary>Qual o valor da mensalidade de uma contabilidade em Marataízes?</summary>
                    <p>O honorário contábil varia conforme o regime tributário (MEI, Simples Nacional, Lucro Presumido ou Lucro Real), o volume de notas fiscais e o número de funcionários. Fazemos uma análise gratuita da sua empresa e apresentamos um orçamento justo e transparente.</p>
                </details>
                <details class="faq__item">
                    <summary>Como abrir uma empresa em Marataízes – ES?</summary>
                    <p>A abertura de empresa envolve a definição da atividade (CNAE), do regime tributário e do tipo societário, além do registro na Junta Comercial, Receita Federal e Prefeitura de Marataízes. Cuidamos de todo o processo para você, sem burocracia.</p>
                </details>
                <details class="faq__item">
                    <summary>Vocês atendem MEI e Simples Nacional?</summary>
                    <p>Sim. Atendemos desde o Microempreendedor Individual (MEI) até empresas do Simples Nacional, Lucro Presumido e Lucro Real, com emissão de guias, declarações, folha de pagamento e planejamento tributário.</p>
                </details>
                <details class="faq__item">
                    <summary>A contabilidade é online ou presencial?</summary>
                    <p>Trabalhamos de forma híbrida: você resolve tudo de forma digital, pelo WhatsApp e e-mail, e também conta com atendimento presencial no nosso escritório na Barra do Itapemirim, em Marataízes – ES.</p>
                </details>
                <details class="faq__item">
                    <summary>Posso trocar de contador e migrar para a Lógica?</summary>
                    <p>Sim. A troca de contabilidade é simples e nós conduzimos toda a transição, solicitando a documentação ao antigo escritório e regularizando eventuais pendências. Seu negócio não fica desassistido em nenhum momento.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- ===== FORMULÁRIO DE CONTATO ===== -->
    <section class="contato" id="contato">
        <div class="container contato__grid">
            <div class="contato__texto">
                <span class="secao__tag secao__tag--claro">Contato</span>
                <h2>Comece agora mesmo</h2>
                <p>Preencha o formulário e um especialista entra em contato em até 1 dia útil.</p>
                <a href="<?= linkWhatsapp('Olá! Quero saber mais sobre a ' . $empresa . '.') ?>" class="btn btn--primario" target="_blank" rel="noopener">Falar no WhatsApp</a>

                <dl class="contato__dados">
                    <div><dt>Endereço</dt><dd><?= htmlspecialchars($endereco) ?></dd></div>
                    <div><dt>Horário</dt><dd><?= htmlspecialchars($horario) ?></dd></div>
                    <div><dt>E-mail</dt><dd><a href="mailto:<?= htmlspecialchars($emailContato) ?>"><?= htmlspecialchars($emailContato) ?></a></dd></div>
                </dl>
            </div>

            <form class="formulario" id="formLead" action="processa_lead.php" method="POST" novalidate>
                <div class="campo">
                    <label for="nome">Nome completo *</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome" autocomplete="name" required maxlength="120">
                    <small class="campo__erro" aria-live="polite"></small>
                </div>

                <div class="campo-linha">
                    <div class="campo">
                        <label for="telefone">Telefone / WhatsApp *</label>
                        <input type="tel" id="telefone" name="telefone" placeholder="(28) 99999-9999" autocomplete="tel" required maxlength="20" inputmode="tel">
                        <small class="campo__erro" aria-live="polite"></small>
                    </div>
                    <div class="campo">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" placeholder="voce@empresa.com.br" autocomplete="email" required maxlength="160">
                        <small class="campo__erro" aria-live="polite"></small>
                    </div>
                </div>

                <div class="campo">
                    <label for="atividade">Atividade *</label>
                    <select id="atividade" name="atividade" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <?php foreach ($atividades as $opcao): ?>
                            <option><?= htmlspecialchars($opcao) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="campo__erro" aria-live="polite"></small>
                </div>

                <div class="campo-linha">
                    <div class="campo">
                        <label for="estado">Estado *</label>
                        <select id="estado" name="estado" required>
                            <option value="ES" selected>Espírito Santo (ES)</option>
                            <?php foreach ($estados as $sigla => $nome): if ($sigla === 'ES') continue; ?>
                                <option value="<?= $sigla ?>"><?= htmlspecialchars($nome) ?> (<?= $sigla ?>)</option>
                            <?php endforeach; ?>
                        </select>
                        <small class="campo__erro" aria-live="polite"></small>
                    </div>
                    <div class="campo">
                        <label for="municipio">Município *</label>
                        <input type="text" id="municipio" name="municipio" placeholder="Marataízes" autocomplete="address-level2" required maxlength="100">
                        <small class="campo__erro" aria-live="polite"></small>
                    </div>
                </div>

                <!-- Honeypot anti-spam: humanos não veem este campo -->
                <div class="campo campo--hp" aria-hidden="true">
                    <label for="site">Deixe em branco</label>
                    <input type="text" id="site" name="site" tabindex="-1" autocomplete="off">
                </div>

                <button type="submit" class="btn btn--primario btn--bloco btn--grande" id="btnEnviar">Quero começar agora</button>
                <p class="formulario__retorno" id="formRetorno" role="status" aria-live="polite"></p>
            </form>
        </div>
    </section>
</main>

<!-- ===== FOOTER ===== -->
<footer class="rodape">
    <div class="container rodape__grid">
        <div class="rodape__coluna">
            <img src="img/logo.png" alt="<?= htmlspecialchars($empresa) ?>" width="140" height="50" class="rodape__logo-img">
            <p>Escritório de contabilidade em Marataízes – ES. Contabilidade completa para empresas de todos os portes, do MEI ao Lucro Real, no sul do Espírito Santo.</p>
        </div>
        <div class="rodape__coluna">
            <h4>Navegação</h4>
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre Nós</a>
            <a href="#servicos">Serviços</a>
            <a href="#duvidas">Dúvidas</a>
            <a href="#contato">Contato</a>
        </div>
        <div class="rodape__coluna">
            <h4>Contato</h4>
            <a href="<?= linkWhatsapp('Olá! Quero falar com a ' . $empresa . '.') ?>" target="_blank" rel="noopener">WhatsApp</a>
            <a href="mailto:<?= htmlspecialchars($emailContato) ?>"><?= htmlspecialchars($emailContato) ?></a>
            <span><?= htmlspecialchars($endereco) ?></span>
        </div>
    </div>
    <div class="container rodape__base">
        <p>© <?= date('Y') ?> <?= htmlspecialchars($empresaLegal) ?>. CNPJ <?= htmlspecialchars($cnpj) ?>. Todos os direitos reservados.</p>
        <p class="rodape__links"><span>Política de Privacidade</span> · <span>Termos de Uso</span></p>
    </div>
</footer>

<a href="<?= linkWhatsapp('Olá! Quero falar com a ' . $empresa . '.') ?>" class="whats-flutuante" target="_blank" rel="noopener" aria-label="Conversar no WhatsApp">
    <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm5.2 14.2c-.2.6-1.2 1.2-1.7 1.2-.4.1-1 .1-1.6-.1a13 13 0 0 1-1.5-.5 11.6 11.6 0 0 1-4.4-3.9 5 5 0 0 1-1-2.7 2.9 2.9 0 0 1 .9-2.2.9.9 0 0 1 .7-.3h.5c.2 0 .4 0 .6.4l.8 2c.1.2.1.3 0 .5l-.3.5-.4.5c-.1.1-.3.3-.1.6a8.4 8.4 0 0 0 1.6 2 7.7 7.7 0 0 0 2.2 1.4c.3.1.5.1.6-.1l.7-.8c.2-.3.4-.2.6-.1l1.8.8c.3.1.4.2.5.3a2.3 2.3 0 0 1-.5 1.5Z"/></svg>
</a>

<script src="script.js"></script>
</body>
</html>
