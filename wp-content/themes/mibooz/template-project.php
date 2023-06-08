<?php 
/**
 * Template Name: Project Template
 */

get_header();
?>
<?php require_once('inc/breadcumb.php'); ?>

<!--Project One Start-->
<section class="project-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                    <?php 
                    
                    $cats = get_terms('portfolio-cat');
                    foreach($cats as $cat){ ?>
                        <li data-filter=".<?php echo $cat->slug; ?>"><span class="filter-text"><?php echo $cat->name; ?></span></li>
                    <?php }
                    
                    ?>
                    
                </ul>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            
            <?php 
            
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'portfolio'
            );
            $query = new WP_Query($args);
            while($query->have_posts()){
            $query->the_post(); ?>
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item 
                    <?php
                    
                    $catsName = get_the_terms( get_the_ID(), 'portfolio-cat' );
                    foreach($catsName as $catName){
                    echo $catName->slug;
                    }
                    
                    ?>">
                    <!--Portfolio One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(the_title()); ?>">
                            <div class="project-one__hover">
                                <p class="project-one__tagline"><?php esc_attr(the_field('project_tagline')); ?></p>
                                <h3 class="project-one__title"><a href="<?php esc_url(the_permalink( )); ?>"><?php esc_attr(the_title()); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } 
                wp_reset_postdata(  );
            ?>

        </div>
        <?php echo do_shortcode('[ajax_load_more container_type="div" transition_container_classes="row large-12" post_type="portfolio" posts_per_page="3" pause="true" offset="2" button_done_label="No More Projects...."]'); ?>
    </div>
</section>
<!--Project One End-->

<?php get_footer(); ?>