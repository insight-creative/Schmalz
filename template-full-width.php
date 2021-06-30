<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: Full Width Template
 * 
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<div class="main-content">
            <?php get_template_part( '/template-parts/hero' ); ?>
            <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );
                endwhile; // End of the loop.
            ?>
            <?php get_template_part( '/template-parts/cta' ); ?>
		</div>
	</main>
</div>
<?php
get_footer();