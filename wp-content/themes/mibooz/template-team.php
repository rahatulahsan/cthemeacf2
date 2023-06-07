<?php 
/**
 * Template Name: Team Template
 */
get_header();

?>
<?php require_once('inc/breadcumb.php'); ?>

<!--Team One Start-->
<section class="team-one team-page">
    <div class="container">
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
                            <img src="<?php echo esc_url(the_post_thumbnail_url('team-image')); ?>" alt="">
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
            <?php $i = $i + 200; }

            ?>
        </div>
    </div>
</section>
<!--Team One End-->

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
                            <h2 class="cta-one__title"><?php echo esc_attr(the_field('cta_title','option')); ?></h2>
                        </div>
                    </div>
                    <div class="cta-one__right">
                        <a href="<?php echo esc_url(the_field('cta_button_link','option')); ?>" class="thm-btn cta-one__btn"><?php echo esc_attr(the_field('cta_button_name','option')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->

<?php get_footer(); ?>