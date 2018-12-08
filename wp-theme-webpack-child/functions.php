<?php
  function my_theme_enqueue_scripts() {
    wp_register_script( 'bundle', get_stylesheet_directory_uri() . '/public/bundle.js', array(), '1.0.0' );
    wp_enqueue_script( 'bundle' );
  }

  add_action( 'init', 'my_theme_enqueue_scripts' );
  add_action( 'wp_default_scripts', 'move_jquery_into_footer' );

  //function for move jquery wordpress to footer
  function move_jquery_into_footer( $wp_scripts ) {
    if( is_admin() ) {
      return;
    }

    $wp_scripts->add_data( 'jquery', 'group', 1 );
    $wp_scripts->add_data( 'jquery-core', 'group', 1 );
    $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
  }
