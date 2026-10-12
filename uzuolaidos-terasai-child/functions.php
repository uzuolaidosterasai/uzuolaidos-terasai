<?php

/**
 * Užuolaidos terasai – Kadence child theme
 */

/**
 * Įkeliame Kadence pagrindinės temos ir vaiko temos stilius.
 */
function uzuolaidos_terasai_child_styles() {

    wp_enqueue_style(
        'kadence-parent',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'uzuolaidos-terasai-child',
        get_stylesheet_directory_uri() . '/style.css',
        array('kadence-parent'),
        '1.0.0'
    );
}

add_action('wp_enqueue_scripts', 'uzuolaidos_terasai_child_styles');
