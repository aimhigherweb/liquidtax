<?php
/**
 * Block Name: Testimonials
 * 
 */
global $wp_filesystem;

?>

<div class="block testimonial">
	<h2><?php echo get_field('heading'); ?></h2>
	<div class="content">
		<?php echo get_field('content'); ?>
	</div>

	<?php
		if( have_rows('testimonials') ):
			$i = -1;

			echo '<div class="testimonials" style="--testimonials:' . count(get_field('testimonials')) . '">';

			echo '<span class="background">' . wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/blob_testimonials.svg')) . '</span>';

			while( have_rows('testimonials') ) : the_row(); $i++; ?>

				<input 
					type="radio" 
					name="testimonials" 
					id="testimonial_<?php echo $i; ?>" 
					value="testimonial_<?php echo $i; ?>" 
					<?php if($i == 0) {echo 'checked'; }?>
				/>
				<label for="testimonial_<?php echo $i; ?>">
					<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/drop.svg')); ?>
					<span><?php echo get_sub_field('name'); ?></span>
				</label>
				<blockquote>
					<img 
						src="<?php echo get_sub_field('image')['sizes']['thumbnail']; ?>" 
						alt="Profile image of <?php echo get_sub_field('name'); ?>" 
					/>
					<div class="quote">
						<?php echo get_sub_field('testimonial'); ?>
					</div>
					<cite>
						<p class="name"><?php echo get_sub_field('name'); ?></p>
						<p class="company"><?php echo get_sub_field('company'); ?></p>
					</cite>
				</blockquote>
			<?php endwhile;

			echo '</div>';
		endif;
	?>

</div>