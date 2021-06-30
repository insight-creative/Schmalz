<?php
// This theme uses wp_nav_menu() in multiple locations.
register_nav_menus( array(
  'main-menu' => esc_html__( 'Main Menu', 'insightCustom' ),
  'footer-menu' => esc_html__( 'Footer Menu', 'insightcustom' ),
) );
?>
