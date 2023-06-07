<?php 
/**
 * Template Name: About Template
 */

get_header();
?>
<?php require_once('inc/breadcumb.php'); ?>

<!--About Page Start-->
<section class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-page__left">
                    <ul class="list-unstyled about-page__images">
                        <?php  
                            $about = get_field('about_section');
                        ?>
                        <li>
                            <div class="about-page__img-1">
                                <img src="<?php echo esc_url($about['about_image_1']); ?>" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="about-page__img-2">
                                <img src="<?php echo esc_url($about['about_image_2']); ?>" alt="">
                            </div>
                        </li>
                    </ul>
                    <div class="about-page__badge"><img data-tilt
                            src="<?php echo esc_url($about['about_page_badge']); ?>" alt=""></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-page__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline"><?php echo esc_attr($about['subtitle']); ?></span>
                        <h2 class="section-title__title"><?php echo esc_attr($about['title']); ?></h2>
                    </div>
                    <p class="about-page__right-text-1"><?php echo esc_attr($about['content']); ?></p>
                    <h4 class="about-page__right-text-2"><?php echo esc_attr($about['featured_title']); ?></h4>
                    <a href="<?php echo esc_url($about['button_link']); ?>" class="thm-btn abut-page__btn"><?php echo esc_attr($about['button_title']); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Page End-->

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
                <?php $images = get_field('about_page_carousel'); 

                foreach($images as $image){?>
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
<section class="design-studio services-page-design-studio">
    <div class="design-studio-bg-box">
        <?php $video_details = get_field('video_details'); 
        
        ?>
        <div class="design-studio-bg" 
            style="background-image: url(<?php echo esc_url($video_details['video_background_image']); ?>)">

        </div>
    </div>
    <div class="container">
        <div class="col-lg-12">
            <div class="design-studio__inner">
                <h2 class="design-studio__title"><?php echo esc_attr($video_details['video_title']); ?></h2>
                <div class="design-studio__video-link">
                    <a href="<?php echo esc_url($video_details['video_link']); ?>" class="video-popup">
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

<!--Testimonial Two Start-->
<section class="testimonial-two about-page-testimonial-two">
    <?php $reviews = get_field('reviews_section'); ?>
    <div class="testimonial-two-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img
            src="<?php echo esc_url($reviews['right_side_shape']); ?>" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="testimonial-two__left wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="testimonial-two__img">
                        <img src="<?php echo esc_url($reviews['left_side_image']); ?>" alt="">
                        <div class="testimonial-two__content">
                            <h3 class="testimonial-two__title"><?php echo esc_attr($reviews['image_hashtag_title']); ?></span></h3>
                        </div>
                        <div class="testimonial-two__box-1"></div>
                        <div class="testimonial-two__box-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testimonial-two__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline"><?php echo esc_attr($reviews['review_subtitle']); ?></span>
                        <h2 class="section-title__title"><?php echo esc_attr($reviews['review_title']); ?></h2>
                    </div>
                    <div class="testimonial-two__carousel owl-theme owl-carousel">

                    <?php 
                    
                    $args = array(
                        'posts_per_page' => 4,
                        'post_type' => 'reviews'
                    );
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post(); ?>
                            <!--Testimonial Two Single-->
                            <div class="testimonial-two__single">
                            <p class="testimonial-two__text"><?php esc_attr(the_content()); ?></p>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-details">
                                    <h4 class="testimonial-two__client-name"><?php esc_attr(the_title()); ?></h4>
                                    <p class="testimonial-two__client-title"><?php esc_attr(the_field('designation')); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    
                        wp_reset_postdata(  );
                    
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Two End-->

<!--Team One Start-->
<section class="team-one">
    <div class="container">
        <div class="section-title text-center">
            <?php $teams = get_field('team_section'); ?>
            <span class="section-title__tagline"><?php echo esc_attr($teams['team_subtitle']); ?></span>
            <h2 class="section-title__title"><?php echo esc_attr($teams['team_heading']); ?></h2>
        </div>
        <div class="row">
        <?php 
            
            $args = array(
                'posts_per_page' => 8,
                'post_type' => 'teams'
            );

            $query =  new WP_Query($args);
            $i = 200;
            while($query->have_posts()){
                $query->the_post(); ?>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="<?php echo esc_url(the_post_thumbnail_url('team-image')); ?>" alt="<?php echo esc_attr(the_title()); ?>">
                            <div class="team-one__details">
                                <p class="team-one__title"><?php esc_attr(the_field('designation')); ?></p>
                                <h4 class="team-one__name"><?php esc_attr(the_title()); ?></h4>
                            </div>
                            <div class="team-one__social">
                                <?php 
                                $socials = get_field('socials');
                                foreach($socials as $social){ ?>
                                    <a href="<?php echo esc_url($social['social_link']); ?>"><i class="<?php echo esc_attr($social['social_icon']); ?>"></i></a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i = $i + 200;}

            wp_reset_postdata(  );
            
            ?>

        </div>
    </div>
</section>
<!--Team One End-->

<!--Best Agency Start-->
<section class="best-agency about-page-best-agency">
    <div class="best-agency-shape" style="background-image: url()">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="best-agency__left">
                    <div class="section-title text-left">
                        <?php $faqs = get_field('faq_section'); 
                            
                        ?>
                        <span class="section-title__tagline"><?php echo esc_attr($faqs['faq_subtitle']); ?></span>
                        <h2 class="section-title__title"><?php echo esc_attr($faqs['faq_title']); ?></h2>
                    </div>
                    <ul class="list-unstyled best-agency__points">
                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <div class="text">
                                <p><?php echo esc_attr($faqs['featured_text_1']); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <div class="text">
                                <p><?php echo esc_attr($faqs['featured_text_2']); ?></p>
                            </div>
                        </li>
                    </ul>
                    <div class="best-agency__experience">
                        <div class="best-agency__experience-icon">
                            <span class="<?php echo esc_attr($faqs['featured_icon']); ?>"></span>
                        </div>
                        <div class="best-agency__experience-text-box">
                            <p class="best-agency__experience-text"><?php echo esc_attr($faqs['featured_contents']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="best-agency__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">

                        <?php 
                            
                            $args = array(
                                'posts_per_page' => 6,
                                'post_type' => 'faqs'
                            );
                            $query =  new WP_Query($args);

                            $i = 1;

                            while($query->have_posts()){
                                $query->the_post(); 
                            ?>

                                <div class="accrodion <?php if($i==1){ echo 'active'; $i++;} ?>">
                                    <div class="accrodion-title">
                                        <h4><?php esc_attr(the_title()); ?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php esc_attr(the_content()); ?>
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            <?php }
                            wp_reset_postdata(  );
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Best Agency End-->

 <?php get_footer(); ?>