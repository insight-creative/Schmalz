<?php

$wp_customize->add_section('theme_options', array(
'title' => 'Theme Options',
'description' => 'Choose some header styles for your site',
'priority' => 20,
));
$wp_customize->add_setting('disable_preloader');
$wp_customize->add_control('disable_preloader',
array(
  'label'    => __( 'Disable Preloader', 'insightcustom' ),
  'description' => 'Check to remove the preloader',
  'section'  => 'theme_options',
  'settings' => 'disable_preloader',
  'type'     => 'checkbox'
  )
);

$wp_customize->add_setting('disable_back_to_top_button');
$wp_customize->add_control('disable_back_to_top_button',
array(
  'label'    => __( 'Disable Back to Top Button', 'insightcustom' ),
  'description' => 'Check to remove the back to top button that fades in the bottom right corner of the site',
  'section'  => 'theme_options',
  'settings' => 'disable_back_to_top_button',
  'type'     => 'checkbox'
  )
);

?>
