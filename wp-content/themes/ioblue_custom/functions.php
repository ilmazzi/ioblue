<?php

/**
 * ============================================================
 * Theme setup – ioblue_custom
 * Inizializza le funzionalità di base del tema:
 * - Caricamento file di traduzione
 * - Supporto per il titolo automatico nel <head>
 * - Supporto al logo personalizzato (SVG o immagine)
 * - Registrazione menu principale
 * ============================================================
 */
function ioblue_custom_setup() {
    // Abilita supporto traduzioni (cartella: /languages/)
    load_theme_textdomain('ioblue_custom', get_template_directory() . '/languages');

    // Supporta il tag <title> dinamico
    add_theme_support('title-tag');

    // Abilita logo personalizzato gestibile via Customizer
    add_theme_support('custom-logo');

    // Registra il menu principale per il backend di WordPress
    register_nav_menus([
        'main_menu' => __('Main Menu', 'ioblue_custom'),
    ]);
}
add_action('after_setup_theme', 'ioblue_custom_setup');


/**
 * ============================================================
 * Enqueue assets – ioblue_custom
 * Carica tutti i file CSS e JS suddivisi in cartelle:
 * - /assets/css/reset.css
 * - /assets/css/variables.css
 * - /assets/css/layout.css
 * - /assets/css/header.css
 * - /assets/css/footer.css
 * - /assets/css/component.css
 * - /assets/css/main.css (ultimo, contiene override globali)
 * - /assets/js/main.js (funzioni JS generiche, incluso hamburger)
 * ============================================================
 */
function ioblue_custom_enqueue_assets() {
    $ver = wp_get_theme()->get('Version');

    // CSS RESET
    wp_enqueue_style(
        'ioblue-reset',
        get_template_directory_uri() . '/assets/css/reset.css',
        [],
        filemtime(get_template_directory() . '/assets/css/reset.css')
    );

    // CSS VARIABILI GLOBALI
    wp_enqueue_style(
        'ioblue-variables',
        get_template_directory_uri() . '/assets/css/variables.css',
        [],
        filemtime(get_template_directory() . '/assets/css/variables.css')
    );

    // CSS LAYOUT STRUTTURALE
    wp_enqueue_style(
        'ioblue-layout',
        get_template_directory_uri() . '/assets/css/layout.css',
        [],
        filemtime(get_template_directory() . '/assets/css/layout.css')
    );

    // CSS HEADER
    wp_enqueue_style(
        'ioblue-header',
        get_template_directory_uri() . '/assets/css/header.css',
        [],
        filemtime(get_template_directory() . '/assets/css/header.css')
    );

    // CSS FOOTER
    wp_enqueue_style(
        'ioblue-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        [],
        filemtime(get_template_directory() . '/assets/css/footer.css')
    );

    // CSS COMPONENTI UI (pulsanti, card, ecc.)
    wp_enqueue_style(
        'ioblue-component',
        get_template_directory_uri() . '/assets/css/component.css',
        [],
        filemtime(get_template_directory() . '/assets/css/component.css')
    );

    // CSS PRINCIPALE (override finali, media query globali)
    wp_enqueue_style(
        'ioblue-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    // JS PRINCIPALE (hamburger toggle, interazioni JS generiche)
    wp_enqueue_script(
        'ioblue-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true // nel footer
    );
}
add_action('wp_enqueue_scripts', 'ioblue_custom_enqueue_assets');

function ioblue_custom_enqueue_styles() {
    wp_enqueue_style('ioblue-slider', get_template_directory_uri() . '/assets/css/slider.css', array(), null);
}
add_action('wp_enqueue_scripts', 'ioblue_custom_enqueue_styles');

function ioblue_custom_enqueue_swiper() {
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('ioblue-slider', get_template_directory_uri() . '/assets/js/slider.js', array('swiper'), null, true);
}
add_action('wp_enqueue_scripts', 'ioblue_custom_enqueue_swiper');
