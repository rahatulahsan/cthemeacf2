<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri().'/assets/images/favicons/apple-touch-icon.png' ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/images/favicons/favicon-32x32.png' ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(  ).'/assets/images/favicons/favicon-16x16.png' ?>" />
    <link rel="manifest" href="<?php echo get_template_directory_uri(  ).'/assets/images/favicons/site.webmanifest' ?>" />

</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo get_template_directory_uri().'/assets/images/loader.png' ?>" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper">
                    <div class="main-menu-wrapper__logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(  ).'/assets/images/resources/logo-1.png' ?>" alt=""></a>
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
                                <img src="<?php echo get_template_directory_uri(  ).'/assets/images/icon/phone-icon.png' ?>" alt="">
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>Call Anytime</p>
                                <h5><a href="tel:926668880000">+ 92 666 888 0000</a></h5>
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