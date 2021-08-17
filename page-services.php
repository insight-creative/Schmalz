<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main-content" tabindex="-1" class="site-main" role="main">
		<div class="main-content">
            <?php get_template_part( '/template-parts/hero' ); ?>
            <div class="bg-light padding-bottom-10">
            <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );
                endwhile; // End of the loop.
            ?>
            </div>
            <div class="image-grid-container container-wide padding-top-50 padding-bottom-50">
            <?php

            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => $post->ID,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );

            $parent = new WP_Query( $args );
            if ( $parent->have_posts() ) : ?>
                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                <?php 
                $featuredImage = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                $img_id = get_post_thumbnail_id(get_the_ID());
                $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); 
                ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="service-card">
                        <div class="service-card__image-wrapper">
                            <img src="<?php echo $featuredImage ?>" alt="<?php echo $alt_text ?>" class="service-card__image">
                            <div class="service-card__view-gallery-overlay">
                                <span>View Service</span>
                            </div>
                        </div>
                        <h3 class="g5 text-center service-card__title"><?php the_title(); ?></h3>
                    </a>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
        <?php get_template_part( '/template-parts/cta' ); ?>
		</div>
	</main>
</div>
<?php
get_footer();
