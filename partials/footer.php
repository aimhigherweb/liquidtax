<?php

global $wp_filesystem;

$logo = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];

?>

<footer class="footer">
	<span class="background">
		<?php echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/blob_footer.svg'); ?>
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

	<div class="contact">
		<h2>Contact Us</h2>
		<?php get_template_part('blocks/address'); ?>

		<nav class="social">
			<ul>
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'social_menu',
						'container' => false,
						'items_wrap' => '%3$s'
					));
				?>
			</ul>
		</nav>
	</div>

	

	<div class="footer_sub">
		<p>©<?php echo date("Y"); ?> Liquid Tax. All rights reserved.</p>
		<nav>
			<ul>
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'footer_menu',
						'container' => false,
						'items_wrap' => '%3$s'
					));
				?>
			</ul>
		</nav>
		<p class="copyright">Website by <a href="https://aimhigherweb.design" target="_blank" rel="nofollow">AimHigher Web</a></p>
	</div>
</footer>