<?php

$wp_customize->add_setting('header_color', array(
  'default'     => '#ffffff',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
'label'        => 'Header Color',
'section'    => 'colors',
'settings'   => 'header_color',
'priority'   => 1,
) ) );
$wp_customize->add_setting('primary_color', array(
  'default'     => '#d31145',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
'label'        => 'Primary Color',
'section'    => 'colors',
'settings'   => 'primary_color',
) ) );
$wp_customize->add_setting('accent_color', array(
  'default'     => '#a3a60f',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
'label'        => 'Accent Color',
'section'    => 'colors',
'settings'   => 'accent_color',
) ) );
$wp_customize->add_setting('text_color', array(
  'default'     => '#4D4D4D',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
'label'        => 'Text Color',
'section'    => 'colors',
'settings'   => 'text_color',
) ) );
$wp_customize->add_setting('link_color', array(
  'default'     => '#a3a60f',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
'label'        => 'Link Color',
'section'    => 'colors',
'settings'   => 'link_color',
) ) );
$wp_customize->add_setting('primary_button_color', array(
  'default'     => '#a3a60f',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_color', array(
'label'        => 'Primary Button Color',
'section'    => 'colors',
'settings'   => 'primary_button_color',
) ) );
$wp_customize->add_setting('primary_button_hover_color', array(
  'default'     => '#d31145',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_hover_color', array(
'label'        => 'Primary Button Hover Color',
'section'    => 'colors',
'settings'   => 'primary_button_hover_color',
) ) );
$wp_customize->add_setting('secondary_button_color', array(
  'default'     => '#d31145',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_color', array(
'label'        => 'Secondary Button Color',
'section'    => 'colors',
'settings'   => 'secondary_button_color',
) ) );
$wp_customize->add_setting('secondary_button_hover_color', array(
  'default'     => '#a3a60f',
  'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_hover_color', array(
'label'        => 'Secondary Button Hover Color',
'section'    => 'colors',
'settings'   => 'secondary_button_hover_color',
) ) );

?>
