<?php get_header();?>
<?php require_once('inc/breadcumb.php'); ?>

<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__img">
                    <img src="<?php echo esc_url(the_field('big_image')); ?>" alt="<?php esc_attr(the_title()); ?>">
                </div>
            </div>
        </div>
        <div class="project-details__content">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="project-details__content-left">
                        <h3 class="project-details__content-title"><?php esc_attr(the_title()); ?></h3>
                        <p class="project-details__content-text-1"><?php esc_attr(the_content()); ?></p>
            
                        <ul class="list-unstyled project-details__points">

                            <?php 
                            
                            $featured = get_field('featured_points');
                            foreach($featured as $feature){?>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo esc_attr($feature['featured_points_details']); ?></p>
                                    </div>
                                </li>
                            <?php }
                            ?>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="project-details__content-right">
                        <div class="project-details__details-box">
                            <div class="project-details__details-info">
                                <div class="project-details__details-info-single">
                                    <h5 class="project-details__details-info-client">Clients:</h5>
                                    <p class="project-details__details-info-name"><?php esc_attr(the_field('client_name')); ?></p>
                                </div>
                                <div class="project-details__details-info-single">
                                    <h5 class="project-details__details-info-client">Category:</h5>
                                    <?php $categories = get_the_terms( $post->ID, 'portfolio-cat' ); ?>
                                    <p class="project-details__details-info-name">
                                    <?php
                                        foreach( $categories as $category ) {
                                            echo $category->name . ',';
                                        } 
                                    ?>
                                    </p>
                                </div>
                                <div class="project-details__details-info-single">
                                    <h5 class="project-details__details-info-client">Date:</h5>
                                    <p class="project-details__details-info-name"><?php the_field('date'); ?></p>
                                </div>
                            </div>
                            <div class="project-details__details-social-list">
                                <?php 
                                
                                    $socials = get_field('social_media');

                                    foreach($socials as $social){?>
                                        <a href="<?php echo esc_url($social['social_link']); ?>"><i class="<?php echo esc_attr($social['social_icon']); ?>"></i></a>
                                    <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__pagination-box">
                    <ul class="project-details__pagination list-unstyled">
                    
                    <?php 
                    
                    $adjacent = get_adjacent_post(false, '', true);

                    $adjacent_next = get_adjacent_post(false, '', false);
                    
                    ?>

                    <?php if ( (get_adjacent_post(false, '', true)) ) { ?>
                        <li class="next">
                            <a href="<?php echo get_post_permalink($adjacent->ID); ?>" aria-label="Previous"><i class="icon-arrow-left"></i>Previous</a>
                        </li>
                    <?php } if ( (get_adjacent_post(false, '', false)) ){ ?>
                        <li class="previous">
                            <a href="<?php echo get_post_permalink($adjacent_next->ID); ?>" aria-label="Next">Next<i class="icon-arrow-right"></i></a>
                        </li>
                    <?php } ?>
 
                    </ul>


                </div>
            </div>
        </div>
    </div>
</section>
<!--Project Details End-->

<!--Similar Work Start-->
<section class="similar-work">
    <div class="container">
        <div class="section-title text-center">
            <?php $single_project = get_field('single_project_settings','option'); ?>
            <span class="section-title__tagline"><?php echo esc_attr($single_project['bottom_recent_project_subtitle']); ?></span>
            <h2 class="section-title__title"><?php echo esc_attr($single_project['bottom_recent_project_title']); ?></h2>
        </div>
        <div class="row">

            <?php 
            
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'portfolio',
                'orderby' => 'date'
            );
            $query = new WP_Query($args);
            while($query->have_posts()){
                $query->the_post(); ?>

                <div class="col-xl-4 col-lg-4">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="">
                            <div class="project-one__hover">
                                <p class="project-one__tagline"><?php esc_attr(the_field('project_tagline')); ?></p>
                                <h3 class="project-one__title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
                wp_reset_postdata(  );
            ?>                            

        </div>
    </div>
</section>
<!--Similar Work End-->

<?php get_footer(); ?>