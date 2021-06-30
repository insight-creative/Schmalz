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
<?php get_template_part( "/template-parts/hero" ); ?>
<div id="primary" class="content-area">
	<main class="site-main container" role="main">
		<a id="main-content" tabindex="-1"></a>
			<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'single-careers' );
				endwhile; // End of the loop.
			?>
	</main><!-- #main -->
</div><!-- #primary -->
</div>

<?php
get_footer();
