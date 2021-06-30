<?php

$wp_customize->add_section('blog_options', array(
'title' => 'Blog Options',
'description' => 'Customization options for how your blog posts display',
'priority' => 100,
));
$wp_customize->add_setting('disable_reading_position_indicator');
$wp_customize->add_control('disable_reading_position_indicator',
array(
  'label'    => __( 'Disable Reading Position Indicator', 'insightcustom' ),
  'description' => 'Check to remove the reading position indicator on single blog posts',
  'section'  => 'blog_options',
  'settings' => 'disable_reading_position_indicator',
  'type'     => 'checkbox'
  )
);
$wp_customize->add_setting('hide_dates');
$wp_customize->add_control('hide_dates',
array(
  'label'    => __( 'Hide Dates', 'insightcustom' ),
  'section'  => 'blog_options',
  'settings' => 'hide_dates',
  'type'     => 'checkbox',
  )
);
$wp_customize->add_setting('hide_author');
$wp_customize->add_control('hide_author',
array(
  'label'    => __( 'Hide Author', 'insightcustom' ),
  'section'  => 'blog_options',
  'settings' => 'hide_author',
  'type'     => 'checkbox',
  )
);
$wp_customize->add_setting('hide_category');
$wp_customize->add_control('hide_category',
array(
  'label'    => __( 'Hide Categories', 'insightcustom' ),
  'section'  => 'blog_options',
  'settings' => 'hide_category',
  'type'     => 'checkbox',
  )
);
$wp_customize->add_setting('hide_featured_images');
$wp_customize->add_control('hide_featured_images',
array(
  'label'    => __( 'Hide Featured Images', 'insightcustom' ),
  'section'  => 'blog_options',
  'settings' => 'hide_featured_images',
  'type'     => 'checkbox',
  )
);
$wp_customize->add_setting('hide_related_posts');
$wp_customize->add_control('hide_related_posts',
array(
  'label'    => __( 'Hide Related Posts', 'insightcustom' ),
  'section'  => 'blog_options',
  'settings' => 'hide_related_posts',
  'type'     => 'checkbox',
  )
);

?>
