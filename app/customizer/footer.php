<?php

$wp_customize->add_section('theme_footer', array(
'title' => 'Footer',
'description' => '',
'priority' => 21,
));
$wp_customize->add_setting('footer_logo');
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo',
array(
'label' => 'Footer Logo',
'section' => 'theme_footer',
'settings' => 'footer_logo',
) ) );

?>
