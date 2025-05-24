<?php
/**
 * Enqueue scripts and styles.
 *
 * @package BestMebel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function bestmebel_scripts_styles() {
    // Main stylesheet (theme root style.css - for theme header, not for all styles)
    wp_enqueue_style(
        'bestmebel-root-style', // Changed handle to be specific
        get_stylesheet_uri(),
        array(),
        defined('_S_VERSION') ? _S_VERSION : '1.0.0' // Use defined version or fallback
    );

    // Theme's custom CSS (assets/css/style.css)
    wp_enqueue_style(
        'bestmebel-custom-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('bestmebel-root-style'), // Dependent on the root style.css
        defined('_S_VERSION') ? _S_VERSION : filemtime(get_template_directory() . '/assets/css/style.css') // Versioning
    );

    // Enqueue Google Fonts (Montserrat)
    wp_enqueue_style(
        'bestmebel-montserrat-font',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap',
        array(),
        null // No version needed for Google Fonts
    );

    // Main JS file (assets/js/main.js)
    wp_enqueue_script(
        'bestmebel-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery' ), // Depends on jQuery
        defined('_S_VERSION') ? _S_VERSION : filemtime(get_template_directory() . '/assets/js/main.js'), // Versioning
        true // Load in footer
    );

    // Add more scripts and styles here as needed (e.g., for sliders, fonts)

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bestmebel_scripts_styles' );
