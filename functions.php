<?php 

function moje_soubory() {
/*    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); */
    wp_enqueue_style('moje_hlavni_styly', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'moje_soubory');

/*
function university_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
*/