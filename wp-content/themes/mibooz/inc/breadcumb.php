<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo get_template_directory_uri(  ).'/assets/images/backgrounds/page-header-bg.jpg' ?>)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
                <li><?php esc_attr(the_title()); ?></li>
            </ul>
            <h2><?php esc_attr(the_title()); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->

