<?php

$wp_customize->add_section('insert_scripts', array(
'title' => 'Insert Scripts',
'description' => 'Easily add code like Google Analytics, Facebook Pixel, and more to your site header and footer. No need to edit your theme files!',
'priority' => 120,
));
$wp_customize->add_setting('header_scripts');
$wp_customize->add_control('header_scripts',
array(
  'label'    => __( 'Header Scripts', 'insightcustom' ),
  'description' => 'Add tracking codes or other scripts that need to be output in the head section of your website',
  'section'  => 'insert_scripts',
  'settings' => 'header_scripts',
  'type'     => 'textarea',
  )
);
$wp_customize->add_setting('footer_scripts');
$wp_customize->add_control('footer_scripts',
array(
  'label'    => __( 'Footer Scripts', 'insightcustom' ),
  'description' => 'Add tracking codes or other scripts that need to be output in the footer section of your website, just above the closing body tag',
  'section'  => 'insert_scripts',
  'settings' => 'header_scripts',
  'type'     => 'textarea',
  )
);

?>
