<?php
/**
 * Block Name: Team Profiles
 * 
 */
global $wp_filesystem;

if( have_rows('team') ):

	echo '<ul class="team">';

    while( have_rows('team') ) : the_row(); ?>

	<li class="profile">
		<img 
			src="<?php echo get_sub_field('image')['sizes']['block_image_small']; ?>" 
			alt="Profile image of <?php echo get_sub_field('name'); ?>" 
		/>
		<h3><?php echo get_sub_field('name'); ?></h3>
		<p class="role"><?php echo get_sub_field('role'); ?></p>
		<div class="bio"><?php echo get_sub_field('bio'); ?></div>
		<dl class="liquid">
			<dt>Favourite Liquid</dt>
			<dd>
				<?php if($wp_filesystem) {echo $wp_filesystem->get_contents(get_template_directory_uri() . '/src/img/drop_hand.svg');} ?>
				<?php echo get_sub_field('liquid'); ?>
			</dd>
		</dl>
	</li>

    <?php endwhile;

	echo '</ul>';
endif;

?>