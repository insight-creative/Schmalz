<?php
/**
 * Displays footer widgets if assigned
 *
 * @package test
 * @since 1.0
 * @version 1.0
 */

?>

<?php
//up to 4 widgets for footer area
if ( is_active_sidebar( 'footer-1' ) ||
	 is_active_sidebar( 'footer-2' ) ||
	 is_active_sidebar( 'footer-3' )) :
?>

	<div class="footer-widgets flex">
		<?php
		if ( is_active_sidebar( 'footer-1' ) ) { ?>
			<div class="footer-widget-1 w-100 w-30-l">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-2' ) ) { ?>
			<div class="footer-widget-2 w-100 w-30-l">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-3' ) ) { ?>
			<div class="footer-widget-3 w-100 w-30-l">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		<?php }
		?>
	</div><!-- .widget-area -->

<?php endif; ?>
