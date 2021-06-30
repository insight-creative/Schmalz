<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div class="container padding-top-50 padding-bottom-50">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_post_thumbnail( 'blogCover' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<a href="#apply-now" class='btn btn-primary'>Apply Now</a>
		<a href="/careers/" class='btn btn-primary'>Back to All Careers</a>
		<div id="apply-now" class="padding-top-50">
		<?php echo do_shortcode( '[forminator_form id="811"]' ); ?>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
