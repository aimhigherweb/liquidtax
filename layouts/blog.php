<?php

	$pageId = get_option('page_for_posts');
	$page = get_page($pageId);
	$blog = get_permalink( $page );

?>

<h1><?php echo get_the_title($page); ?></h1>

<div class="content">
	<?php if(have_posts()) :

		echo '<ul class="blocks">';
			
			while(have_posts()) : 
				
				the_post();

				$tags = get_the_tags();
				
				?>

					<li class="service">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'block_image_small'); ?>" alt="" />
						<h2><?php echo get_the_title(); ?></h2>
						<p class="sub">
							<?php echo $post->post_date;
							if(check_field_value([$tags])) : 
								echo ', '
							?>
								<a href="<?php echo get_tag_link($tags[0]); ?>">
									<?php echo $tags[0]->name; ?>
								</a>
							<?php endif; ?>
						</p>
						<div class="content">
							<?php echo get_the_excerpt(); ?>
						</div>
						<a href="<?php echo get_the_permalink(); ?>" class="block_link">
							<span class="sr-only">Read full article <?php echo get_the_title(); ?></span>
						</a>
					</li>

				<?php

			endwhile;

		echo '</ul>'; 

		echo get_the_posts_pagination();

	endif; ?>
</div>