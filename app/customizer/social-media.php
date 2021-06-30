<?php

$wp_customize->add_section('social_media', array(
'title' => 'Social Media',
'description' => 'Link to and manage your social media accounts here',
'priority' => 100,
));
$wp_customize->add_setting('facebook');
$wp_customize->add_control('facebook',
array(
  'label'    => __( 'Facebook URL', 'insightcustom' ),
  'section'  => 'social_media',
  'settings' => 'facebook',
  'type'     => 'text',
  )
);
$wp_customize->add_setting('instagram');
$wp_customize->add_control('instagram',
array(
  'label'    => __( 'Instagram URL', 'insightcustom' ),
  'section'  => 'social_media',
  'settings' => 'instagram',
  'type'     => 'text',
  )
);
$wp_customize->add_setting('twitter');
$wp_customize->add_control('twitter',
array(
  'label'    => __( 'Twitter URL', 'insightcustom' ),
  'section'  => 'social_media',
  'settings' => 'twitter',
  'type'     => 'text',
  )
);
$wp_customize->add_setting('linkedin');
$wp_customize->add_control('linkedin',
array(
  'label'    => __( 'LinkedIn URL', 'insightcustom' ),
  'section'  => 'social_media',
  'settings' => 'linkedin',
  'type'     => 'text',
  )
);
$wp_customize->add_setting('youtube');
$wp_customize->add_control('youtube',
array(
  'label'    => __( 'YouTube URL', 'insightcustom' ),
  'section'  => 'social_media',
  'settings' => 'youtube',
  'type'     => 'text',
  )
);

?>
