<?php

if( function_exists('acf_set_options_page_menu') && function_exists('acf_add_options_sub_page') ):

	acf_set_options_page_menu('optionen');
	acf_add_options_sub_page(array(
	    'page_title' => __('Optionen'),
	    'menu_title' => __('Optionen'),
	    'menu_slug' => 'optionen',
	));

endif;
