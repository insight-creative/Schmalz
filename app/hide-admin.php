<?php
// pick a hook from the wp-login.php file that best our needs. I chose the filter: wp_login_errors
add_filter( 'wp_login_errors', 'my_login_form_lock_down', 90, 2 );
/**
 * Completely lock down the WordPress login form by hijacking the page
 * and only executing the the login header, footer, and necessary
 * closing tags.
 *
 * Provide a secret way to show the login form as a url variable in
 * case of emergencies.
 */
function my_login_form_lock_down( $errors, $redirect_to ){
  // access the login form like so:  http://example.com/wp-login.php?secretform=yesplease
  $secret_key = "admin-login";
  $secret_password = "true";

  if ( !isset( $_GET[ $secret_key ] ) || $_GET[ $secret_key ] != $secret_password ) {
    login_header(__('Log In'), '', $errors);
    echo "</div>";
    do_action( 'login_footer' );
    echo "</body></html>";
    exit;
  }

  return $errors;
}
?>
