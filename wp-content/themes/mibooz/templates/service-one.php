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
                    <?php $i = $i + 200; }

                    wp_reset_postdata(  );
                ?>  

            </div>
        </div>
    </div>
</section>
<!--Services One End-->