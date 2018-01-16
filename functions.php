<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

wp_enqueue_style( 'style', get_stylesheet_uri(), true);


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
  register_sidebar( 
  	array(
  	  'name' => 'main-sidebar',
  	)
  );
}
add_action( 'init', 'register_my_menus' );

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Informacije',
    'menu_title'  => 'Informacije',
    'menu_slug'   => 'general-info',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}
