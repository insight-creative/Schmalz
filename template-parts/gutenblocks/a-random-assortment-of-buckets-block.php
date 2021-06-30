<?php 
  $className = 'random-block';
  if ( !empty($block[ 'className' ]) ){
    $className .= ' ' . $block[ 'className' ];
  }
  if ( !empty($block['align']) ) {
    $className .= ' align' . $block[ 'align' ];
  }
  ?>
<section class="<?php echo esc_attr( $className ); ?> random-block">
  <ul class="random-list">
    <?php
    if ( have_rows( 'random_list' ) ) : 
    while ( have_rows( 'random_list' ) ): the_row();
		
    $randomIcon = get_sub_field( 'a_random_icon' );
    $randomIconHover = get_sub_field( 'a_random_icon_hover' );
    $randomTitle = get_sub_field( 'some_random_title' );
    $randomDescription = get_sub_field( 'just_throw_a_random_description_on_er' );
    $link = get_sub_field( 'link_to_something' );
    ?>
    <li class="random-list__item">
      <a href="<?php echo $link[ 'url' ]; ?>" class="random-list__link shadow-3">
        <div class="random-list__inner">
          <div class="random-list__image-wrapper">
            <img src="<?php echo $randomIcon; ?>" alt="">
            <img src="<?php echo $randomIconHover; ?>" alt="">
          </div>
          <h3 class="g6"><?php echo $randomTitle; ?></h3>
          <div class="g7"><?php echo $randomDescription; ?></div>
        </div>
      </a>
    </li>
    <?php
      endwhile;
      endif;
    ?>
     
  </ul>
  <img src="/wp-content/uploads/2021/03/HomePgWhiteFlowersLow.jpg" alt="" class="random-block-background-image">
</section>
