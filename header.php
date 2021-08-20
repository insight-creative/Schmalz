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
	<!-- Preconnect to Google Analytics -->
	<link rel="dns-prefetch" href="https://www.google-analytics.com">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
	<link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
	<link href="" rel="shortcut icon">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-10TNM4NLRK"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-10TNM4NLRK');
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-barba="wrapper">
<a class="screen-reader-skip-to-content" href="#main-content" tabindex="0">
	<?php _e('Skip to main content', 'insightcustom'); ?></a>
<a class="screen-reader-skip-to-content" href="#footer" tabindex="0"><?php _e('Skip to footer content', 'insightcustom'); ?></a>
<div id="page" class="site">
	<header id="masthead-1" class="site-header shadow-1">
		<div class="site-header__inner-wrap container-wide w-100">
			<div class="site-header__logo-wrap">
				<a href="<?php echo esc_url( site_url( '/' ) ); ?>" class="site-header__logo dim-light" title="Home">
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
			<nav id="primary" class="site-header__navigation w-100" aria-label="primary navigation">
				<h2 class="screen-reader-text">Main navigation</h2>
				<div class="main-menu-wrapper">
					<?php
						$menu_position = get_theme_mod( 'menu_position', 'flex-justify-end' );
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
		</div>
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
