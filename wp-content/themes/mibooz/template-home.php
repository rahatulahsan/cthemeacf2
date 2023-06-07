<?php get_header(); 

/**
 * Template Name: Home Template
 */

?>

<!--Main Slider Start-->
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
"effect": "fade",
"pagination": {
"el": "#main-slider-pagination",
"type": "bullets",
"clickable": true
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
},
"autoplay": {
"delay": 5000
}}'>


        <div class="swiper-wrapper">

            <?php 
            
            $args = array(
                'posts_per_page' => 6,
                'post_type' => 'sliders'
            );
            $query = new WP_Query($args);
            while($query->have_posts()){
                $query->the_post(); ?>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(<?php echo esc_url(the_post_thumbnail_url()); ?>);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider__social">
                        <?php 
                        
                        $slider_social = get_field('social');
                        foreach($slider_social as $social){?>
                            <a href="<?php echo esc_url($social['social_media_link']); ?>"><?php echo esc_attr($social['social_media_name']); ?></a>
                        <?php }

                        ?>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                    <div class="main-slider__title-box-1">
                                        <?php 
                                        
                                        $sliders_title = get_field('slider_titles');

                                        ?>
                                        <h2><?php echo esc_attr($sliders_title['title_line_1']); ?> <br> <?php echo esc_attr($sliders_title['title_line_2']); ?><br> <?php echo esc_attr($sliders_title['title_line_3']); ?></h2>
                                        <div class="main-slider__title-box-2">
                                        <h2><?php echo esc_attr($sliders_title['title_line_1']); ?> <br> <?php echo esc_attr($sliders_title['title_line_2']); ?><br> <?php echo esc_attr($sliders_title['title_line_3']); ?></h2>
                                        </div>
                                    </div>
                                    <a href="<?php esc_url(the_field('slider_button_link')); ?>" class="thm-btn"><?php esc_attr(the_field('slider_button_name')); ?></a>
                                    <div class="main-slider-badge">
                                        <img data-tilt src="<?php echo esc_url(the_field('slider_badge')); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            
            wp_reset_postdata();

            ?>

        </div>
        <!-- If we need navigation buttons -->
        <div class="slider-bottom-box clearfix">
            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <span class="icon-arrow-left"></span>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <span class="icon-arrow-right"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Main Slider End-->

<!--Services One Start-->
<section class="services-one">
    <div class="services-one-shape" style="background-image: url(<?php echo esc_url(the_field('service_page_background_shapes','option')); ?>)">
    </div>
    <div class="container">
        <div class="services-one__top">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="services-one__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline"><?php esc_attr(the_field('service_page_subtitle','option')); ?></span>
                            <h2 class="section-title__title"><?php esc_attr(the_field('service_page_main_title','option')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="services-one__top-right">
                        <p class="services-one__top-text"><?php esc_attr(the_field('service_page_content','option')); ?></p>
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
                    $i = 100;
                    while($query->have_posts()){
                        $query->the_post(); ?>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                            <!--Services One Single-->
                            <div class="services-one__single">
                                <h3 class="services-one__title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a></h3>
                                <div class="services-one__icon">
                                    <span class="<?php esc_attr(the_field('service_icon')); ?>"></span>
                                </div>
                                <div class="services-one__count"></div>
                            </div>
                        </div> 
                    <?php $i = $i + 200;}

                    wp_reset_postdata(  );
                ?>  

            </div>
        </div>
    </div>
</section>
<!--Services One End-->


<!--Welcome One Start-->
<section class="welcome-one">
    <?php 
        
        $welcome = get_field('introduction_section'); 
    
        $left_side = $welcome['left_side_section'];

    
    ?>
    <div class="welcome-one-shape wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"><img
            src="<?php echo esc_url($left_side['background_shape']); ?>" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="welcome-one__left">
                    <div class="welcome-one__img-box">
                        <div class="welcome-one__img">
                            <img src="<?php echo esc_url($left_side['main_image']); ?>" alt="">
                        </div>
                        <div class="welcome-one__experience">
                            <div class="welcome-one__experience-icon">
                                <span class="<?php echo esc_attr($left_side['icon']); ?>"></span>
                            </div>
                            <div class="welcome-one__experience-content">
                                <h3 class="welcome-one__experience-title"><span><?php echo esc_attr($left_side['icon_title']); ?></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                    
                        <span class="section-title__tagline"><?php echo esc_attr($welcome['subtitle']); ?></span>
                        <h2 class="section-title__title"><?php echo esc_attr($welcome['title']); ?></h2>
                    </div>
                    <p class="welcome-one__right-text"><?php echo esc_attr($welcome['contents']); ?></p>
                    <div class="welcome-one__bottom">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="welcome-one__bottom-left">
                                    <h4 class="welcome-one__bottom-title"><?php echo esc_attr($welcome['featured_title']); ?></h4>
                                    <ul class="list-unstyled welcome-one__points">

                                        <?php 
                                        
                                        $bullets = $welcome['bullet_points'];
                                        foreach($bullets as $bullet){?>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick"></span>
                                                </div>
                                                <div class="text">
                                                    <p><?php echo esc_attr($bullet['points_list']); ?></p>
                                                </div>
                                            </li>
                                        <?php }
                                        
                                        ?>

                                    </ul>
                                    <div class="welcome-one__person">
                                        <div class="welcome-one__person-img">
                                            <img src="<?php echo esc_url($welcome['ceo_image']); ?>"
                                                alt="">
                                        </div>
                                        <div class="welcome-one__person-sign">
                                            <h3><?php echo esc_attr($welcome['ceo_signature']); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            
                            $right_box = $welcome['right_side_box'];
                            
                            ?>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="welcome-one__bottom-right">
                                    <div class="welcome-one__bottom-right-content">
                                        <div class="welcome-one__bottom-right-icon">
                                            <span class="<?php echo esc_attr($right_box['box_icon']); ?>"></span>
                                        </div>
                                        <h4 class="welcome-one__bottom-right-title"><?php echo esc_attr($right_box['box_title']); ?></h4>
                                        <a href="<?php echo esc_url($right_box['button_link']); ?>" class="thm-btn welcome-one__btn"><?php echo esc_attr($right_box['button_title']); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->

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
                <?php $images = get_field('icons_gallery'); 

                    foreach($images as $image){ ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="">
                        </div><!-- /.swiper-slide -->
                    <?php }
                
                ?>

            </div>
                
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Design Studio Start-->
<section class="design-studio">
    <div class="design-studio-bg-box">
        <?php 
        
            $video_details = get_field('video_sections');

        ?>
        <div class="design-studio-bg " 
            style="background-image: url(<?php echo esc_url($video_details['video_image']); ?>)">

        </div>
    </div>
    <div class="container">
        <div class="col-lg-12">
            <div class="design-studio__inner">
                <h2 class="design-studio__title"><?php echo esc_attr($video_details['video_title']); ?></h2>
                <div class="design-studio__video-link">
                    <a href="<?php echo esc_url($video_details['vide_link']); ?>" class="video-popup">
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

<!--Counter One Start-->
<section class="counter-one">
    <div class="counter-one__inner">
        <?php 
            $counter_sec = get_field('counter_section'); 
        ?>
        <div class="counter-one-pattern"
            style="background-image: url(<?php echo esc_url($counter_sec['counter_section_bg']); ?>)"></div>
        <div class="counter-one__box-one"></div>
        <div class="counter-one__box-two"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="list-unstyled counter-one__list">

                        <?php 
                        
                        $counter_cal = $counter_sec['counter_details'];
                        $i = 100;
                        foreach($counter_cal as $counter){?>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                                <div class="counter-one__icon">
                                    <span class="<?php echo esc_attr($counter['counter_icon']); ?>"></span>
                                </div>
                                <h3 class="odometer" data-count="<?php echo esc_attr($counter['counter_number']); ?>">00</h3>
                                <p class="counter-one__text"><?php echo esc_attr($counter['counter_text']); ?></p>
                            </li>
                        <?php $i = $i + 200;}
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter One End-->

<!--We Care Start-->
<section class="we-care">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="we-care__inner">
                    <div class="we-care__img">
                        <img src="<?php echo esc_url($counter_sec['counter_featured_image']); ?>" alt="">
                    </div>
                    <div class="we-care__content">
                        <h3 class="we-care__title"><?php echo esc_attr($counter_sec['counter_section_title']); ?></h3>
                        <p class="we-care__text"><?php echo esc_attr($counter_sec['counter_section_subtitle']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We Care End-->

<!--Project One Start-->
<section class="project-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline"><?php esc_attr(the_field('projects_subtitle')); ?></span>
            <h2 class="section-title__title"><?php esc_attr(the_field('project_title')); ?></h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                    <?php 
                    
                    $cats = get_terms('portfolio-cat');
                    foreach($cats as $cat){ ?>
                        <li data-filter=".<?php echo $cat->slug; ?>"><span class="filter-text"><?php echo $cat->name; ?></span></li>
                    <?php }
                    
                    ?>
                </ul>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">

            <?php 
                
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'portfolio'
                );
                $query = new WP_Query($args);

                while($query->have_posts()){
                    $query->the_post(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item 
                    <?php
                    
                    $catsName = get_the_terms( get_the_ID(), 'portfolio-cat' );
                    foreach($catsName as $catName){
                        echo $catName->slug;
                    }

                    ?>">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline"><?php esc_attr(the_field('project_tagline')); ?></p>
                                    <h3 class="project-one__title"><a href="<?php esc_url(the_permalink( )); ?>"><?php esc_attr(the_title()); ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } 
                    wp_reset_postdata(  );
                ?>
        </div>
    </div>
</section>
<!--Project One End-->

<!--Why Choose One Start-->
<section class="why-choose-one">
    <div class="container">
        <div class="row">
            <?php $why_Section = get_field('why_choose_us');  ?>

            <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="why-choose-one__left">
                    <div class="why-choose-one__img">
                        <img src="<?php echo esc_url($why_Section['left_side_image']); ?>" alt="">
                    </div>
                    <div class="why-choose-one-box-1"></div>
                    <div class="why-choose-one-box-2"></div>
                    <div class="why-choose-one-box-3"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-choose-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline"><?php echo esc_attr($why_Section['wcu_subtitle']); ?></span>
                        <h2 class="section-title__title"><?php echo esc_attr($why_Section['wcu_title']); ?></h2>
                    </div>
                    <p class="why-choose-one__right-text"><?php echo esc_attr($why_Section['wcu_content']); ?></p>
                    <div class="why-choose-one__content">
                        <div class="why-choose-one__content-img">
                            <img src="<?php echo esc_url($why_Section['right_side_image']); ?>" alt="">
                        </div>
                        <div class="why-choose-one__content-list">
                            <ul class="list-unstyled why-choose-one__points">
                                <?php 
                                
                                $wcu_bullets = $why_Section['wcu_bullets']; 
                                
                                foreach($wcu_bullets as $wcu_bullet){?>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p><?php echo esc_attr($wcu_bullet['wcu_bullet_points']); ?></p>
                                        </div>
                                    </li>
                                <?php }
                                
                                ?>

                            </ul>
                        </div>
                    </div>
                    <div class="why-choose-one__progress">
                        <?php 
                        
                        $wcu_skills = $why_Section['wcu_skills'];

                        foreach($wcu_skills as $wcu_skill){?>
                            <div class="why-choose-one__progress-single">
                                <h4 class="why-choose-one__progress-title"><?php echo esc_attr($wcu_skill['skills_name']); ?></h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="<?php echo esc_attr($wcu_skill['skills_percentage']); ?>%">
                                        <div class="count-text"><?php echo esc_attr($wcu_skill['skills_percentage']); ?>%</div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Why Choose One End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-one__map"
        style="background-image: url(<?php echo esc_url(get_field('feedback_bg_image')); ?>)"></div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline"><?php esc_attr(the_field('feedback_subtitle')); ?></span>
            <h2 class="section-title__title"><?php esc_attr(the_field('feedback_title')); ?></h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-one__carousel owl-theme owl-carousel">
                    
                <?php 
                
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'reviews'
                );
                $query = new WP_Query($args);

                while($query->have_posts()){
                    $query->the_post(); ?>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__content">
                                <p class="testimonial-one__text"><?php esc_attr(the_content()); ?></p>
                            </div>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client__img">
                                    <img src="<?php echo esc_url(the_post_thumbnail_url( )); ?>" alt="">
                                </div>
                                <h4 class="testimonial-one__name"><?php esc_attr(the_title()); ?></h4>
                                <p class="testimonial-one__title"><?php esc_attr(the_field('designation')); ?></p>
                            </div>
                        </div>
                <?php }
                    wp_reset_postdata(  );
                ?>
            
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->

<!--CTA One Start-->
<section class="cta-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <div class="cta-one__box-1"></div>
                    <div class="cta-one__box-2"></div>
                    <div class="cta-one__left">
                        <div class="cta-one__icon">
                            <span class="<?php echo esc_attr(the_field('cta_icon','option')); ?>"></span>
                        </div>
                        <div class="cta-one__title-box">
                            <h2 class="cta-one__title"><?php esc_attr(the_field('cta_title','option')); ?></h2>
                        </div>
                    </div>
                    <div class="cta-one__right">
                        <a href="<?php esc_url(the_field('cta_button_link','option')); ?>" class="thm-btn cta-one__btn"><?php esc_attr(the_field('cta_button_name','option')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
 

<!--Blog One Start-->
<section class="blog-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline"><?php esc_attr(the_field('blog_subtitle')); ?></span>
            <h2 class="section-title__title"><?php esc_attr(the_field('blog_title')); ?></h2>
        </div>
        <div class="row">

            <?php

            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'post'
            );
            $query = new WP_Query($args);
            $i = 200;
            while($query->have_posts()){
                $query->the_post(); ?>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                    <!--Blog One Single-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="<?php echo esc_url(the_post_thumbnail_url('post-page-image')); ?>" alt="">
                            <a href="<?php esc_url(the_permalink()); ?>">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p><?php the_time('j F'); ?></p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="list-unstyled blog-one__meta">
                                <?php $author_id = get_post_field('post_author', get_the_ID()); ?>
                                <li><a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><i class="far fa-user-circle"></i><?php the_author(); ?></a></li>
                                <li><span>/</span></li>
                                <li><a href="<?php esc_url(the_permalink()); ?>"><i class="far fa-comments"></i> <?php echo esc_attr(get_comments_number()); ?> Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                            <a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a>
                            </h3>
                            <div class="blog-one__read-btn">
                            <a href="<?php esc_url(the_permalink()); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i = $i + 200;}
                wp_reset_postdata();
            ?>

        </div>
    </div>
</section>
<!--Blog One End-->

<!--Google Map Start-->
<section class="google-map">
    <iframe
        src="<?php echo esc_url(the_field('map_link')); ?>"
        class="google-map__one" allowfullscreen></iframe>

</section>
<!--Google Map End-->

<?php get_footer(); ?>