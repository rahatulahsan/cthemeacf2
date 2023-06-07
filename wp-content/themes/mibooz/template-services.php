<?php 
/**
 * Template Name: Service Template
 */

get_header();
?>
<?php require_once('inc/breadcumb.php'); ?>

    <?php 
    
        $section_permission = get_field('service_page_section_visibility','option');
    
    ?>


    <?php 
        if($section_permission['section_1'] == 1 ){
            include get_theme_file_path( '/templates/service-three.php' );
        }else{}
    ?>


    <?php 
        if($section_permission['section_2'] == 1 ){
            include get_theme_file_path( '/templates/service-two-box.php' ); 
        }else{}
    ?>

    <?php 
        if($section_permission['section_3'] == 1 ){
            include get_theme_file_path( '/templates/service-one.php' );
        }else{}
    ?>

    <?php 
        if($section_permission['section_4'] == 1 ){
            include get_theme_file_path( '/templates/design-studio-video.php' );
        }else{}
    ?>

    <?php 
        if($section_permission['section_5'] == 1 ){
            include get_theme_file_path( '/templates/service-two.php' );
        }else{}
    ?>

    <?php 
        if($section_permission['section_6'] == 1 ){
            include get_theme_file_path( '/templates/carousel-slider.php' );
        }else{}
    ?>

 <?php get_footer(); ?>