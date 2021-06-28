<?php

	global $wp_filesystem;

	$logo = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];

?>

<header class="header">
	<span class="background">
		<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/blob_header_home.svg'); ?>
		<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/blob_thin.svg'); ?>
	</span>
	<a class="logo" href="/">
		<?php 
			if(preg_match('/\.svg$/', $logo)) {
				echo $wp_filesystem->get_contents($logo);
			} 
			else {
				echo '<img src="' . $logo . '" />';
			}
		?>
		<span class="sr-only">Return to homepage</span>
	</a>
	
	<nav class="main">
		<button class="hamburger" onclick="toggleMenu()">
			<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/hamburger.svg'); ?>
			<span class="sr-only">Toggle Main Menu</span>
		</button>
		<ul>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'container' => false,
					'items_wrap' => '%3$s'
				));
			?>
		</ul>
	</nav>
</header>