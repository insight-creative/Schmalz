<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package InsightCustom
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<!-- Preconnect to Google Analytics -->
	<link rel="dns-prefetch" href="https://www.google-analytics.com">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
	<link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
	<link href="" rel="shortcut icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-barba="wrapper">
<a class="screen-reader-skip-to-content" href="#main-content" tabindex="0">
	<?php _e('Skip to main content', 'insightcustom'); ?></a>
<a class="screen-reader-skip-to-content" href="#footer" tabindex="0"><?php _e('Skip to footer content', 'insightcustom'); ?></a>
<div id="page" class="site">
	<header id="masthead-1" class="site-header shadow-1">
		<?php get_template_part('/template-parts/header/site-branding'); ?>
	</header><!-- #masthead -->
	<nav id="primary-mobile" class="mobile-navigation w-100" aria-label="primary navigation">
	  <h2 class="screen-reader-text">Main navigation</h2>
	  <div class="main-menu-wrapper-mobile">
	    <ul class="main-menu menu" aria-label="Main Menu">
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
	    <button id="close-menu" aria-expanded="false" aria-controls="main-menu" aria-label="Close the mobile menu">
	      <span id="close">Close</span>
	    </button>
	  </div>
	</nav><!-- #site-navigation -->
	<div id="content" class="site-content">
