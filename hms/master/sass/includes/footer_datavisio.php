<!-- footer_datavisio.php -->


<?php
// hms\master\sass\includes\footer_datavisio.php
// Inclui os arquivos necessários
include_once $_SERVER['DOCUMENT_ROOT'] . '/translations.php'; // Certifique-se de que o caminho esteja correto
include_once $_SERVER['DOCUMENT_ROOT'] . '/hms/customization.php'; // Certifique-se de que o caminho esteja correto
//

// Usa as variáveis de tradução e customização conforme necessário
?>

<div class="row justify-content-center align-items-center text-center pt-4">
    <!-- Seção de Direitos Autorais -->
    <div class="col-md-12 mb-3" style="background-color: <?= $custom['footer_color']; ?>; padding: 10px; border-radius: 5px;">
        <p class="mb-0 text-white">
            &copy; <?= date('Y'); ?> <?= $translations['criado']; ?>. Todos os direitos reservados.
        </p>
    </div>

    <!-- Seção de Redes Sociais -->
    <div class="col-md-12" style="background-color: <?= $custom['footer_color']; ?>; padding: 10px; border-radius: 5px;">
        <!-- Links para redes sociais -->
        <a href="#" class="text-white mx-2" aria-label="Facebook">
            <i class="bi bi-facebook"></i> <!-- Ícone do Facebook -->
        </a>
        <a href="#" class="text-white mx-2" aria-label="Twitter">
            <i class="bi bi-twitter"></i> <!-- Ícone do Twitter -->
        </a>
        <a href="#" class="text-white mx-2" aria-label="Instagram">
            <i class="bi bi-instagram"></i> <!-- Ícone do Instagram -->
        </a>
        <a href="#" class="text-white mx-2" aria-label="LinkedIn">
            <i class="bi bi-linkedin"></i> <!-- Ícone do LinkedIn -->
        </a>
    </div>
</div>
