<?php
/**
 * Theme Functions and Custom Post Types
 *
 * @package drkc-theme
 */

function drkc_theme_setup() {
    // Enable support for Post Thumbnails / Featured Images
    add_theme_support( 'post-thumbnails' );
    // Enable Title Tag support for dynamic titles
    add_theme_support( 'title-tag' );
    
    // Register Menu Locations
    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Primary Menu', 'drkc-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'drkc_theme_setup' );

// Enqueue styles & font awesome
function drkc_theme_scripts() {
    wp_enqueue_style( 'drkc-style', get_stylesheet_uri() );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'drkc_theme_scripts' );

// Register Custom Post Type for Courses
function drkc_register_courses_cpt() {
    $labels = array(
        'name'               => _x( 'Courses', 'post type general name', 'drkc-theme' ),
        'singular_name'      => _x( 'Course', 'post type singular name', 'drkc-theme' ),
        'menu_name'          => _x( 'Courses', 'admin menu', 'drkc-theme' ),
        'name_admin_bar'     => _x( 'Course', 'add new on admin bar', 'drkc-theme' ),
        'add_new'            => _x( 'Add New', 'course', 'drkc-theme' ),
        'add_new_item'       => __( 'Add New Course', 'drkc-theme' ),
        'new_item'           => __( 'New Course', 'drkc-theme' ),
        'edit_item'          => __( 'Edit Course', 'drkc-theme' ),
        'view_item'          => __( 'View Course', 'drkc-theme' ),
        'all_items'          => __( 'All Courses', 'drkc-theme' ),
        'search_items'       => __( 'Search Courses', 'drkc-theme' ),
        'parent_item_colon'  => __( 'Parent Courses:', 'drkc-theme' ),
        'not_found'          => __( 'No courses found.', 'drkc-theme' ),
        'not_found_in_trash' => __( 'No courses found in Trash.', 'drkc-theme' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'courses' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
    );

    register_post_type( 'courses', $args );
}
add_action( 'init', 'drkc_register_courses_cpt' );

// Register Custom Post Type for Videos
function drkc_register_videos_cpt() {
    $labels = array(
        'name'               => _x( 'Videos', 'post type general name', 'drkc-theme' ),
        'singular_name'      => _x( 'Video', 'post type singular name', 'drkc-theme' ),
        'menu_name'          => _x( 'Videos', 'admin menu', 'drkc-theme' ),
        'add_new'            => _x( 'Add New', 'video', 'drkc-theme' ),
        'add_new_item'       => __( 'Add New Video', 'drkc-theme' ),
        'edit_item'          => __( 'Edit Video', 'drkc-theme' ),
        'all_items'          => __( 'All Videos', 'drkc-theme' ),
        'view_item'          => __( 'View Video', 'drkc-theme' ),
        'search_items'       => __( 'Search Videos', 'drkc-theme' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'videos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-video-alt3',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
    );

    register_post_type( 'videos', $args );
}
add_action( 'init', 'drkc_register_videos_cpt' );
