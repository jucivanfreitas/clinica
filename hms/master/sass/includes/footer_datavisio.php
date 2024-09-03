<?php
// hms\master\sass\includes\footer_datavisio.php
// Exibe erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclui os arquivos necessários
$translations = include_once $_SERVER['DOCUMENT_ROOT'] . '/translations.php'; // Ajuste conforme a estrutura do seu projeto
$custom = include_once $_SERVER['DOCUMENT_ROOT'] . '/hms/customization.php'; // Ajuste conforme a estrutura do seu projeto

// Define um valor padrão para a cor de fundo, caso não esteja definido
$footerColor = isset($custom['footer_color']) ? $custom['footer_color'] : '#DBF20D'; // Amarelo padrão

?>

<!-- Adicione um container para limitar a largura do footer -->
<div class="container-fluid" style="background-color: <?= htmlspecialchars($footerColor); ?>; padding: 10px; border-radius:1px;">
    <div class="row justify-content-center align-items-center text-center pt-4">
        <!-- Seção de Redes Sociais -->
        <!--
        <div class="col-md-12 mb-3">
            <a href="#" class="text-white mx-2" aria-label="Facebook">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="text-white mx-2" aria-label="Twitter">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="text-white mx-2" aria-label="Instagram">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="text-white mx-2" aria-label="LinkedIn">
                <i class="bi bi-linkedin"></i>
            </a>
        </div>
        -->

        <!-- Seção de Direitos Autorais -->
        <div class="col-md-12 mb-3">
            <p class="mb-0 text-white">
                &copy; <?= date('Y'); ?> <?= htmlspecialchars($translations['criado']); ?>. Todos os direitos reservados.
            </p>
        </div>
    </div>
</div>
