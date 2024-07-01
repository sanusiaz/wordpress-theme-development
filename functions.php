<?php
    /**
     * Theme Functions
     * 
     * @package aquila
     */

function aquila_enqueue_scripts() {

    // registering styles and scripts
    wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_script("main-js", get_template_directory_uri() . '/assets/js/main.js', ['jquery'], filemtime( get_template_directory() . '/assets/js/main.js' ), true);

    // registering styles and scripts
    wp_enqueue_style('stylesheet');
    wp_enqueue_script('main-js');
}


add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');