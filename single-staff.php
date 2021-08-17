<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main-content" tabindex="-1" class="site-main" role="main">
			<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'single-staff' );
				endwhile; // End of the loop.
			?>
			<?php get_template_part( '/template-parts/careers-cta' ); ?>
	</main><!-- #main -->
</div><!-- #primary -->
</div>

<?php
get_footer();
