<?php

require_once('builder/builder.php');
require_once('builder/acf.php');


  function autoload( $path ) {
      $items = glob( $path . DIRECTORY_SEPARATOR . "*" );

      foreach( $items as $item ) {
          $isPhp = pathinfo( $item )["extension"] === "php";
          $isJs = pathinfo( $item )["extension"] === "js";

          if ( is_file( $item ) && $isPhp ) {
              require_once $item;
          } elseif ( is_file( $item ) && $isJs ) {
              add_action( 'wp_footer', function () {
            ?>
            	<script>
              <?php require_once $item; ?>
              </script>
            <?php
              }, 20 );
          } elseif ( is_dir( $item ) ) {
              autoload( $item );
          }
      }
  }
autoload( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . "functions" );
