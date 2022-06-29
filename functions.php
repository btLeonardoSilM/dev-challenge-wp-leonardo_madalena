<?php
function custom_theme_assets(){
    wp_enqueue_style('style_css',get_stylesheet_uri());
    wp_enqueue_style('arquivo_css',get_stylesheet_directory_uri().'/assets/css/arquivo.css');
    wp_enqueue_style('bootstrap_css','https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    
    wp_enqueue_style('slick_css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css');
    wp_enqueue_style('slick-theme_css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css');
    wp_enqueue_script('arquivo_js',get_template_directory_uri().'/assets/js/arquivo.js',array('jquery'),'',false);
    wp_enqueue_script('slick_js','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js',array(),'',false);
}
add_action('wp_enqueue_scripts','custom_theme_assets');
add_theme_support( 'post-thumbnails');