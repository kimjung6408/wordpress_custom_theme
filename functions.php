<?php

function enqueueCustomCss()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css');

}

add_action('wp_enqueue_scripts', 'enqueueCustomCss');


//add fonts
require get_template_directory().'/fonts.php';

//썸네일 지원 추가
add_theme_support( 'post-thumbnails' );

?>