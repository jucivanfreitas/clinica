<!-- footer_datavisio.php -->

<?php
// hms\master\sass\includes\footer_datavisio.php
// Exibe erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclui os arquivos necessários
include_once $_SERVER['DOCUMENT_ROOT'] . '/translations.php'; // Ajuste conforme a estrutura do seu projeto
include_once $_SERVER['DOCUMENT_ROOT'] . '/hms/customization.php'; // Ajuste conforme a estrutura do seu projeto


// Define um valor padrão para a cor de fundo, caso não esteja definido
$footerColor = isset($custom['footer_color']) ? $custom['footer_color'] : '#DBF20D'; // Cinza escuro como padrão

?>

<div class="row justify-content-center align-items-center text-center pt-4">

    <!-- Seção de Redes Sociais -->
    <div class="col-md-12" style="background-color: <?= htmlspecialchars($footerColor); ?>; padding: 10px; border-radius: 5px;">
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
    <!-- Seção de Direitos Autorais -->
    <div class="col-md-12 mb-3" style="background-color: <?= htmlspecialchars($footerColor); ?>; padding: 10px; border-radius: 5px;">
        <p class="mb-0 text-white">
            &copy; <?= date('Y'); ?> <?= htmlspecialchars($translations['criado']); ?>. Todos os direitos reservados.
        </p>
    </div>


</div>
