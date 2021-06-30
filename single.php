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
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
			<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'single' );
				endwhile; // End of the loop.
			?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_template_part("/template-parts/blog/custom-post-nav"); ?>
<?php get_template_part("/template-parts/blog/related-posts"); ?>
</div>

<?php
get_footer();
