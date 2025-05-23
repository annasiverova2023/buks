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
    // Main stylesheet (theme root style.css)
    wp_enqueue_style(
        'bestmebel-main-style',
        get_stylesheet_uri(),
        array(),
        _S_VERSION // Use the version from functions.php
    );

    // Theme's custom CSS (assets/css/style.css)
    // This will be the primary file for custom theme styling.
    wp_enqueue_style(
        'bestmebel-custom-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('bestmebel-main-style'), // Dependent on the main style.css
        _S_VERSION
    );

    // Main JS file
    wp_enqueue_script(
        'bestmebel-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery' ), // Depends on jQuery
        _S_VERSION,
        true // Load in footer
    );

    // Add more scripts and styles here as needed (e.g., for sliders, fonts)

    // Example: Commented out Font Awesome - can be added later if chosen for icons
    /*
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        array(),
        '5.15.4'
    );
    */

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bestmebel_scripts_styles' );
