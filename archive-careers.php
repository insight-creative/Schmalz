<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package InsightCustom
 */

get_header();
?>
<?php get_template_part( '/template-parts/careers-hero' ); ?>
<div class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<div class="main-content">
            <div class="careers-container">
                <div class="container padding-bottom-50">
                    <h2 class="g4">
                    Schmalz Custom Landscaping offers competitive wages, benefit packages and a family-friendly work environment. Employees may also enjoy company discounts and continuing education (when applicable).
                    </h2>
                </div>
                <div class="image-grid-container container-wide padding-top-50">
                    <?php
                    $args = array(
                        'post_type'      => 'Careers',
                        'posts_per_page' => -1,
                        'order'          => 'ASC'
                    );

                    $careers = new WP_Query( $args );
                    if ( $careers->have_posts() ) : ?>
                        <?php while ( $careers->have_posts() ) : $careers->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="careers-card">
                            <h2 class="g4 careers-card__title"><?php the_title(); ?></h2><br>
                            <span class="careers-card__more">More Details <?php get_template_part( "/app/svg-icons/chevron-right" ); ?></span>
                        </a>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
		</div>
	</main>
</div>
<?php
get_footer();
