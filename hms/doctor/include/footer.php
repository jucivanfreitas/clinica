<footer>
    <div class="footer-inner">
        <!-- Inclusão do arquivo de footer -->
        <div class="footer-content">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/hms/master/sass/includes/footer_datavisio.php'; ?>
        </div>

        <!-- Botão para voltar ao topo -->
        <div class="go-top-wrapper">
            <span class="go-top"><i class="ti ti-angle-up"></i></span>
        </div>
    </div>
</footer>

<style>
/* Estilo para o botão de voltar ao topo */
.go-top-wrapper {
    position: fixed; /* Garante que o botão permaneça visível */
    bottom: 20px; /* Ajuste conforme necessário */
    right: 20px; /* Ajuste conforme necessário */
    z-index: 1000; /* Garante que o botão fique acima de outros elementos */
}

.go-top {
    cursor: pointer;
    background-color: #333; /* Cor de fundo do botão */
    color: white; /* Cor do ícone */
    padding: 15px; /* Aumenta o tamanho do botão */
    border-radius: 50%;
    font-size: 24px; /* Ajusta o tamanho do ícone */
    display: flex; /* Centraliza o ícone */
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adiciona uma sombra ao botão */
    transition: background-color 0.3s, transform 0.3s; /* Adiciona uma transição suave */
}

.go-top:hover {
    background-color: #555; /* Cor de fundo ao passar o mouse */
    transform: scale(1.1); /* Aumenta o botão ao passar o mouse */
}

/* Estilo para o footer */
footer {
    position: fixed; /* Faz o footer fixo na parte inferior da tela */
    bottom: 0; /* Alinha o footer na parte inferior */
    left: 0; /* Alinha o footer na borda esquerda */
    width: 100%; /* Faz o footer ocupar toda a largura da tela */
    background-color: #f8f9fa; /* Cor de fundo do footer */
    z-index: 1000; /* Garante que o footer fique acima de outros elementos */
}

.footer-inner {
    box-sizing: border-box; /* Inclui padding e border no tamanho total do elemento */
}

/* Estilo para o conteúdo do footer */
.footer-content {
    margin: 0 auto; /* Centraliza o conteúdo dentro do footer */
    width: 100%; /* Garante que o conteúdo ocupe toda a largura disponível */
    box-sizing: border-box; /* Inclui padding e border no tamanho total do elemento */
}
</style>
