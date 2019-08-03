<?php

  /*
    Aktiviert die Webfont, z.B. Typektit oder Google Font
  */


  add_action( 'wp_head', function () { ?>

    <link rel="stylesheet" href="https://use.typekit.net/pqg3zjy.css">

  <?php } );

  add_action( 'admin_head', function () { ?>

    <link rel="stylesheet" href="https://use.typekit.net/pqg3zjy.css">

  <?php } );

/*
font-family: brandon-grotesque, sans-serif;
font-weight: 300,400,500,900;
font-style: normal;
*/

	function mgtheme_enqueue() {

		wp_enqueue_style( 'theme-bootstrap-reboot', get_template_directory_uri() . '/css/bootstrap-reboot.css' );
		wp_enqueue_style( 'theme-bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.css' );
		wp_enqueue_style( 'theme-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
		wp_enqueue_style( 'theme-main', get_template_directory_uri() . '/css/main.css' );

//    Gutenberg Styles Laden wenn nötig
//		if ( 'aktuelles_cpt' === get_post_type() || is_page(596) ) { wp_enqueue_style( 'theme-gutenberg', get_template_directory_uri() . '/inc/css/gutenberg.css' ); }

    wp_enqueue_script('jquery');

//		wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/inc/js/main.js', array('jquery'), false, true ); 

//		wp_enqueue_script( 'anime-script', get_template_directory_uri() . '/inc/js/anime.min.js', array('jquery'), false, true );

//		wp_enqueue_script( 'isotope-script', get_template_directory_uri() . '/inc/js/isotope.pkgd.js', array('jquery'), false, true );
//		wp_enqueue_script( 'nouislider-script', get_template_directory_uri() . '/inc/js/nouislider.js', array('jquery'), false, true );

//		wp_enqueue_style( 'accordion-css', get_template_directory_uri() . '/inc/accordion/accordion.css' );
//		wp_enqueue_script( 'accordion-script', get_template_directory_uri() . '/inc/accordion/accordion.js', array('jquery'), false, true );

	}
add_action( 'wp_enqueue_scripts', 'mgtheme_enqueue' );
