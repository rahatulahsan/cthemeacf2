<?php 
get_header();
?>
<?php require_once('inc/breadcumb.php'); ?>

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="<?php esc_url(the_post_thumbnail_url()); ?>" alt="<?php esc_attr(the_title()); ?>">
                        <div class="blog-details__date-box">
                            <p><?php the_time('j F'); ?></p>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <?php $author_id = get_post_field('post_author', get_the_ID()); ?>
                            <li><a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><i class="far fa-user-circle"></i> <?php the_author_meta('display_name',$author_id); ?></a></li>
                            <li><span>/</span></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> <?php echo esc_attr(get_comments_number()); ?> Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-details__title"><?php esc_attr(the_title()); ?></h3>
                        <p class="blog-details__text-1"><?php esc_attr(the_content()); ?></p>
                        
                    </div>
                    <div class="blog-details__bottom">
                        <p class="blog-details__tags">
                            <?php the_tags();?>
                        </p>
                        
                    </div>
                    
                    <div class="comment-one">
                        <h3 class="comment-one__title">2 Comments</h3>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="assets/images/blog/comment-1-1.jpg" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Kevin Martin</h3>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text.</p>
                                <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                            </div>
                        </div>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="assets/images/blog/comment-1-2.jpg" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Kevin albert</h3>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text.</p>
                                <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h3 class="comment-form__title">Leave a Comment</h3>
                        <?php 
                        
                            if(comments_open ()){
                                comments_template();
                            }

                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>

                        <?php 
                        
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'post',
                            'orderby' => 'date'
                        );
                        $query = new WP_Query($args);
                        while($query->have_posts(  )){
                            $query->the_post(); ?>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                        <a href="<?php esc_url(the_permalink( )); ?>" class="sidebar__post-content-meta"><i class="far fa-comments"></i><?php echo esc_attr(get_comments_number()); ?> Comments</a>
                                            <a href="<?php esc_url(the_permalink( )); ?>"><?php esc_attr(the_title()); ?></a>
                                        </h3>
                                    </div>
                                </li>
                            
                            </ul>
                        <?php }
                            wp_reset_postdata(  );
                        ?>

                        
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                        <?php 
                        
                        $categories = get_categories( array(
                            'orderby' => 'name',
                            'parent' => 0
                        ) );
                        
                        foreach ($categories as $category){?>
                            <li><a href="<?php echo get_term_link($category->cat_ID); ?>"><?php echo $category->name; ?> <span class="icon-arrow-right"></span></a></li>
                        <?php }

                        ?>
                        </ul>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->

<?php get_footer(); ?>