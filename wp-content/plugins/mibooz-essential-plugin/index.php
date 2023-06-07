<?php
/*
 * Plugin Name:       Mibooz Essentials
 * Plugin URI:        https://www.rahatulahsan.com
 * Description:       Activate the CPT reuired for the theme
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rahatul Ahsan
 * Author URI:        https://www.rahatulahsan.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       mibooz-plugin
 * 
 */ 

function mibooz_custom_posts(){

    //Register Services Post type
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'mibooz'),
            'singular_name' => __('Service', 'mibooz'),
            'add_new_item' => __('Add New Service', 'mibooz'),
            'edit_item' => __('Edit Service', 'mibooz'),
            'new_item' => __('New Service', 'mibooz'),
            'new_items' => __('New Services', 'mibooz'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-editor-paste-word'
    ));
    //Register FAQ Post type
    register_post_type('faqs', array(
        'labels' => array(
            'name' => __('FAQS', 'mibooz'),
            'singular_name' => __('FAQ', 'mibooz'),
            'add_new_item' => __('Add New FAQ', 'mibooz'),
            'edit_item' => __('Edit FAQ', 'mibooz'),
            'new_item' => __('New FAQ', 'mibooz'),
            'new_items' => __('New FAQ', 'mibooz'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-quote'
    ));
    //Register Team Post type
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'mibooz'),
            'singular_name' => __('Team', 'mibooz'),
            'add_new_item' => __('Add New Team', 'mibooz'),
            'edit_item' => __('Edit Team', 'mibooz'),
            'new_item' => __('New Team', 'mibooz'),
            'new_items' => __('New Teams', 'mibooz'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-users'
    ));
        //Register Review Post type
        register_post_type('reviews', array(
            'labels' => array(
                'name' => __('Reviews', 'mibooz'),
                'singular_name' => __('Review', 'mibooz'),
                'add_new_item' => __('Add New Review', 'mibooz'),
                'edit_item' => __('Edit Review', 'mibooz'),
                'new_item' => __('New Review', 'mibooz'),
                'new_items' => __('New Reviews', 'mibooz'),
                
            ),
            'public' => true,
            'show_ui' => true,
            'supports' => array('title', 'editor','thumbnail', 'custom-fields'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-chat'
        ));
        // custom posts for Portfolio
        register_post_type('portfolio', array(
            'labels' => array(
                'name' => __('Portfolios', 'efrekia'),
                'singular_name' => __('Portfolio', 'efrekia'),
                'add_new_item' => __('Add New Portfolio', 'efrekia'),
                'edit_item' => __('Edit Portfolio', 'efrekia'),
                'new_item' => __('New Portfolio', 'efrekia'),
                'new_items' => __('New Portfolios', 'efrekia'),
                
            ),
            'public' => true,
            'show_ui' => true,
            'supports' => array('title', 'editor','thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-format-gallery',
        ));
        
        // Register Taxonomy for Portfolio Post Type
        register_taxonomy( 'portfolio-cat', 'portfolio', array(
            'labels' => array(
                'name' => __('Categories', 'efrekia'),
                'singular_name' => __('Category', 'efrekia')
            ),
            'rewrite' => array(
                'slug' => 'portfolio',
                'with_front' => false,
                'hierarchical' => true
            ),
            'hierarchical' => true,
            'show_admin_column' => true

        ) );

        //Register Slider Post type
        register_post_type('sliders', array(
            'labels' => array(
                'name' => __('Sliders', 'mibooz'),
                'singular_name' => __('Slider', 'mibooz'),
                'add_new_item' => __('Add New Slider', 'mibooz'),
                'edit_item' => __('Edit Slider', 'mibooz'),
                'new_item' => __('New Slider', 'mibooz'),
                'new_items' => __('New Sliders', 'mibooz'),
                
            ),
            'public' => true,
            'show_ui' => true,
            'supports' => array('title', 'editor','thumbnail', 'custom-fields'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-images-alt2'
        ));

}

add_action('init', 'mibooz_custom_posts');

?>