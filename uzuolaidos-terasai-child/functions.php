<?php
/**
 * Užuolaidos terasai – Kadence child theme
 */

function uzuolaidos_terasai_child_styles() {
    wp_enqueue_style(
        'uzuolaidos-terasai-child',
        get_stylesheet_uri(),
        array(),
        '1.0.1'
    );
}
add_action('wp_enqueue_scripts', 'uzuolaidos_terasai_child_styles');
