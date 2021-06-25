<?php

	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_social_icons',
			'title' => 'Social Menu Icons',
			'fields' => array(
				array(
					'key' => 'field_social_icon',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'image',
					'required' => 1,
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'mime_types' => 'svg',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'nav_menu_item',
						'operator' => '==',
						'value' => 'location/social_menu',
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
    
?>