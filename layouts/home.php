<?php

	global $wp_filesystem;

?>

<span class="overlay">
	<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/favicon.svg'); ?>
</span>
<?php echo the_content(); ?>
