<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <!-- favicons Icons -->
    <?php $fav_logo = get_field('favicon_&_logo_settings','option'); ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url($fav_logo['favicon_180_by_180']); ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url($fav_logo['favicon_32x32']); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url($fav_logo['favicon_16x16']); ?>" />
    <link rel="manifest" href="<?php echo get_template_directory_uri(  ).'/assets/images/favicons/site.webmanifest' ?>" />

</head>

<body <?php body_class(); ?>>
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo esc_url($fav_logo['preloader_image']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper">
                    <div class="main-menu-wrapper__logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $fav_logo['website_logo']; ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                    </div>
                    <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                        <?php 
                        
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'main-menu__list'
                            ));
                        
                        ?>

                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <?php $header_setup =  get_field('header_icon','option'); ?>
                                <img src="<?php echo esc_url($header_setup['icon']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p><?php echo esc_attr($header_setup['icon_title']); ?></p>
                                <h5><a href="<?php echo esc_url($header_setup['icon_link']); ?>"><?php echo esc_attr($header_setup['icon_details']); ?></a></h5>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__search-box">
                            <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->