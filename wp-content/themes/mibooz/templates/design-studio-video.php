<!--Design Studio Start-->
<section class="design-studio services-page-design-studio">
    <div class="design-studio-bg-box">
        <?php $video = get_field('service_page_video','option'); ?>
        <div class="design-studio-bg"
            style="background-image: url(<?php echo esc_url($video['video_background_image']); ?>)">

        </div>
    </div>
    <div class="container">
        <div class="col-lg-12">
            <div class="design-studio__inner">
                
                <h2 class="design-studio__title"><?php echo esc_attr($video['video_title']); ?></h2>
                <div class="design-studio__video-link">
                    <a href="<?php echo esc_url($video['video_url']); ?>" class="video-popup">
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