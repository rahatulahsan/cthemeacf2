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
                                <li><a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"><i class="far fa-user-circle"></i><?php esc_attr(the_author()); ?></a></li>
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