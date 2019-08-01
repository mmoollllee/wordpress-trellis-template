<?php

/*
  extra .js file for this
*/

  function slideout_enqueue_script() {
    wp_enqueue_script( 'slideout-script', get_template_directory_uri() . '/inc/slideout/slideout.min.js', false, false, true );
  }
add_action( 'wp_enqueue_scripts', 'slideout_enqueue_script', 11 );
