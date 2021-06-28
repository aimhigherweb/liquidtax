<?php
/**
 * Block Name: Logos Block
 * 
 */
	global $wp_filesystem;

	$cta = get_field('cta');

?>

<section class="block logos">
	
	<div>
		<h2><?php echo get_field('heading'); ?></h2>
		<div class="content">
			<?php echo get_field('content'); ?>
			<?php
				if($cta) {
					echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
				}
			?>
		</div>
	</div>

</section>