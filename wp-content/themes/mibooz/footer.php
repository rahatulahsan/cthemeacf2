
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <?php $top_footer = get_field('top_footer_settings','option'); ?>
                <div class="site-footer__top-shape"
                    style="background-image: url(<?php echo get_template_directory_uri(  ).'/assets/images/shapes/site-footer-top-shape.png'?>)"></div>
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer__top-left">
                            <h3 class="site-footer__top-left-title"><?php echo esc_attr($top_footer['title']); ?></h3>
                            <a href="tel:<?php echo esc_attr($top_footer['phone_no']); ?>" class="site-footer__top-left-phone"><?php echo esc_attr($top_footer['phone_no']); ?></a>
                        </div>
                        <div class="site-footer__top-right">
                            <div class="site-footer__top-right-social">
                            <?php 
                            
                            $foo_social = $top_footer['social_icon'];

                            foreach($foo_social as $social){ ?>
                                <a href="<?php echo esc_url($social['icon_link']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a>
                            <?php }
                            
                            ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__middle">
                <div class="container">
                    <div class="site-footer__middle-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                <?php 
                                
                                    if(is_active_sidebar('footerwidget-1')){
                                        dynamic_sidebar('footerwidget-1' );
                                    }
                                
                                ?>
                            </div>
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">Links</h3>
                                    <?php 
                                
                                        if(is_active_sidebar('footerwidget-2')){
                                            dynamic_sidebar('footerwidget-2' );
                                        }
                                    
                                    ?>
                                    <?php 
                                        
                                        if(is_active_sidebar('footerwidget-3')){
                                            dynamic_sidebar('footerwidget-3' );
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                    <form class="footer-widget__newsletter-form">
                                    <?php  echo do_shortcode('[mc4wp_form id=386]'); ?>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text"><?php echo get_field('footer_copyright','option'); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <?php 
            
            $mobile_nav = get_field('mobile_navigation_settings','option');
            
            ?>
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo esc_url(get_home_url()); ?>" aria-label="logo image"><img src="<?php echo esc_attr($mobile_nav['nav_logo']); ?>" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo esc_attr($mobile_nav['email']); ?>"><?php echo esc_attr($mobile_nav['email']); ?></a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:<?php echo esc_attr($mobile_nav['phone_no']); ?>"><?php echo esc_attr($mobile_nav['phone_no']); ?></a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
               
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-plus"></i></a>


    <?php wp_footer(); ?>
</body>

</html>