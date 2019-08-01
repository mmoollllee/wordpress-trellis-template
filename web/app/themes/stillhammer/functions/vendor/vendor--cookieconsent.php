<?php

function cookieconsent_enqueue() {
  wp_enqueue_script( 'cookieconsent-script', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.3.1.0.js', false, true );
  wp_enqueue_style( 'cookieconsent-style', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.min.3.1.0.css' );
}
add_action( 'wp_enqueue_scripts', 'cookieconsent_enqueue' );
