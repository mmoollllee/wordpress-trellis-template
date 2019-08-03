<?php

/*
  Optionen für Standardgrößen überschreiben und Post Thumbnails aktivieren
*/

//add_image_size( 'custom-image', 2000, 1200, true );
//add_image_size( 'portrait', 300, 300, array( 'center', 'center' ) );
//add_image_size( 'slider', 800, 1200, false );

#add_theme_support( 'post-thumbnails' );

#Standardgrößen
set_post_thumbnail_size( 400, 400, false );
update_option('medium_size_w',600);
update_option('medium_size_h', 0);
update_option('medium_large_size_w',900);
update_option('medium_large_size_h', 0);
update_option('large_size_w',1800);
update_option('large_size_h', 0);


/*
  ACF Image Size Auswahl füllen
*/

	function acf_load_image_sizes( $field ) {
	    // reset choices
	    $field['choices'] = array();
		global $_wp_additional_image_sizes;

		foreach ( get_intermediate_image_sizes() as $_size ) {
			if ( in_array( $_size, array('thumbnail', 'medium', 'medium_large', 'large') ) ) {
	            $field['choices'][ $_size ] = $_size . " (". get_option( "{$_size}_size_w" ) ."x".get_option( "{$_size}_size_h" ).")";
			} elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {

	            $field['choices'][ $_size ] = $_size . " (". $_wp_additional_image_sizes[ $_size ]['width']."x".$_wp_additional_image_sizes[ $_size ]['height'].")";
			}
		}

	    // return the field
	    return $field;

	}
add_filter('acf/load_field/name=imagesize', 'acf_load_image_sizes');
