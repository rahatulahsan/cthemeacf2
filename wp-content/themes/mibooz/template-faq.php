<?php 
/**
 * Template Name: FAQ Template
 */

get_header();
?>
<?php require_once('inc/breadcumb.php'); ?>

        <!--FAQs Page Start-->
        <section class="faq-page">
            <div class="faq-page-shape" style="background-image: url(<?php echo the_field('page_shape_background','option'); ?>)"></div>
            <div class="container">
                <div class="faq-page__top">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6">
                            <div class="faq-page__single">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
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
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p><?php the_content(); ?>
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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="faq-page__bottom">
                            <p class="faq-page__bottom-text"><?php echo the_field('subtitle','option'); ?> <a
                                    href="<?php echo the_field('title_link','option'); ?>"><?php echo the_field('title','option'); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQs Page End-->

        <!--contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo the_field('contact_form_subtitle','option'); ?></span>
                    <h2 class="section-title__title"><?php echo the_field('contact_form_title','option'); ?></h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                               <?php  echo do_shortcode('[contact-form-7 id="127" title="Contact form 7"]'); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact Page End-->

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
                                    <span class="<?php echo the_field('cta_icon','option'); ?>"></span>
                                </div>
                                <div class="cta-one__title-box">
                                    <h2 class="cta-one__title"><?php echo the_field('cta_title','option'); ?></h2>
                                </div>
                            </div>
                            <div class="cta-one__right">
                                <a href="<?php echo the_field('cta_button_link','option'); ?>" class="thm-btn cta-one__btn"><?php echo the_field('cta_button_name','option'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

<?php get_footer(); ?>