<?php

function add_jace_styles_and_scripts() {
    wp_enqueue_style( 'bootstrap_cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
    wp_enqueue_style( 'jace_styles', get_stylesheet_uri(), array('bootstrap_cdn') );
    wp_enqueue_script( 'jace_scripts', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery') );
    wp_enqueue_script( 'vivus', 'https://cdn.jsdelivr.net/vivus/0.3.0/vivus.min.js' );
}
add_action('init', 'add_jace_styles_and_scripts');