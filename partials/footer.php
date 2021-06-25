<?php

	global $wp_filesystem;

?>

<footer class="footer">
	<a class="logo" href="/">
		<?php /*echo $wp_filesystem->get_contents(wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0]);*/ ?>
		<span class="sr-only">Return to homepage</span>
	</a>

	<nav class="social">
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