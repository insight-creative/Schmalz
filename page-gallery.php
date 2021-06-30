<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
            <?php $imageFull = get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>
            <div class="container-wide padding-top-50">
            <?php

            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => 1,
                'post_parent'    => $post->ID,
                'order'          => 'ASC',
                'orderby'        => 'menu_order',
            );

            $parent = new WP_Query( $args );
            if ( $parent->have_posts() ) : ?>
                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                <?php 
                $featuredImage = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                $img_id = get_post_thumbnail_id(get_the_ID());
                $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); 
                ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="service-card-wide padding-bottom-50">
                        <div class="service-card__image-wrapper">
                            <img src="<?php echo $featuredImage ?>" alt="<?php echo $alt_text ?>" class="service-card__image">
                            <div class="service-card__view-gallery-overlay">
                                <span>View Gallery</span>
                            </div>
                        </div>
                        <h3 class="text-center g5 service-card__title"><?php the_title(); ?></h3>
                    </a>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            </div>
            <div class="image-grid-container container-wide padding-bottom-50">
                <?php

                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => 20,
                    'post_parent'    => $post->ID,
                    'order'          => 'ASC',
                    'orderby'        => 'menu_order',
                    'offset'         => 1
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
                                    <span>View Gallery</span>
                                </div>
                            </div>
                            <h3 class="text-center g5 service-card__title"><?php the_title(); ?></h3>
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