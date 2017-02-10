<?php

function un_parent_styles(){
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    
}

add_action( 'wp_enqueue_scripts', 'un_parent_styles' );


 function unc_script() {
    wp_enqueue_script( 'custon_js', get_bloginfo( 'stylesheet_directory' ) . '/public/js/app.js', array( 'jquery' ),'', true );
     
 }

add_action( 'wp_enqueue_scripts', 'unc_script' );

add_theme_support( 'menus' );

function unc_theme_register_menus(){
    register_nav_menus(
      array(
        'footer_menu' => __( 'Footer Menu', 'footer_menu' ),
        
        	
      )
    );
  }

  add_action('init', 'unc_theme_register_menus');

