<?php

function cookieconsent_enqueue() {
  wp_enqueue_script( 'cookieconsent-script', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.min.js', false, false, true );
  wp_enqueue_script( 'cookieconsent-script-init', get_template_directory_uri() . '/functions/vendor/vendor--cookieconsent.js', array('cookieconsent-script'), false, true );
  wp_enqueue_style( 'cookieconsent-style', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.min.css' );
}
add_action( 'wp_enqueue_scripts', 'cookieconsent_enqueue', 20 );
