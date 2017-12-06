<?php

add_theme_support( 'title-tag' );

wp_enqueue_style( 'style', get_stylesheet_uri(), true);


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
