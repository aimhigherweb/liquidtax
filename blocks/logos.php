<?php
/**
 * Block Name: Logos Block
 * 
 */

	$cta = get_field('cta');
	$logos = get_field('logos');

?>

<section 
	id="<?php if(array_key_exists('anchor', $block)){echo $block['anchor'];} ?>" 
	class="block logos <?php if(array_key_exists('className', $block)){echo $block['className'];} ?>"
>
	<span class="background">
		<?php echo wp_remote_retrieve_body(wp_remote_get(get_template_directory_uri() . '/src/img/blob_thin.svg')); ?>
	</span>
		<h2><?php echo get_field('heading'); ?></h2>
		<div class="content">
			<?php echo get_field('content'); ?>
			<?php
				if($cta && $cta['text']) {
					echo '<a href="' . $cta['link'] . '" class="btn cta">' . $cta['text'] . '</a>';
				}
			?>
		</div>
		<?php
			if( $logos ): ?>
				<ul>
					<?php foreach( $logos as $logo ): ?>
						<li>
							<a target="_blank" href="<?php echo $logo['caption']; ?>">
								<img 
									class="logo"
									src="<?php echo $logo['sizes']['logos']; ?>" 
									alt="<?php echo $logo['title']; ?>"
								/>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
		<?php endif; ?>
</section>