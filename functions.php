<?php
function wp_tailwind_starter_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/tailwind-output.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'wp_tailwind_starter_enqueue_styles');
?>
