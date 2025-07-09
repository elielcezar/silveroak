<?php
/**
 * Funções do tema Silver Oaks RV Park
 */

// Evita acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuração do tema
 */
function silver_oaks_setup() {
    // Suporte a título do documento
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Suporte a logotipo customizado
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'silver_oaks_setup');

/**
 * Enfileirar estilos e scripts
 */
function silver_oaks_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap', array(), null);
    
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
    
    // AOS CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    
    // Estilo principal do tema
    wp_enqueue_style('silver-oaks-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
    
    // AOS JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    
    // Script principal do tema (carregado antes do Google Maps)
    wp_enqueue_script('silver-oaks-script', get_template_directory_uri() . '/js/main.js', array('swiper-js', 'aos-js'), wp_get_theme()->get('Version'), true);
    
    // Google Maps API (carregado após o script principal)
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAvTjSEZchkIn-Uwnm0R6eCjrrdx-hhvfE&callback=initMap', array('silver-oaks-script'), null, true);

    // Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'silver_oaks_scripts');

/**
 * Registrar menus
 */
function silver_oaks_menus() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'silver-oaks'),
    ));
}
add_action('init', 'silver_oaks_menus');

/**
 * Configurar tamanhos de imagem personalizados
 */
function silver_oaks_image_sizes() {
    add_image_size('gallery-main', 1200, 600, true);
    add_image_size('gallery-thumb', 300, 300, true);
    add_image_size('attraction-thumb', 400, 300, true);
    add_image_size('camping-large', 800, 600, true);
    add_image_size('banner-top-desktop', 1920, 840, true);
    add_image_size('banner-top-mobile', 700, 700, true);
}
add_action('after_setup_theme', 'silver_oaks_image_sizes');

 