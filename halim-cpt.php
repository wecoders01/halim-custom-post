<?php

/*
Plugin Name: Halim Custom Post Types
Description: Common Custom Post Types for Halim Theme.
Plugin URI: https://itanvir.xyz/halim-cpt
Author: iTanvir
Author URI: https://itanvir.xyz
Text Domain: halim
 */

/**
 * Register Custom Post Type
 */
function halim_theme_custom_post() {

    // Register Custom Post for Slides
    register_post_type(
        'slide',
        array(
            'labels'    => array(
                'name'                  => __( 'Slides', 'halim' ),
                'singular_name'         => __( 'Slide', 'halim' ),
                'add_new'               => __( 'Add New Slide', 'halim' ),
                'add_new_item'          => __( 'Add New Slide', 'halim' ),
                'edit_item'             => __( 'Edit Slide', 'halim' ),
                'search_items'          => __( 'Search Slide', 'halim' ),
                'featured_image'        => __( 'Slide Image', 'halim' ),
                'set_featured_image'    => __( 'Set Slide Image', 'halim' ),
                'remove_featured_image' => __( 'Remove Slide Image', 'halim' ),
            ),
            'supports'  => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
            'public'    => false,
            'show_ui'   => true,
            'menu_icon' => 'dashicons-slides',
        )
    );

    // Register Custom Post for Services
    register_post_type(
        'service',
        array(
            'labels'    => array(
                'name'                  => __( 'Services', 'halim' ),
                'singular_name'         => __( 'Service', 'halim' ),
                'add_new'               => __( 'Add New Service', 'halim' ),
                'add_new_item'          => __( 'Add New Service', 'halim' ),
                'edit_item'             => __( 'Edit Service', 'halim' ),
                'search_items'          => __( 'Search Service', 'halim' ),
                'featured_image'        => __( 'Service Image', 'halim' ),
                'set_featured_image'    => __( 'Set Service Image', 'halim' ),
                'remove_featured_image' => __( 'Remove Service Image', 'halim' ),
            ),
            'supports'  => array( 'title', 'editor', 'custom-fields', 'page-attributes' ),
            'public'    => false,
            'show_ui'   => true,
            'menu_icon' => 'dashicons-admin-generic',
        )
    );

    // Register Custom Post for Team
    register_post_type(
        'team',
        array(
            'labels'    => array(
                'name'                  => __( 'Teams', 'halim' ),
                'singular_name'         => __( 'Team', 'halim' ),
                'add_new'               => __( 'Add New Team', 'halim' ),
                'add_new_item'          => __( 'Add New Team', 'halim' ),
                'edit_item'             => __( 'Edit Team', 'halim' ),
                'search_items'          => __( 'Search Team', 'halim' ),
                'featured_image'        => __( 'Team Image', 'halim' ),
                'set_featured_image'    => __( 'Set Team Image', 'halim' ),
                'remove_featured_image' => __( 'Remove Team Image', 'halim' ),
            ),
            'supports'  => array( 'title', 'custom-fields', 'thumbnail', 'page-attributes' ),
            'public'    => false,
            'show_ui'   => true,
            'menu_icon' => 'dashicons-groups',
        )
    );

    // Register Custom Post for Testimonial
    register_post_type(
        'testimonial',
        array(
            'labels'    => array(
                'name'          => __( 'Testimonials', 'halim' ),
                'singular_name' => __( 'Testimonial', 'halim' ),
                'add_new'       => __( 'Add New Testimonial', 'halim' ),
                'add_new_item'  => __( 'Add New Testimonial', 'halim' ),
            ),
            'supports'  => array( 'title', 'custom-fields', 'thumbnail', 'page-attributes' ),
            'public'    => false,
            'show_ui'   => true,
            'menu_icon' => 'dashicons-testimonial',
        )
    );

    // Register Custom Post for Gallery
    register_post_type(
        'gallery',
        array(
            'labels'    => array(
                'name'          => __( 'Gallerys', 'halim' ),
                'singular_name' => __( 'Gallery', 'halim' ),
                'add_new'       => __( 'Add New Gallery', 'halim' ),
                'add_new_item'  => __( 'Add New Gallery', 'halim' ),
            ),
            'supports'  => array( 'title', 'custom-fields', 'page-attributes' ),
            'public'    => false,
            'show_ui'   => true,
            'menu_icon' => 'dashicons-format-gallery',
        )
    );

    // Register Custom Post for Gallery
    register_post_type(
        'portfolio',
        array(
            'labels'    => array(
                'name'          => __( 'Portfolios', 'halim' ),
                'singular_name' => __( 'Portfolio', 'halim' ),
                'add_new'       => __( 'Add New Portfolio', 'halim' ),
                'add_new_item'  => __( 'Add New Portfolio', 'halim' ),
            ),
            'supports'  => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'public'    => true,
            'menu_icon' => 'dashicons-portfolio',
        )
    );
    // Portfolio Taxonomy
    register_taxonomy(
        'portfolio-cat',
        'portfolio',
        array(
            'labels'            => array(
                'name'          => __( 'Categories' ),
                'singular_name' => __( 'Category', 'halim' ),
                'add_new'       => __( 'Add New Category', 'halim' ),
                'add_new_item'  => __( 'Add New Category', 'halim' ),
            ),
            'hierarchical'      => true,
            'show_admin_column' => true,
            'menu_icon'         => 'dashicons-testimonial',
        )
    );
}
add_action( 'init', 'halim_theme_custom_post' );