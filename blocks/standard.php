<?php
/**
 * Block Name: Standard Block
 * 
 */
	global $wp_filesystem;

	$cta = get_field('cta');

?>

<section class="block standard">
	
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
	<img 
		src="<?php echo get_field('image')['sizes']['block_image']; ?>" 
	/>
</section>