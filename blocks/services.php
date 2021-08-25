<?php
/**
 * Block Name: Services Block
 * 
 */

	$cta = get_field('cta');

?>

<section 
	id="<?php if(array_key_exists('anchor', $block)){echo $block['anchor'];} ?>" 
	class="block services <?php if(array_key_exists('className', $block)){echo $block['className'];} ?>"
>
	
	<div>
		<h2><?php echo get_field('heading'); ?></h2>
		<?php
			if( have_rows('services') ):

				echo '<ul class="blocks">';
			
				while( have_rows('services') ) : the_row(); ?>
			
				<li class="service">
					<img 
						src="<?php echo get_sub_field('image')['sizes']['block_image_small']; ?>" 
						alt="" 
					/>
					<h3><?php echo get_sub_field('heading'); ?></h3>
					<p class="sub"><?php echo get_sub_field('sub_heading'); ?></p>
					<div class="content"><?php echo get_sub_field('content'); ?></div>
						<a href="<?php echo get_sub_field('link'); ?>" class="block_link">
							<span class="sr-only">
								Find out more about <?php echo get_sub_field('heading'); ?>
							</span>
						</a>
				</li>
			
				<?php endwhile;
			
				echo '</ul>';
			endif;
		?>
		<?php
			if(check_field_value([$cta, $cta['text']])) {
				echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
			}
		?>
	</div>
</section>