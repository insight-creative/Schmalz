<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<div class="main-content">
			<?php get_template_part( '/template-parts/hero' ); ?>
			<?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );
                endwhile; // End of the loop.
            ?>
			<div class="container-wide flex flex-column flex-row-m padding-top-50 padding-bottom-50">
				<div class="form-wrapper bg-light w-100 w-70-m">
					<?php echo do_shortcode( '[forminator_form id="733"]' ); ?>
				</div>
				<div class="contact-sidebar w-100 w-30-m">
					<div class="contact-sidebar__inner">
						<h2 class="g5"><?php bloginfo( 'name' ); ?></h2>
						<p>
						<?php if(get_theme_mod('address')) { ?>
							<a href="https://goo.gl/maps/f76JTCB4pNJ6MckN7" target="_blank" rel="noopener noreferrer">
								<?php echo get_theme_mod( 'address' ); ?>
							</a>
						<?php } ?>
						Schmalz is located just two miles east of Highway 441 on KK in Appleton.
						</p>
						<p>
							<?php if( get_theme_mod( 'phone' ) ) { ?>
								Phone: 
								<a href="tel:<?php echo get_theme_mod( 'phone' ); ?>">
									<?php echo get_theme_mod( 'phone' ); ?>
								</a>
							<?php } ?>
						</p>
						<p>
							Toll Free: 
							<a href="tel:866-733-8223">866-733-8223</a>
						</p>
						<p>
							Fax: 920-733-3262
						</p>
						<p>
							<?php if( get_theme_mod( 'email' ) ) { ?>
								Email:  
								<a href="mailto: info@schmalzlandscaping.com">info@schmalzlandscaping.com</a>
							<?php } ?>
						</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11432.868023110323!2d-88.3135863!3d44.2437765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefd8e577743daff5!2sSchmalz%20Custom%20Landscaping!5e0!3m2!1sen!2sus!4v1616523971549!5m2!1sen!2sus" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" title="Schmalz Custom Landscaping on Google Maps"></iframe>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( '/template-parts/careers-cta' ); ?>
	</main>
</div>
<?php
get_footer();
