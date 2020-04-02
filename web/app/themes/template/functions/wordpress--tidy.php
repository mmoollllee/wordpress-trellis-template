<?php

	/*
	 	No Password-Mail
	*/

add_filter( 'send_password_change_email', '__return_false' );


  /*
    Adminbar ausmachen
  */

	function my_function_admin_bar(){
	    return false;
	}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


  /*
    Disable WP Emojicons
  */

	function disable_wp_emojicons() {
	  remove_action( 'admin_print_styles', 'print_emoji_styles' );
	  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	  remove_action( 'wp_print_styles', 'print_emoji_styles' );
	  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	  //add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
	}
add_action( 'init', 'disable_wp_emojicons' );


	function mg_deregister_embed(){
  		wp_deregister_script( 'wp-embed' );
	}
add_action( 'wp_footer', 'mg_deregister_embed' );

  /*
    Tidy Header
  */

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'parent_post_rel_link' );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);



  /*
    HTML 5
  */

add_theme_support( 'html5', array(
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );
