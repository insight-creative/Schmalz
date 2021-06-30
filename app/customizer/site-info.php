<?php

$wp_customize->add_setting('primary_logo');
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'primary_logo',
array(
'label' => 'Primary Logo',
'section' => 'title_tagline',
'settings' => 'primary_logo',
) ) );
$wp_customize->add_setting('address');
$wp_customize->add_control('address',
array(
  'label'    => __( 'Business Address', 'insightcustom' ),
  'section'  => 'title_tagline',
  'settings' => 'address',
  'type'     => 'textarea',
  )
);
$wp_customize->add_setting('phone');
$wp_customize->add_control('phone',
array(
  'label'    => __( 'Phone', 'insightcustom' ),
  'section'  => 'title_tagline',
  'settings' => 'phone',
  'type'     => 'text',
  )
);
$wp_customize->add_setting('email');
$wp_customize->add_control('email',
array(
  'label'    => __( 'Email', 'insightcustom' ),
  'section'  => 'title_tagline',
  'settings' => 'email',
  'type'     => 'text',
  )
);
$wp_customize->add_setting('hours');
$wp_customize->add_control('hours',
array(
  'label'    => __( 'Business Hours', 'insightcustom' ),
  'section'  => 'title_tagline',
  'settings' => 'hours',
  'type'     => 'textarea',
  )
);

?>
