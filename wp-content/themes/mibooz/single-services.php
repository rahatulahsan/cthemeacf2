<?php get_header();?>
<?php require_once('inc/breadcumb.php'); ?>

		<!--Services Details Start-->
		<section class="service-details">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-5">
						<div class="service-details__sidebar">
							<div class="service-details__sidebar-service">
								<h4 class="service-details__sidebar-title">Categories</h4>
								<ul class="service-details__sidebar-service-list list-unstyled">
									<li><a href="mobile-application.html">Mobile Application <span
												class="icon-arrow-right"></span></a></li>
									<li><a href="digital-marketing.html">Digital Marketing <span
												class="icon-arrow-right"></span></a></li>
									<li><a href="graphic-designing.html">Graphic Designing <span
												class="icon-arrow-right"></span></a></li>
									<li><a href="website-development.html">Website Development <span
												class="icon-arrow-right"></span></a></li>
									<li><a href="social-marketing.html">Social Marketing <span
												class="icon-arrow-right"></span></a></li>
									<li><a href="content-writing.html">Content Writting <span
												class="icon-arrow-right"></span></a></li>
								</ul>
							</div>
							<div class="service-details__need-help">
								<div class="service-details__need-help-bg"
									style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
								</div>
								<div class="service-details__need-help-icon">
									<span class="icon-phone-call"></span>
								</div>
								<h2 class="service-details__need-help-title">Best Quality <br> services</h2>
								<div class="service-details__need-help-contact">
									<p>Call us Anytime</p>
									<a href="tel:926668880000">+ 92 666 888 0000</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-7">
						<div class="service-details__right">
							<div class="service-details__img">
								<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
							</div>
							<div class="service-details__content">
								<h3 class="service-details__title"><?php the_title(); ?></h3>
								<p class="service-details__text"><?php the_content(); ?></p>
							</div>
							<ul class="service-details__points list-unstyled">
								<li>
									<h4><?php the_field('unique_feature_1'); ?></h4>
									<div class="service-details__points-count"></div>
								</li>
								<li>
									<h4><?php the_field('unique_feature_2'); ?></h4>
									<div class="service-details__points-count"></div>
								</li>
							</ul>
							<div class="service-details__benefits">
								<div class="row">
									<div class="col-xl-6">
										<div class="service-details__benefits-content">
											<?php $benefits = get_field('benefits');?>

											<h3 class="service-details__benefits-title"><?php echo $benefits['benefits_title']; ?></h3>
											<p class="service-details__benefits-text"><?php echo $benefits['benefits_content']; ?></p>
											<ul class="list-unstyled service-details__benefits-list">
												<?php 
												
												$benefits_bullet = $benefits['benefits_bullet_point'];
												foreach($benefits_bullet as $bullet){ ?>
													<li>
														<div class="icon">
															<span class="icon-check"></span>
														</div>
														<div class="text">
															<p><?php echo $bullet['bullet_point_list']; ?></p>
														</div>
													</li>
												<?php }
													
												?>


											</ul>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="service-details__benefits-img">
											<img src="<?php echo $benefits['benefits_picture']; ?>" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="service-details__faq">
								<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
									<?php
									
									$faqs = get_field('service_faq');
									$i = 1;
									foreach($faqs as $faq) { ?>
									<div class="accrodion <?php if($i==1){ echo 'active'; $i++;} ?>">
										<div class="accrodion-title">
											<h4><?php echo $faq['faq_title']; ?></h4>
										</div>
										<div class="accrodion-content">
											<div class="inner">
												<p><?php echo $faq['faq_answer']; ?></p>
											</div><!-- /.inner -->
										</div>
									</div>
									
									<?php }
									
									?>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Services Details End-->

<?php get_footer(); ?>