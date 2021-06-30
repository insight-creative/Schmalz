<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main" data-barba="container" data-barba-namespace="<?php echo the_title(); ?>-section">
		<a id="main-content" tabindex="-1"></a>
		<div class="main-content">
			<?php get_template_part( '/template-parts/hero' ); ?>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
		</div>
	</main>
</div>
<?php
get_footer();
