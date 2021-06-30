<div class="masthead-inner container-wide">
  <div class="masthead-inner-wrap w-100">
    <div class="logo-wrapper">
      <div class="logo-wrapper-inner">
        <a href="<?php echo esc_url( site_url( '/' ) ); ?>" id="primary-logo" class="site-logo dim-light" title="Home">
          <?php $custom_logo_id = get_theme_mod( 'primary_logo' ); ?>
          <?php
            if( !empty( $custom_logo_id ) ):
              ?>
              <img src="<?php echo $custom_logo_id; ?>" alt="Schmalz Logo" width="300" height="100">
              <?php
            else:
              insight_site_logo();
            endif;
          ?>
        </a>
      </div>
    </div>
    <?php
	     $menu_icon = get_theme_mod( 'menu_icon', 'hamburger--collapse' );
    ?>
    <div class="menu-button-wrap" aria-label="mobile menu toggle button" tabindex="0">
      <button class="hamburger <?php echo $menu_icon?>" type="button" aria-label="Mobile menu button" aria-expanded="false">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
    <?php get_template_part( '/template-parts/header/main-menu' ); ?>
  </div>
</div>
