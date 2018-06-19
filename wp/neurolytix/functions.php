<?php

add_filter('show_admin_bar', '__return_false');

define('Q_THEME_ROOT', get_template_directory_uri());
define('Q_CSS_DIR', Q_THEME_ROOT . '/css');
define('Q_EFFECT_DIR', Q_THEME_ROOT . '/effect');
define('Q_JS_DIR', Q_THEME_ROOT . '/js');
define('Q_IMG_DIR', Q_THEME_ROOT . '/img');


add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'style', Q_CSS_DIR . '/main.min.css');
	wp_enqueue_style( 'effect', Q_EFFECT_DIR . '/animate.css');
	wp_enqueue_style( 'theme', get_stylesheet_uri());
    
    wp_deregister_script('jquery');
    
    wp_enqueue_script( 'script-main', Q_JS_DIR . '/scripts.min.js');
/*	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );*/

});

