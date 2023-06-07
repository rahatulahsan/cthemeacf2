<!--Two Boxes Start-->
<section class="two-boxes">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <!--Two Boxes Single-->
                <div class="two-boxes__single">
                    <?php $box = get_field('service_page_box','option'); ?>
                    <div class="two-boxes__bg"
                        style="background-image: url(<?php echo esc_url($box['box_1_image']); ?>)"></div>
                    <p class="two-boxes__tagline"><?php echo esc_attr($box['box_1_subtitle']); ?></p>
                    <h4 class="two-boxes__title"><?php echo esc_attr($box['box_1_title']); ?></h4>
                    <div class="two-boxes__arrow">
                        <a href="<?php echo esc_url($box['box_1_link']); ?>"><span class="icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <!--Two Boxes Single-->
                <div class="two-boxes__single">
                    <div class="two-boxes__bg"
                        style="background-image: url(<?php echo esc_url($box['box_2_image']); ?>)"></div>
                    <p class="two-boxes__tagline"><?php echo esc_attr($box['box_2_subtitle']); ?></p>
                    <h4 class="two-boxes__title"><?php echo esc_attr($box['box__2_title']); ?></h4>
                    <div class="two-boxes__arrow">
                        <a href="<?php echo esc_url($box['box_2_link']); ?>"><span class="icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Two Boxes End-->