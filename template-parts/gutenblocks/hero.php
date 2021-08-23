<?php
  $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  $customHeroTitle = get_field('custom_hero_title');
  $postid = get_the_ID();
  $bodyClass = get_body_class();
  ?>
    <section class="hero" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
    <div class="hero-filter" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;"></div>
      <div class="hero-overlay">
        <div class="header-outer-wrap">
          <div class="header-inner-wrap text-center">
            <?php if ( $customHeroTitle ) {
              ?>
              <h1 class="heading-accent"><?php echo $customHeroTitle ?></h1>
              <?php
            } else {
              ?>
              <h1 class="heading-accent"><?php echo the_title(); ?></h1>
              <?php 
            }
            ?>
          </div>
        </div>
      </div>
    </section>
