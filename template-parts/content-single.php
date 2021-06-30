<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div class="container-wide flex flex-column flex-row-m padding-top-25 padding-bottom-25">
	<div class="w-100 w-70-m lane-wide">
		<div class="post-wrapper">
			<div>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail( 'blogCover' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
			</div>
		</div>
	</div>
	<div class="blog-sidebar w-100 w-30-m">
		<?php get_sidebar(); ?>
	</div>
</div>
