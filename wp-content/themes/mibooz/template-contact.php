<?php 
/**
 * Template Name: Contact Template
 */

get_header();
?>
<?php require_once('inc/breadcumb.php'); ?>

        <!--Location Start-->
        <section class="location">
           <div class="location-shape" style="background-image: url(assets/images/shapes/location-shape.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                       <!--Location Single-->
                        <div class="location__single">
                            <h3 class="location__title"><?php the_field('box_1_title'); ?></h3>
                            <p class="location__text"><?php the_field('box_1_content'); ?></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                       <!--Location Single-->
                        <div class="location__single">
                            <h3 class="location__title"><?php the_field('box_2_title'); ?></h3>
                            <p class="location__text"><?php the_field('box_2_content'); ?></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                       <!--Location Single-->
                        <div class="location__single location__single-last">
                            <h3 class="location__title"><?php the_field('box_3_title'); ?></h3>
                            <?php $contact = get_field('box_3_content'); ?>
                            <h5 class="location__phone-email">
                                <a href="tel:<?php echo $contact['phone_number']; ?>" class="location__phone"><?php echo $contact['phone_number']; ?></a>
                                <a href="mailto:<?php echo $contact['email']; ?>" class="location__email"><?php echo $contact['email']; ?></a>
                            </h5>
                            <div class="location__social">
                                <?php 
                                $con_soci = get_field('box_3_content'); 
                                $socis = $con_soci['social_media'];
                                foreach($socis as $soci){?>
                                    <a href="<?php echo $soci['social_icon_link'];?>"><i class="<?php echo $soci['social_icon'];?>"></i></a>
                                <?php }
                                
                                ?>
 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="location__bottom">
                            <p class="location-bottom__text">Mibooz services built specifically for your business. <a href="about.html">Find Your Solution</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Location End-->

        <!--contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">contact with us</span>
                    <h2 class="section-title__title">have question?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <?php  echo do_shortcode('[contact-form-7 id="127" title="Contact form 7"]'); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact Page End-->

        <!--Google Map Start-->
        <section class="contcat-page-google-map">
            <iframe
                src="<?php echo the_field('google_map_link'); ?>"
                class="contact-page-google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

<?php get_footer(); ?>