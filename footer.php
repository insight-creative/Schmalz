<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="footer-background">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-background-combined.png" alt="">
		</div>
		<div class="footer-inner">
			<div id="copyright" class="center">
			<?php echo do_shortcode('[gtranslate]'); ?>
				<p class="footer-copyright">&copy;
					<?php
					echo date_i18n(
						/* translators: Copyright date format, see https://www.php.net/date */
						_x( 'Y', 'copyright date format', 'insightcustom' )
					);
					?>
					<?php bloginfo( 'name' ); ?> All Rights Reserved.<br>
					<?php if(get_theme_mod('address')) { 
						?>
						<a href="https://goo.gl/maps/f76JTCB4pNJ6MckN7" target="_blank" rel="noopener noreferrer">
						<?php echo get_theme_mod( 'address' ); ?>
						</a>
						<?php
					} ?>
					|
					<?php if(get_theme_mod('phone')) { 
						?>
						<a href="tel:<?php echo get_theme_mod( 'phone' ); ?>">
							<?php echo get_theme_mod( 'phone' ); ?>
						</a>
						<?php
					} ?>
				</p><!-- .footer-copyright -->
				<div class="footer-social">
					<?php get_template_part( '/template-parts/footer/social-media' ); ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
