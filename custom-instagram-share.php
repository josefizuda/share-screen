<?php
/*
Plugin Name: Share Screen JW.Code
Description: Adiciona um botão para compartilhar no Instagram usando shortcode.
Version: 1.0
Author: Josef
*/

// Função para adicionar scripts e estilos
function share_screen_jwcode_scripts() {
    // Adiciona o script html2canvas.min.js
    wp_enqueue_script('html2canvas', 'https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.3/html2canvas.min.js', array(), null, true);
    // Adiciona o script personalizado
    wp_enqueue_script('share-screen-jwcode-script', plugin_dir_url(__FILE__) . 'share-screen-jwcode.js', array('html2canvas'), null, true);
}
add_action('wp_enqueue_scripts', 'share_screen_jwcode_scripts');

// Função para adicionar o botão de compartilhamento via shortcode
function share_screen_jwcode_shortcode() {
    ob_start(); ?>
    <button id="share-screen-jwcode-button">Compartilhar no Instagram</button>
    <?php
    return ob_get_clean();
}
add_shortcode('share_screen_jwcode', 'share_screen_jwcode_shortcode');
