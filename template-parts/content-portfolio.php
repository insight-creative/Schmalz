<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<figure class="fig" style="background: url('<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>') no-repeat; background-size: cover; background-position:center;">
	<figcaption class="figcaption">
		<h3><?php echo get_the_title(); ?></h3>
		<a href="<?php echo get_permalink(); ?>" aria-label="Read More: <?php echo get_the_title(); ?>">
			<div class="fig-more">
				<div class="fig-more-inner">
					<p><?php echo get_the_excerpt(); ?></p>
					<p><span class="btn-fill fill">Read More</span></p>
				</div>
			</div>
		</a>
	</figcaption>
</figure>
