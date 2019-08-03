<?php

function fancybox_enqueue() {
  wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/vendor/fancybox/jquery.fancybox.3.5.7.js', array('jquery'), false, true );
  wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/vendor/fancybox/jquery.fancybox.3.5.7.css' );
}
add_action( 'wp_enqueue_scripts', 'fancybox_enqueue' );
