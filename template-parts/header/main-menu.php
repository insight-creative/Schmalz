<nav id="primary" class="site-navigation w-100" aria-label="primary navigation">
  <h2 class="screen-reader-text">Main navigation</h2>
  <div class="main-menu-wrapper">
    <?php
      $menu_position = get_theme_mod( 'menu_position', 'flex-justify-start' );
     ?>
    <ul class="main-menu menu <?php echo $menu_position ?> >" aria-label="Main Menu">
      <?php
          wp_nav_menu( array(
              'theme_location'    => 'main-menu',
              'container_class'				=> 'main-menu',
              'depth'             => 4,
              'container'         => false,
              'items_wrap' 				=> '%3$s'
          ) );
      ?>
    </ul>
  </div>
</nav><!-- #site-navigation -->
