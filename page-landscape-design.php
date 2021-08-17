<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package InsightCustom
 */

get_header();
?>
<?php get_template_part( '/template-parts/landscape-design-hero' ); ?>
<div class="content-area">
    <main id="main-content" tabindex="-1" class="site-main" role="main">
		<div class="main-content">
            <div class="bg-light padding-bottom-50">
            <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );
                endwhile; // End of the loop.
            ?>
            </div>
            <div class="container padding-top-50">
                <h3>Meet our design team!</h3>
            </div>
            <div class="image-grid-container container">
                <?php get_template_part('template-parts/staff-feed'); ?>
            </div>
		</div>
        <?php get_template_part( '/template-parts/cta' ); ?>
	</main>
</div>
<?php
get_footer();
