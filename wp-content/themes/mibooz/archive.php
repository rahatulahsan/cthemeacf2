<?php 
/**
 * Template Name: Blog Template
 */

get_header();
?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo get_template_directory_uri(  ).'/assets/images/backgrounds/page-header-bg.jpg' ?>)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
                <li>Blog</li>
            </ul>
            <h2><?php esc_attr(the_archive_title()); ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <?php 
            
            $i=200;
            
            while(have_posts()){
                the_post(); ?>

                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                    <!--Blog One Single-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="<?php echo esc_url(the_post_thumbnail_url('post-page-image')); ?>" alt="">
                            <a href="<?php esc_url(the_permalink()); ?>">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p><?php the_time('j F'); ?></p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="list-unstyled blog-one__meta">
                                <?php $author_id = get_post_field('post_author', get_the_ID()); ?>
                                <li><a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><i class="far fa-user-circle"></i><?php the_author(); ?></a></li>
                                <li><span>/</span></li>
                                <li><a href="<?php esc_url(the_permalink()); ?>"><i class="far fa-comments"></i> <?php echo esc_attr(get_comments_number()); ?> Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a>
                            </h3>
                            <div class="blog-one__read-btn">
                                <a href="<?php esc_url(the_permalink()); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php $i = $i + 200;}
            
            ?>
        
        </div>
        <div class="blog-sidebar__load-more text-center">
            <a href="blog-details.html" class="thm-btn blog-sidebar__load-more-btn">Load more
                posts</a>
        </div>
    </div>
</section>
<!--Blog Page End-->

 <?php get_footer(); ?>