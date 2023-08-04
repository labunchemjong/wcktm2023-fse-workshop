<?php

/**
 * Register block styles.
 *
 * @since 1.0.0
 */


// ENQUEUE STYLES
function wcktm2023fse_editor_styles()
{
    wp_enqueue_style('wcktm2023-fse-style', get_template_directory_uri() . '/style.css', array());
}
add_action('wp_enqueue_scripts', 'wcktm2023fse_editor_styles');
