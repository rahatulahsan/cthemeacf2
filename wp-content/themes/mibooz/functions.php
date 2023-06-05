<?php 

function mibooz_assets(){
    // enqueue style
    wp_enqueue_style( 'mibooz-css', get_template_directory_uri() . '/assets/css/mibooz.css', array(), '1.0.0');
    wp_enqueue_style( 'mibooz-responsive-css', get_template_directory_uri() . '/assets/css/mibooz-responsive.css', array(), '1.0.0');

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), '1.0.0');
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/vendors/animate/animate.min.css', array(), '1.0.0');
    wp_enqueue_style( 'custom-animate-css', get_template_directory_uri() . '/assets/vendors/animate/custom-animate.css', array(), '1.0.0');
    wp_enqueue_style( 'all-min-css', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css', array(), '1.0.0');
    wp_enqueue_style( 'jarallax-css', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.css', array(), '1.0.0');
    wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css', array(), '1.0.0');
    wp_enqueue_style( 'nouislider-css', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.css', array(), '1.0.0');
    wp_enqueue_style( 'nouislider-pipes-css', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.pips.css', array(), '1.0.0');
    wp_enqueue_style( 'odometer-css', get_template_directory_uri() . '/assets/vendors/odometer/odometer.min.css', array(), '1.0.0');
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/vendors/swiper/swiper.min.css', array(), '1.0.0');
    wp_enqueue_style( 'mibooz-icons-css', get_template_directory_uri() . '/assets/vendors/mibooz-icons/style.css', array(), '1.0.0');
    wp_enqueue_style( 'tinyslider-css', get_template_directory_uri() . '/assets/vendors/tiny-slider/tiny-slider.min.css', array(), '1.0.0');
    wp_enqueue_style( 'sayinistic-font-css', get_template_directory_uri() . '/assets/vendors/the-sayinistic-font/stylesheet.css', array(), '1.0.0');
    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.css', array(), '1.0.0');
    wp_enqueue_style( 'owl-theme-css', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.theme.default.min.css', array(), '1.0.0');
    wp_enqueue_style( 'jquery-bxslider-css', get_template_directory_uri() . '/assets/vendors/bxslider/jquery.bxslider.css', array(), '1.0.0');
    wp_enqueue_style( 'bootstrap-select-css', get_template_directory_uri() . '/assets/vendors/bootstrap-select/css/bootstrap-select.min.css', array(), '1.0.0');
    wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.css', array(), '1.0.0');


    wp_enqueue_style( 'font-awesome-latest', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '1.0.0');
    wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '1.0.0');
    wp_enqueue_style( 'font-awesome-brands', get_template_directory_uri() . '/assets/css/brands.css', array(), '1.0.0');
    wp_enqueue_style( 'font-awesome-brands-min', get_template_directory_uri() . '/assets/css/brands.min.css', array(), '1.0.0');
    

  
    wp_enqueue_style( 'google-font-api', 'https://fonts.googleapis.com/css2?family=Federo&display=swap');
    wp_enqueue_style( 'google-font-api-new', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



    // enqueue sscripts
    wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.6.0.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jarallax-min', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-ajax-chimp', get_template_directory_uri() . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-appear-min', get_template_directory_uri() . '/assets/vendors/jquery-appear/jquery.appear.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-circle', get_template_directory_uri() . '/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-magnific', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/assets/vendors/jquery-validate/jquery.validate.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'odometer-js', get_template_directory_uri() . '/assets/vendors/odometer/odometer.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/vendors/swiper/swiper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'tiny-slider', get_template_directory_uri() . '/assets/vendors/tiny-slider/tiny-slider.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'vnumb-js', get_template_directory_uri() . '/assets/vendors/wnumb/wNumb.min.jss', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ow-js', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotop-js', get_template_directory_uri() . '/assets/vendors/isotope/isotope.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/assets/vendors/bxslider/jquery.bxslider.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/assets/vendors/bootstrap-select/js/bootstrap-select.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-tilt', get_template_directory_uri() . '/assets/vendors/jquery-tilt/tilt.jquery.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-mibooz', get_template_directory_uri() . '/assets/js/mibooz.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/880bf9a8cc.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() . '/assets/js/fontawesome.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fontawesome-min-js', get_template_directory_uri() . '/assets/js/fontawesome.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fontawesome-brands-js', get_template_directory_uri() . '/assets/js/brands.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fontawesome-brands-min-js', get_template_directory_uri() . '/assets/js/brands.min.js', array('jquery'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'mibooz_assets');


function mibooz_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails', array('post','services','teams','reviews', 'portfolio') );
    load_theme_textdomain( 'mibooz', get_template_directory_uri(). '/assets/languages' );
    
    //setup image size
    add_image_size( 'post-page-image', 370, 336, true );
    add_image_size( 'box-bg-image', 570, 302, true );
    add_image_size( 'brand-image', 570, 90, true );
    add_image_size( 'team-image', 288, 326, true );
    add_image_size( 'project-thumb', 370, 410, true );

}

add_action('after_setup_theme','mibooz_setup_theme');


// Register Nav menu
function add_nav_menus() {
    register_nav_menus( array(
        'primary-menu'=>'Primary Menu'
    ));
}
add_action('init', 'add_nav_menus');

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

}

add_action('init', 'mibooz_custom_posts');


// Options for Theme Settings

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Service Page Settings',
        'menu_title'    => 'Service',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'FAQ Settings',
        'menu_title'    => 'FAQ',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'CTA Settings',
        'menu_title'    => 'CTA',
        'parent_slug'   => 'theme-general-settings',
    ));

}






?>