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
            $i = 100;
            while($query->have_posts()){
                $query->the_post(); ?>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                    <!--Services Three Single-->
                    <div class="services-three__single">
                        <div class="services-three_icon">
                            <span class="<?php esc_attr(the_field('service_icon')); ?>"></span>
                        </div>
                        <h3 class="services-three__title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a></h3>
                        <p class="services-three__text"><?php echo wp_trim_words( get_the_content(), 10 ); ?></p>
                        <div class="services-three__btn-box">
                            <a href="<?php esc_url(the_permalink()); ?>" class="services-three__btn">Read more</a>
                        </div>
                    </div>
                </div>
            <?php $i = $i + 200; }

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