<?php
/**
 * Block Name: Standard Block
 * 
 */
	$cta = get_field('cta');

?>

<section 
	id="<?php if(array_key_exists('anchor', $block)){echo $block['anchor'];} ?>" 
	class="block standard <?php if(array_key_exists('className', $block)){echo $block['className'];} ?>"
>
	
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