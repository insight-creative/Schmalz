<section class="hiring-wrap">
    <div class="flex flex-column flex-row-l">
        <div class="hiring w-50-l w-100">
            <div class="hiring-inner">
                <h2>
                <?php the_field( 'hiring_title' ); ?>
                </h2>
                <p><? the_field( 'hiring_body' ); ?></p>
                <ul class="jobs flex flex-column">
                <?php  
                    if( have_rows('job_positions') ):
                        while( have_rows('job_positions') ) : the_row();
                            $positionURL = get_sub_field( 'position_url' );
                            ?>
                            <li><a href="$positionURL[ 'url' ]" class="secondary-link g5"><?php the_sub_field( 'position_title' ); ?></a></li>
                            <?php
                        endwhile;
                    endif;
                ?>
                </ul>
                <a href="/careers/" class='btn btn-secondary'>View All Positions</a>
            </div>
        </div>
        <div class="w-50-l w-100 image-wrap">
            <div class="background-image">
                <?php $image = get_field( 'image' ); ?>
                <img src="<?php echo $image[ 'sizes' ][ 'medium' ]; ?>" alt="<?php echo $image[ 'alt' ]?>">
            </div>
        </div>
    </div>
</section>