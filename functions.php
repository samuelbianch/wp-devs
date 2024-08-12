<?php

function wpdevs_load_srcipts() {
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime(
        get_template_directory() . '/style.css'), 'all' );
}

add_action( 'wp_enqueue_scripts', 'wpdevs_load_srcipts' );
