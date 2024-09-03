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

/* Estilo para o conteúdo do footer */
.footer-inner {
    text-align: center;
    padding: 20px;
    background-color: #f8f9fa; /* Cor de fundo do footer */
}

.footer-content {
    margin: 0 auto; /* Centraliza o conteúdo dentro do footer */
    max-width: 1200px; /* Ajuste a largura máxima conforme necessário */
}
</style>
