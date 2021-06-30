<?php
/**
 * For displaying job application form
 *
 * Override this by copying it to currenttheme/wp-job-openings/single-job/form.php
 *
 * @package wp-job-openings
 * @version 1.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="awsm-job-form-inner">

	<?php
		/**
		 * before_awsm_application_form hook
		 *
		 * @since 1.0
		 */
		do_action( 'before_awsm_application_form' );
	?>

	<h2><?php echo esc_html( apply_filters( 'awsm_application_form_title', __( 'Apply for this position', 'wp-job-openings' ) ) ); ?></h2>

	<?php
		/**
		 * awsm_application_form_description hook
		 *
		 * @since 1.3
		 */
		do_action( 'awsm_application_form_description' );
	?>

 	<h1>test, application form will go here</h1>

	<div class="awsm-application-message" style="display: none;"></div>

	<?php
		/**
		 * after_awsm_application_form hook
		 *
		 * @since 1.0
		 */
		do_action( 'after_awsm_application_form' );
	?>

</div><!-- .awsm-job-form-inner -->
