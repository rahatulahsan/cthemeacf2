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

    wp_enqueue_style( 'google-font-1', 'https://fonts.googleapis.com');
    wp_enqueue_style( 'gstatic-font', 'https://fonts.gstatic.com');
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


}

add_action('wp_enqueue_scripts', 'mibooz_assets');


function mibooz_setup_theme(){
    add_theme_support('title-tag');
    load_theme_textdomain( 'mibooz', get_template_directory_uri(). '/assets/languages' );

}

add_action('after_setup_theme','mibooz_setup_theme');


// Register Nav menu
function add_nav_menus() {
    register_nav_menus( array(
        'primary-menu'=>'Primary Menu'
    ));
}
add_action('init', 'add_nav_menus');

?>