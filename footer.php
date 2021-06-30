<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="footer-background" 
		data-tilt 
		data-tilt-full-page-listening
		data-tilt-reverse="true"
		data-tilt-max=".1" 
		data-tilt-speed="250" 
		data-tilt-perspective="500">
			<?php get_template_part( '/app/svg-icons/footer-background' ); ?>
		</div>
		<div class="footer-foreground"
		data-tilt 
		data-tilt-full-page-listening
		data-tilt-max=".1" 
		data-tilt-speed="250" 
		data-tilt-perspective="500">
		<?php get_template_part( '/app/svg-icons/footer-foreground' ); ?>
		</div>
		<div class="footer-inner">
			<?php get_template_part( '/template-parts/footer/copyright' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
