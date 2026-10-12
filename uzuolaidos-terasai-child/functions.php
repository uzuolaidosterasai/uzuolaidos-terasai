<?php

/**
 * Užuolaidos terasai – Kadence child theme
 */

/* Įkeliame vaiko temos CSS */
function uzuolaidos_terasai_child_styles() {
    wp_enqueue_style(
        'uzuolaidos-terasai-child',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'uzuolaidos_terasai_child_styles');
