<footer>
    <div class="footer-inner">
        <!-- Botão para voltar ao topo -->
        <div class="go-top-wrapper">
            <span class="go-top"><i class="ti-angle-up"></i></span>
        </div>

        <!-- Inclusão do arquivo de footer -->
        <div class="footer-content">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/hms/master/sass/includes/footer_datavisio.php'; ?>
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
    padding: 10px;
    border-radius: 50%;
    font-size: 18px; /* Ajuste o tamanho do ícone */
    display: flex; /* Centraliza o ícone */
    align-items: center;
    justify-content: center;
}

/* Estilo para o footer */
footer {
    width: 100%; /* Faz o footer ocupar toda a largura da tela */
    background-color: #f8f9fa; /* Cor de fundo do footer */
}

.footer-inner {
    padding: 20px;
    box-sizing: border-box; /* Inclui padding e border no tamanho total do elemento */
}

/* Estilo para o conteúdo do footer */
.footer-content {
    margin: 0 auto; /* Centraliza o conteúdo dentro do footer */

    width: 100%; /* Garante que o conteúdo ocupe toda a largura disponível */
    box-sizing: border-box; /* Inclui padding e border no tamanho total do elemento */
}
</style>
