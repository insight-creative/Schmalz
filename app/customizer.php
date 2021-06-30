<?php
/**
 * InsightCustom Theme Customizer
 *
 * @package InsightCustom
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function insightcustom_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'insightcustom_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'insightcustom_customize_partial_blogdescription',
		) );
	}
	// Add site info options to the customizer
	require get_template_directory() . ( '/app/customizer/site-info.php' );
	// Add theme options to the customizer
	require get_template_directory() . ( '/app/customizer/theme-options.php' );
	// Add header options to the customizer
	require get_template_directory() . ( '/app/customizer/header.php' );
	// Add Footer Section
	require get_template_directory() . ( '/app/customizer/footer.php' );
	// Add colors to the color options
	require get_template_directory() . ( '/app/customizer/colors.php' );
	// Add Blog Customization Controls Section
	require get_template_directory() . ( '/app/customizer/blog-options.php' );
	// Add Social Media Customization Controls Section
	require get_template_directory() . ( '/app/customizer/social-media.php' );
	// Easily Insert Header and Footer Code
	require get_template_directory() . ( '/app/customizer/scripts.php' );
}
add_action( 'customize_register', 'insightcustom_customize_register' );
// Add our css styles
add_action( 'wp_head', 'insight_customizer_css');
function insight_customizer_css()
	{
	  ?>
	     <style type="text/css">
			 <?php if (get_theme_mod('header_color')): ?>
				 .site-header { background: <?php echo get_theme_mod('header_color', '#43C6E4'); ?>; }
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('primary_color')): ?>
				 h1,h2,h3,h4,h5,h6 { color: <?php echo get_theme_mod('primary_color'); ?>; }
			 <?php
	 			endif;
			 ?>
			 <?php if (get_theme_mod('text_color')): ?>
				 p { color: <?php echo get_theme_mod('text_color'); ?>; }
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('link_color')): ?>
				 a { color: <?php echo get_theme_mod('link_color'); ?>; }
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('primary_button_color')): ?>
				 .btn-fill { background: <?php echo get_theme_mod('primary_button_color'); ?>;
			  	border: <?php echo get_theme_mod('primary_button_color'); ?>;}
				 .btn-fill:hover, .btn-fill:focus { border-color: <?php echo get_theme_mod('primary_button_color'); ?>;
					background: <?php echo get_theme_mod('primary_button_color'); ?>;}
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('primary_button_hover_color')): ?>
				 .fill:hover, .fill:focus { box-shadow: inset 0 0 0 2em <?php echo get_theme_mod('primary_button_hover_color'); ?>; }
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('secondary_button_color')): ?>
				 .btn-fill-alt { background: <?php echo get_theme_mod('secondary_button_color'); ?>;
			  	border: <?php echo get_theme_mod('secondary_button_color'); ?>;}
				 .btn-fill-alt:hover, .btn-fill-alt:focus { border-color: <?php echo get_theme_mod('secondary_button_color'); ?>;
					background: <?php echo get_theme_mod('secondary_button_color'); ?>;}
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('secondary_button_hover_color')): ?>
				 .fill-alt:hover, .fill-alt:focus { box-shadow: inset 0 0 0 2em <?php echo get_theme_mod('secondary_button_hover_color'); ?>; }
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('hide_dates')): ?>
				 .post-date {display: none;}
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('hide_author')): ?>
				 .post-author {display: none;}
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('hide_category')): ?>
				 .post-cat {display: none;}
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('hide_featured_images')): ?>
				 .post-thumbnail {display: none;}
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('hide_related_posts')): ?>
				 #featured-posts {display: none;}
			 <?php
		 		endif;
			 ?>
			 </style>
	  <?php
	}
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function insightcustom_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function insightcustom_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function insightcustom_customize_preview_js() {
	wp_enqueue_script( 'insightcustom-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'insightcustom_customize_preview_js' );
