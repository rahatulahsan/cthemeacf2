<?php 
/**
 * Template Name: Service Template
 */

get_header();
?>
<?php require_once('inc/breadcumb.php'); ?>

        <!--Services Three Start-->
        <section class="services-three">
            <div class="services-three-shape"
                style="background-image: url(<?php esc_url(the_field('service_page_background_shape_1','option')); ?>)"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">
                    <?php 
                    if(get_field('service_page_subtitle','option')){
                        esc_attr(the_field('service_page_subtitle','option'));
                    }else{ echo esc_attr(acf_get_field('service_page_subtitle')['default_value']);}
                    ?>
                    </span>
                    <h2 class="section-title__title">
                    <?php 
                    if(get_field('service_page_main_title','option')){
                        esc_attr(the_field('service_page_main_title','option'));
                    }else{ echo esc_attr(acf_get_field('service_page_main_title')['default_value']);}
                    ?>
                    </h2>
                </div>
                <div class="services-three__top">
                    <div class="row">

                    <?php 
                    
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => 3
                     );
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post(); ?>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <!--Services Three Single-->
                            <div class="services-three__single">
                                <div class="services-three_icon">
                                    <span class="<?php the_field('service_icon'); ?>"></span>
                                </div>
                                <h3 class="services-three__title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a></h3>
                                <p class="services-three__text"><?php echo wp_trim_words( get_the_content(), 10 ); ?></p>
                                <div class="services-three__btn-box">
                                    <a href="<?php esc_url(the_permalink()); ?>" class="services-three__btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php }

                    wp_reset_postdata(  );
                    
                    ?>
                        

                    </div>
                </div>
                <div class="services-three__bottom">
                    <p class="services-three__bottom-text">
                        <?php $value = get_field('additional_subtitle_and_title','option'); ?>
                        <?php echo esc_attr($value['additional_subtitle']);?><a href="<?php echo esc_url($value['additional_title_link']);?>">
                        <?php echo esc_attr($value['additional_title']);?></a></p>
                </div>
            </div>
        </section>
        <!--Services Three End-->

        <!--Two Boxes Start-->
        <section class="two-boxes">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <!--Two Boxes Single-->
                        <div class="two-boxes__single">
                            <?php $box = get_field('service_page_box','option'); ?>
                            <div class="two-boxes__bg"
                                style="background-image: url(<?php echo $box['box_1_image']; ?>)"></div>
                            <p class="two-boxes__tagline"><?php echo $box['box_1_subtitle']; ?></p>
                            <h4 class="two-boxes__title"><?php echo $box['box_1_title']; ?></h4>
                            <div class="two-boxes__arrow">
                                <a href="<?php echo $box['box_1_link']; ?>"><span class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <!--Two Boxes Single-->
                        <div class="two-boxes__single">
                            <div class="two-boxes__bg"
                                style="background-image: url(<?php echo $box['box_2_image']; ?>)"></div>
                            <p class="two-boxes__tagline"><?php echo $box['box_2_subtitle']; ?></p>
                            <h4 class="two-boxes__title"><?php echo $box['box__2_title']; ?></h4>
                            <div class="two-boxes__arrow">
                                <a href="<?php echo $box['box_2_link']; ?>"><span class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Two Boxes End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one-shape" style="background-image: url(<?php echo the_field('service_page_background_shapes','option'); ?>)">
            </div>
            <div class="container">
                <div class="services-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline"><?php the_field('service_page_subtitle','option'); ?></span>
                                    <h2 class="section-title__title"><?php the_field('service_page_main_title','option'); ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text"><?php the_field('service_page_content','option'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-one__bottom">
                    <div class="row">

                        <?php
                            $args = array(
                                'post_type' => 'services',
                                'posts_per_page' => 6
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()){
                                $query->the_post(); ?>
                                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                    <!--Services One Single-->
                                    <div class="services-one__single">
                                        <h3 class="services-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="services-one__icon">
                                            <span class="<?php the_field('service_icon'); ?>"></span>
                                        </div>
                                        <div class="services-one__count"></div>
                                    </div>
                                </div> 
                            <?php }

                            wp_reset_postdata(  );
                        ?>  
      
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Design Studio Start-->
        <section class="design-studio services-page-design-studio">
            <div class="design-studio-bg-box">
                <?php $video = get_field('service_page_video','option'); ?>
                <div class="design-studio-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo $video['video_background_image']; ?>)">

                </div>
            </div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="design-studio__inner">
                        
                        <h2 class="design-studio__title"><?php echo $video['video_title']; ?></h2>
                        <div class="design-studio__video-link">
                            <a href="<?php echo $video['video_url']; ?>" class="video-popup">
                                <div class="design-studio__video-icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Design Studio End-->

        <!--Services Two Start-->
        <section class="services-two services-page-services-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">
                    <?php 
                    if(get_field('service_page_subtitle','option')){
                        esc_attr(the_field('service_page_subtitle','option'));
                    }else{ echo esc_attr(acf_get_field('service_page_subtitle')['default_value']);}
                    ?>
                    </span>
                    <h2 class="section-title__title">
                    <?php 
                    if(get_field('service_page_main_title','option')){
                        esc_attr(the_field('service_page_main_title','option'));
                    }else{ echo esc_attr(acf_get_field('service_page_main_title')['default_value']);}
                    ?>
                    </h2>
                </div>
                <ul class="list-unstyled clearfix services-two__list">
                    <?php 
                    
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => 4
                     );
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post(); ?>
                        <!--Services Two Single-->
                        <li class="services-two__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-two__icon">
                                <span class="<?php the_field('service_icon'); ?>"></span>
                            </div>
                            <h3 class="services-two__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="services-two__text"><?php echo wp_trim_words( get_the_content(), 10 ); ?></p>
                        </li>
                    <?php }
                    wp_reset_postdata(  );
                    ?>
                    
                </ul>
            </div>
        </section>
        <!--Services Two End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <?php $images = get_field('service_page_carousel','option'); 

                            foreach($images as $image){?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image['url']; ?>" alt="">
                                </div><!-- /.swiper-slide -->
                            <?php }
                        
                        ?>
                        

                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

 <?php get_footer(); ?>