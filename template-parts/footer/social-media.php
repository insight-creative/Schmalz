<div class="social-links flex flex-center flex-justify-end w-100">
  <?php if(get_theme_mod('facebook')) { ?>
    <a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank"><?php get_template_part( '/app/svg-icons/facebook' ); ?></a>
  <?php
  }
  ?>
  <?php if(get_theme_mod('instagram')) { ?>
    <a href="<?php echo get_theme_mod('instagram'); ?>" target="_blank"><?php get_template_part( '/app/svg-icons/instagram' ); ?></a>
  <?php
  }
  ?>
  <?php if(get_theme_mod('linkedin')) { ?>
    <a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank"><?php get_template_part( '/app/svg-icons/linkedin' ); ?></a>
  <?php
  }
  ?>
  <?php if(get_theme_mod('twitter')) { ?>
    <a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank"><?php get_template_part( '/app/svg-icons/twitter' ); ?></a>
  <?php
  }
  ?>
  <?php if(get_theme_mod('youtube')) { ?>
    <a href="<?php echo get_theme_mod('youtube'); ?>" target="_blank"><?php get_template_part( '/app/svg-icons/youtube' ); ?></a>
  <?php
  }
  ?>
</div>
