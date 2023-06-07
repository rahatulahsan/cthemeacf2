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
            $i = 200;
            while($query->have_posts()){
                $query->the_post(); ?>
                <!--Services Two Single-->
                <li class="services-two__single wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                    <div class="services-two__icon">
                        <span class="<?php esc_attr(the_field('service_icon')); ?>"></span>
                    </div>
                    <h3 class="services-two__title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a>
                    </h3>
                    <p class="services-two__text"><?php echo wp_trim_words( get_the_content(), 10 ); ?></p>
                </li>
            <?php $i = $i + 200;}
                wp_reset_postdata(  );
            ?>
            
        </ul>
    </div>
</section>
<!--Services Two End-->