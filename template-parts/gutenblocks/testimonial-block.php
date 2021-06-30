<section class="testimonials container-wide">
    <div class="flex flex-column flex-row-m flex-justify-center">
        <div class="testimonial-wrap w-90 w-50-m">
            <div class="testimonial">
                <?php get_template_part( '/app/svg-icons/quote' ); ?>
                <p><?php the_field( 'testimonial_1_body' ); ?></p>
                <h3 class="author g6"><?php the_field( 'testimonial_1_author' ); ?></h3>
            </div>
        </div>
        <div class="testimonial-wrap w-90 w-50-m">
            <div class="testimonial">
                <?php get_template_part( '/app/svg-icons/quote' ); ?>
                <p><?php the_field( 'testimonial_2_body' ); ?></p>
                <h3 class="author g6"><?php the_field( 'testimonial_2_author' ); ?></h3>
            </div>
        </div>
    </div>
</section>