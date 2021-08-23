<?php 
  $ctaTitle = get_field('cta_title');
  $ctaBody = get_field('cta_body');
  $ctaLink = get_field('cta_link');
?>

<section class="simple-cta w-100">
    <div class="text-center">
        <h3><?php echo $ctaTitle; ?></h3>
        <?php if( !empty( $ctaBody ) ): ?>
          <p><?php echo $ctaBody; ?></p>
        <?php endif; ?>
        <a href="<?php echo $ctaLink['url']; ?>" class='btn btn-primary' target="<?php echo $ctaLink['target']; ?>"><?php echo $ctaLink['title']; ?></a>
    </div>
</section>