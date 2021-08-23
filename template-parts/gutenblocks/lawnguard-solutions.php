<div class="container">
  <h2 class="text-center no-margin">Custom solutions</h2>
</div>
<div class="image-grid-container container-wide padding-bottom-50">

<?php 
  
  if( have_rows('solutions') ):

    while( have_rows('solutions') ): the_row();

    $solutionImage = get_sub_field( 'image' );
    $solutionImageSize = 'medium';
    $solutionsTitle = get_sub_field( 'title' );

    ?>

    <div class="service-card service-card--custom-solutions">
      <div class="service-card__image-wrapper">
        <div class="service-card__image">
          <?php echo wp_get_attachment_image( $solutionImage, $solutionImageSize ); ?>
        </div>
        <div class="service-card__view-gallery-overlay">
            <span><?php echo $solutionsTitle; ?></span>
        </div>
      </div>
    </div>


<?php 

    endwhile;

  endif;
?>
  
</div>