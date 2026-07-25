/* ============================================================
   Lógica Contabilidade — Interações do site
   Menu mobile | Máscara de telefone | Validação e envio do formulário
   ============================================================ */
'use strict';

/* ===== Menu hambúrguer (presente em todas as páginas) ===== */
const navToggle = document.getElementById('navToggle');
const navMenu = document.getElementById('navMenu');

navToggle.addEventListener('click', () => {
    const aberto = navMenu.classList.toggle('aberto');
    navToggle.setAttribute('aria-expanded', String(aberto));
    navToggle.setAttribute('aria-label', aberto ? 'Fechar menu' : 'Abrir menu');
});

// Fecha o menu ao clicar em qualquer link (mobile)
navMenu.addEventListener('click', (e) => {
    if (e.target.closest('a')) {
        navMenu.classList.remove('aberto');
        navToggle.setAttribute('aria-expanded', 'false');
    }
});

/* ===== Máscara de telefone brasileira (só existe na página de contato) ===== */
const campoTelefone = document.getElementById('telefone');
if (campoTelefone) {
    campoTelefone.addEventListener('input', () => {
        let d = campoTelefone.value.replace(/\D/g, '').slice(0, 11);
        if (d.length > 10)      campoTelefone.value = d.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        else if (d.length > 6)  campoTelefone.value = d.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
        else if (d.length > 2)  campoTelefone.value = d.replace(/(\d{2})(\d{0,5})/, '($1) $2');
        else                    campoTelefone.value = d;
    });
}

/* ===== Validação e envio do formulário de leads ===== */
const form = document.getElementById('formLead');

if (form) {
    const btnEnviar = document.getElementById('btnEnviar');
    const retorno = document.getElementById('formRetorno');

    const validadores = {
        nome: (v) => v.trim().length >= 3 || 'Informe seu nome completo.',
        email: (v) => /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v.trim()) || 'Informe um e-mail válido.',
        telefone: (v) => v.replace(/\D/g, '').length >= 10 || 'Informe um telefone com DDD.',
        atividade: (v) => v !== '' || 'Selecione a atividade da empresa.',
        estado: (v) => v !== '' || 'Selecione o estado.',
        municipio: (v) => v.trim().length >= 2 || 'Informe o município.'
    };

    function validarCampo(input) {
        const regra = validadores[input.name];
        if (!regra) return true;

        const resultado = regra(input.value);
        const erroEl = input.closest('.campo').querySelector('.campo__erro');
        const valido = resultado === true;

        input.classList.toggle('invalido', !valido);
        erroEl.textContent = valido ? '' : resultado;
        return valido;
    }

    // Valida em tempo real ao sair do campo
    form.querySelectorAll('input:not(#site), select').forEach((campo) => {
        campo.addEventListener('blur', () => validarCampo(campo));
        campo.addEventListener('input', () => {
            if (campo.classList.contains('invalido')) validarCampo(campo);
        });
    });

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const campos = [...form.querySelectorAll('input:not(#site), select')];
        const tudoValido = campos.map(validarCampo).every(Boolean);
        if (!tudoValido) {
            form.querySelector('.invalido')?.focus();
            return;
        }

        btnEnviar.disabled = true;
        btnEnviar.textContent = 'Enviando…';
        retorno.className = 'formulario__retorno';
        retorno.textContent = '';

        try {
            const resposta = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: { 'Accept': 'application/json' }
            });
            const dados = await resposta.json();

            if (resposta.ok && dados.sucesso) {
                retorno.classList.add('ok');
                retorno.textContent = dados.mensagem;
                form.reset();
            } else {
                retorno.classList.add('erro');
                retorno.textContent = dados.mensagem || 'Não foi possível enviar. Tente novamente.';
            }
        } catch {
            retorno.classList.add('erro');
            retorno.textContent = 'Falha de conexão. Tente novamente em instantes.';
        } finally {
            btnEnviar.disabled = false;
            btnEnviar.textContent = 'Enviar solicitação';
        }
    });
}
