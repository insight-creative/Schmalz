<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main-content" tabindex="-1" class="site-main" role="main">
		<?php get_template_part("/template-parts/hero"); ?>
		<div class="container-wide flex flex-column flex-row-m padding-top-25 padding-bottom-25">
			<div class="archive-content w-100 w-70-m flex flex-wrap">
				<?php if ( have_posts() ) : ?>
					<header class="page-header greyBorder">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					the_posts_pagination();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</div>
			<div class="sub-nav-sidebar w-100 w-30-m">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main>
</div>
<?php
get_sidebar();
get_footer();
