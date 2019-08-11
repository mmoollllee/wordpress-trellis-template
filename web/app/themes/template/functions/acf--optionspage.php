<?php

if( function_exists('acf_set_options_page_menu') && function_exists('acf_add_options_sub_page') ):

	acf_set_options_page_menu('optionen');
	acf_add_options_sub_page(array(
	    'page_title' => __('Optionen'),
	    'menu_title' => __('Optionen'),
	    'menu_slug' => 'optionen',
	));

endif;


/*
	Add Logo Fields
*/

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c88ede69567e',
	'title' => 'Logo',
	'fields' => array(
		array(
			'key' => 'field_5c88edeabc778',
			'label' => 'Logo',
			'name' => 'logo',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c9943be281b7',
			'label' => 'Logo klein',
			'name' => 'logo_klein',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c994586fd7d1',
			'label' => 'Logo mini',
			'name' => 'logo_mini',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '34',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'optionen',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
