<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo esc_url(the_field('header_background', 'option')); ?>)">
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

