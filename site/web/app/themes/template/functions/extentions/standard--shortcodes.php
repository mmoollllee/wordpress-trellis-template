<?php

/*
  mail & email with
  [mail data-icon-left data-icon-right class]name@example.tld[/mail]
*/

add_shortcode( 'mail', 'wpcodex_hide_email_shortcode' );
add_shortcode( 'email', 'wpcodex_hide_email_shortcode' );
	function wpcodex_hide_email_shortcode( $atts , $content = null ) {
	  $atts = array_change_key_case((array)$atts, CASE_LOWER);
		$a = shortcode_atts([
			'class' => '',
			'data-icon-left' => '',
			'data-icon-right' => '',
    ], $atts);
		if ( ! is_email( $content ) ) {
			return;
		}
		return '<a ' . ($a['class'] ? 'class="'.$a['class'].'" ' : '' ) . ($a['data-icon-left'] ? 'data-icon-left="'.$a['data-icon-left'].'" ' : '' ) . ($a['data-icon-right'] ? 'data-icon-right="'.$a['data-icon-right'].'" ' : '' ) . 'itemprop="email" href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
	}


/*
  Excerpt:
	Output Wordpress Post Excerpt in the Content
*/

add_shortcode( 'excerpt', 'excerpt_shortcode' );
	function excerpt_shortcode( $args, $content = null ) {
		global $post;
		return "<p>". $post->post_excerpt . "</p>";
	}


/*
  Title:
	Output Wordpress Post Title in the content
*/

add_shortcode( 'title', 'title_shortcode' );
	function title_shortcode( $args, $content = null ) {
		return get_the_title();
	}


/*
  Field:
	Get an ACF Field in the content
*/

add_shortcode( 'field', 'field_shortcode' );
	function field_shortcode( $atts, $content = null ) {

    $atts = array_change_key_case((array)$atts, CASE_LOWER);
		$a = shortcode_atts([
			'name' => '',	//name of the field
			'id' => '',		//optional id (e.g. "options") where to get the field
    ], $atts);

    global $post;

		return get_field($a['name'], ($a['id'] ? $a['id'] : $post->id ) );
	}


/*
  Add to acf
*/

add_filter('acf/format_value/type=textarea', 'acf_text_fields_shortcode', 10, 3);
add_filter('acf/format_value/type=text', 'acf_text_fields_shortcode', 10, 3);
add_filter('acf/format_value/type=acf_code_field', 'acf_text_fields_shortcode', 10, 3);
	function acf_text_fields_shortcode( $value, $post_id, $field ) {
		$value = do_shortcode($value);
		return $value;
	}
