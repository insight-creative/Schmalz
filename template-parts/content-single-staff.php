<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div class="container-wide single-staff-container">
	<div class="flex flex-column-reverse flex-row-m">
		<div class="w-100 w-60-m">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		<div class="w-100 w-40-m">
			<?php 
				$featuredImage = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
				$img_id = get_post_thumbnail_id(get_the_ID());
				$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); 
			?>
			<div class="staff-image-wrapper">
				<img src="<?php echo $featuredImage ?>" alt="<?php echo $alt_text ?>" class="staff-image">
			</div>
		</div>
	</div>
	<a href="/about/" class="btn btn-primary">Back to All Staff</a>
</div>
