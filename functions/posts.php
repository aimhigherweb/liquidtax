<?php

	// Testimonials
	function create_testimonial_post_type() {
		register_post_type('testimonials',
			array(
				'labels' => array(
					'name' => 'Testimonials',
					'singular_name' => 'Testimonial',
				),
				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-format-chat',
				'show_in_rest' => true,
				'supports' => array(
					'editor',
					'title',
					'thumbnail',
					'revisions',
					'custom-fields',
				),
			)
		);
	};
	add_action('init', 'create_testimonial_post_type');


?>