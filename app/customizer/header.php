<?php

$wp_customize->add_section('theme_header', array(
'title' => 'Header',
'description' => 'Choose some header styles for your site',
'priority' => 20,
));
$wp_customize->add_setting('disable_search');
$wp_customize->add_control('disable_search',
array(
  'label'    => __( 'Disable Search Toggle', 'insightcustom' ),
  'description' => 'Check to remove the search toggle from the main navigation',
  'section'  => 'theme_header',
  'settings' => 'disable_search',
  'type'     => 'checkbox'
  )
);
$wp_customize->add_setting('menu_position');
$wp_customize->add_control('menu_position',
array(
    'label'    => __( 'Menu Position', 'insightcustom' ),
    'description' => 'Check to remove the search toggle from the main navigation',
    'section'  => 'theme_header',
    'settings' => 'menu_position',
    'type'     => 'select',
    'choices' => array(
      'flex-justify-start' => 'Left',
      'flex-center' => 'Center',
      'flex-justify-end' => 'Right',
    )
  )
);
$wp_customize->add_setting( 'menu_icon',
  array(
    'default' => 'hamburger--collapse',
  ) );
$wp_customize->add_control( 'menu_icon',
  array(
    'label' => __( 'Mobile Menu Icon' ),
    'section' => 'theme_header',
    'description' => __('Choose a menu icon to use. All are made of pure css.'),
    'type' => 'select',
    'choices' => array(
      'hamburger--arrow' => 'Arrow',
      'hamburger--arrowalt' => 'Arrow Alt',
      'hamburger--collapse' => 'Collapsed',
      'hamburger--elastic' => 'Elastic',
      'hamburger--emphatic' => 'Emphatic',
      'hamburger--slider' => 'Slider',
      'hamburger--spin' => 'Spin',
      'hamburger--spring' => 'Spring',
      'hamburger--squeeze' => 'Squeeze',
      'hamburger--stand' => 'Stand',
      )
  ) );

?>
