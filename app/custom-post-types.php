<?php

function staff_post_type() {
    $supports = array(
      'title', // post title
      'editor', // post content
      'thumbnail', // featured images
      'post-formats', // post formats
    );
    $labels = array(
      'name' => _x('Staff', 'plural'),
      'singular_name' => _x('Staff', 'singular'),
      'menu_name' => _x('Staff', 'admin menu'),
      'name_admin_bar' => _x('Staff', 'admin bar'),
      'add_new' => _x('Add New Staff', 'add new'),
      'add_new_item' => __('Add New Staff'),
      'new_item' => __('New Staff'),
      'edit_item' => __('Edit Staff'),
      'view_item' => __('View Staff'),
      'all_items' => __('All Staff'),
      'search_items' => __('Search Staff'),
      'not_found' => __('No Staff found.'),
    );
    $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'about'),
      'has_archive' => true,
      'hierarchical' => false,
      'menu_icon' => 'dashicons-businessman',
    );
      register_post_type('staff', $args);
    }
      add_action('init', 'staff_post_type');

function careers_post_type() {
    $supports = array(
      'title', // post title
      'editor', // post content
      'thumbnail', // featured images
      'post-formats', // post formats
    );
    $labels = array(
      'name' => _x('Careers', 'plural'),
      'singular_name' => _x('Careers', 'singular'),
      'menu_name' => _x('Careers', 'admin menu'),
      'name_admin_bar' => _x('Careers', 'admin bar'),
      'add_new' => _x('Add New Careers', 'add new'),
      'add_new_item' => __('Add New Careers'),
      'new_item' => __('New Careers'),
      'edit_item' => __('Edit Careers'),
      'view_item' => __('View Careers'),
      'all_items' => __('All Careers'),
      'search_items' => __('Search Careers'),
      'not_found' => __('No Careers found.'),
    );
    $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'careers'),
      'has_archive' => true,
      'hierarchical' => false,
      'menu_icon' => 'dashicons-businessman',
    );
      register_post_type('careers', $args);
    }
      add_action('init', 'careers_post_type');

  function custom_about_title() {
    if( is_post_type_archive('staff') ){
      $title = 'About Schmalz | ' . get_bloginfo('name');
      return $title;
    }
    return $title;
  }
  add_filter( 'pre_get_document_title', 'custom_about_title', 9999 );

?>