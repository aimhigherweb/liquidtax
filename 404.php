<?php
/**
 * 404 page
 *
 *
 * @package Liquid Tax
 * @version 1.0
 */

	get_template_part(
		'partials/layout', 
		null, 
		array(
			'template' => '404',
			'title' => '404 - Page not found'
		)
	);

?>
