<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<div class="container padding-top-50 padding-bottom-50">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'insightcustom' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Take a look at some of the links below or try a search to find what you are looking for? Contact us if the issue persists and you cannot find what you\'re looking for.', 'insightcustom' ); ?></p>
				<ul>
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
		</div>
	</main>
</div>

<?php
get_footer();
