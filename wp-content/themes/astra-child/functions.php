<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astra-child
 * @since 1.0.0
 */

 add_action(  'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles(){
    wp_enqueue_style( 'parent-style',get_stylesheet_directory_uri() .'/style.css');
}
?>