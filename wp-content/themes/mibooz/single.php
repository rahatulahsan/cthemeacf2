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
                                <img src="<?php esc_url(the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                                <div class="blog-details__date-box">
                                    <p><?php the_time('j F'); ?></p>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <ul class="list-unstyled blog-details__meta">
                                    <?php $author_id = get_post_field('post_author', get_the_ID()); ?>
                                    <li><a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><i class="far fa-user-circle"></i> <?php the_author_meta('display_name',$author_id); ?></a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title"><?php the_title(); ?></h3>
                                <p class="blog-details__text-1"><?php the_content(); ?></p>
                                
                            </div>
                            <div class="blog-details__bottom">
                                <p class="blog-details__tags">
                                    <span>Tags</span>
                                    <a href="#">Development</a>
                                    <a href="#">Designing</a>
                                </p>
                                <div class="blog-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="blgo-details__pagenation-box">
                                <ul class="list-unstyled blog-details__pagenation">
                                    <li>How much A website  <br> cost to build</li>
                                    <li>We Design the Latest <br> trendy Designs</li>
                                </ul>
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
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                            <button type="submit" class="thm-btn comment-form__btn">Submit a Comment</button>
                                        </div>
                                    </div>
                                </form>
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
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                               <a href="#" class="sidebar__post-content-meta"><i class="far fa-comments"></i>2 Comments</a>
                                                <a href="blog-details.html">experiences that connect us</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                               <a href="#" class="sidebar__post-content-meta"><i class="far fa-comments"></i>2 Comments</a>
                                                <a href="blog-details.html">business advices for growth</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                               <a href="#" class="sidebar__post-content-meta"><i class="far fa-comments"></i>2 Comments</a>
                                                <a href="blog-details.html">understanding of our customer</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="blog-details.html">Web Development <span class="icon-arrow-right"></span></a></li>
                                    <li><a href="blog-details.html">Social Marketing <span class="icon-arrow-right"></span></a></li>
                                    <li><a href="blog-details.html">Technology <span class="icon-arrow-right"></span></a></li>
                                    <li><a href="blog-details.html">Business & Finance <span class="icon-arrow-right"></span></a></li>
                                    <li><a href="blog-details.html">Graphi Design <span class="icon-arrow-right"></span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Development</a>
                                    <a href="#">Designing</a>
                                    <a href="#">Business</a>
                                    <a href="#">Marketing</a>
                                    <a href="#">technology</a>
                                </div>
                            </div>
                            <div class="sidebar__single sidebar__comments">
                                <h3 class="sidebar__title">comments</h3>
                                <ul class="sidebar__comments-list list-unstyled">
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A wordpress commenter on <br> launch new mobile app</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>John Doe on Template:</p>
                                            <h5>Comments</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A wordpress commenter on <br> launch new mobile app</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>John Doe on Template:</p>
                                            <h5>Comments</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->

<?php get_footer(); ?>