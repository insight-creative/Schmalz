<?php
$args = array(
    'post_type'      => 'Staff',
    'posts_per_page' => -1,
    'order'          => 'ASC'
);

$staff = new WP_Query( $args );
if ( $staff->have_posts() ) : ?>
    <?php while ( $staff->have_posts() ) : $staff->the_post(); ?>
    <?php 
    $featuredImage = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
    $img_id = get_post_thumbnail_id(get_the_ID());
    $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); 
    ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="service-card">
        <div class="service-card__image-wrapper">
            <img src="<?php echo $featuredImage ?>" alt="<?php echo $alt_text ?>" class="service-card__image">
            <div class="service-card__view-gallery-overlay">
                <span>View Bio</span>
            </div>
        </div>
        <h3 class="text-center g6 service-card__title"><?php the_title(); ?></h3>
    </a>
    <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>