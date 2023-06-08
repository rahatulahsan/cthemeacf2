<?php get_header(); ?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo esc_url(the_field('header_background', 'option')); ?>)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
                <li>404 error</li>
            </ul>
            <h2>404 error</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Error Page Start-->
<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-page__inner">
                    <h2 class="error-page__title">404</h2>
                    <h3 class="error-page__tagline"><?php esc_attr(the_field('main_title','option')); ?></h3>
                    <p class="error-page__text"><?php esc_attr(the_field('content','option')); ?></p>
                    <?php $search_bar = get_field('showhide_search_bar','option'); 
                    
                        if($search_bar == 1){?>
                            <form class="error-page__form">
                                <div class="error-page__form-input">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </div>
                            </form>
                        <?php }else{}
                    ?>
                    
                    <a href="<?php esc_attr(the_field('button_link','option')); ?>" class="thm-btn error-page__btn"><?php esc_attr(the_field('button_text','option')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Error Page End-->
<?php get_footer(); ?>