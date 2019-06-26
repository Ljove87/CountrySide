<?php get_header() ?>

<!-- FIRST SECTION  START-->
<?php
$image = get_field('main_section_image');
	if(!empty($image)) ?>
<section class="vk-main-section" style="background: url(<?php echo $image['url']; ?>)">
			<div class="container">
				<div class="vk-main-title col-lg-7">
					<h1 class="main--headline"><?php the_field('main_title'); ?></h1>
					<p class="main-para"><?php the_field('subtitle'); ?></p>
				</div>
				<!-- get a quote form -->
				<div class="container">
					<div class="get-a-quote-form col-xs-12" id="banner-target">
						<h3><?php the_field('quote_headline'); ?></h3>
					</div>
				</div>
			<!-- end of quote form -->
			</div>
</section>
<?php  ?>
<!-- END OF FIRST SECTION -->

<!-- SECOND SECTION START -->

<section class="vk-second-section">
	<div class="container">
		<!-- first row start -->
		<div class="row">

			<div class="col-xs-12 col-md-6 col-md-4 col-xl-4 hero-service">
				<div class="hero-service-box-shadow">
					<div class="hero-service-box">
						<div class="row-one">
							<div class="hero-service-image col-xs-12 col-md-4 col-xl-3">
								<img class="img-fluid" src="https://crosscountrymoving.supervisewp.com/wp-content/uploads/2019/05/ccim_homepage_long_distance_icon-copy.png" alt="road logo">
							</div>
							<div class="col-xs-12 col-md-8 col-xl-9 hero--headline">
								<h3><?php the_field('hero_service_box_1_headline'); ?></h3>
							</div>
						</div>
						<p><?php the_field('hero_service_box_1_text'); ?></p>
						</div>
				</div>
				<a href="" class="vk-hero-btn">READ MORE</a>
			</div>

			<div class="col-xs-12 col-md-6 col-md-4 col-xl-4 hero-service">
				<div class="hero-service-box-shadow">
					<div class="hero-service-box">
						<div class="row-one">
							<div class="hero-service-image col-xs-12 col-md-4 col-xl-3">
								<img class="img-fluid" src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_interstate_icon-1.png" alt="road logo">
							</div>
							<div class="col-xs-12 col-md-8 col-xl-9 hero--headline">
								<h3><?php the_field('hero_sevice_box_2_headline'); ?></h3>
							</div>
						</div>
						<p><?php the_field('hero_service_box_2_text'); ?></p>
						</div>
				</div>
				<a href="" class="vk-hero-btn">READ MORE</a>
			</div>

			<div class="col-xs-12 col-md-6 col-md-4 col-xl-4 hero-service">
				<div class="hero-service-box-shadow">
					<div class="hero-service-box">
						<div class="row-one">
							<div class="hero-service-image col-xs-12 col-md-4 col-xl-3">
								<img class="img-fluid" src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_residential_icon.png" alt="road logo">
							</div>
							<div class="col-xs-12 col-md-8 col-xl-9 hero--headline">
								<h3><?php the_field('hero_service_box_3_headline'); ?></h3>
							</div>
						</div>
						<p><?php the_field('hero_service_box_3_text'); ?></p>
						</div>
				</div>
				<a href="" class="vk-hero-btn">READ MORE</a>
			</div>

			</div>
			<!-- first row end -->

			<div class="row">

			<div class="col-xs-12 col-md-6 col-md-4 col-xl-4 hero-service">
				<div class="hero-service-box-shadow">
					<div class="hero-service-box">
						<div class="row-one">
							<div class="hero-service-image col-xs-12 col-md-4 col-xl-3">
								<img class="img-fluid" src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_commercial_icon-1.png" alt="road logo">
							</div>
							<div class="col-xs-12 col-md-8 col-xl-9 hero--headline">
								<h3><?php the_field('hero_service_box_4_headline'); ?></h3>
							</div>
						</div>
						<p><?php the_field('hero_service_box_4_text'); ?></p>
						</div>
				</div>
				<a href="" class="vk-hero-btn">READ MORE</a>
			</div>

			<div class="col-xs-12 col-md-6 col-md-4 col-xl-4 hero-service">
				<div class="hero-service-box-shadow">
					<div class="hero-service-box">
						<div class="row-one">
							<div class="hero-service-image col-xs-12 col-md-4 col-xl-3">
								<img class="img-fluid" src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_storage.png" alt="road logo">
							</div>
							<div class="col-xs-12 col-md-8 col-xl-9 hero--headline">
								<h3><?php the_field('hero_service_box_5_headline'); ?></h3>
							</div>
						</div>
						<p><?php the_field('hero_service_box_5_text'); ?></p>
						</div>
				</div>
				<a href="" class="vk-hero-btn">READ MORE</a>
			</div>

			<div class="col-xs-12 col-md-6 col-md-4 col-xl-4 hero-service">
				<div class="hero-service-box-shadow">
					<div class="hero-service-box">
						<div class="row-one">
							<div class="hero-service-image col-xs-12 col-md-4 col-xl-3">
								<img class="img-fluid" src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_special_icon-1-1.png" alt="road logo">
							</div>
							<div class="col-xs-8 col-md-8 col-xl-9 hero--headline">
								<h3><?php the_field('hero_service_box_6_headline'); ?></h3>
							</div>
						</div>
						<p><?php the_field('hero_service_box_6_text'); ?></p>
						</div>
				    </div>
				<a href="" class="vk-hero-btn">READ MORE</a>
			    </div>
			</div>
<!-- first row end -->
		   </div>
</div>
		<!-- end of container -->
</div>
</section>
<!-- END OF SECOND SECTIONS -->

<!-- START OF THIRD SECTIONS -->

<section class="vk-third-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-5 col-xl-5 vk-section-left">
				<h3><?php the_field('third_section_headline'); ?></h3>
				<hr class="line-split">
				<ul>
					<li><?php the_field('third_section_li_1'); ?></li>
					<li><?php the_field('third_section_li_2'); ?></li>
					<li><?php the_field('third_section_li_3'); ?></li>
					<li><?php the_field('third_section_li_4'); ?>s</li>
					<li><?php the_field('third_section_li_5'); ?></li>
					<li><?php the_field('third_section_li_6'); ?></li>
				</ul>
			</div>

		<!-- image -->
			<div class="section-image-truck col-xl-7">
			<img src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_why_choose_us_image.png" alt="why choose us truck image" />
			</div>
		</div>
	</div>
</section>

<!-- END OF THIRD SECTION -->

<!-- START FOURTH SECTION About Our Company -->

<section class="vk-fouth-section">
	<div class="container text-center">
		<h2><?php the_field('fourth_section_headline'); ?></h2>
		<hr class="line--split">
		<p>
			<?php the_field('fourth_section_text') ?>
		</p>
		<a href="#" class="btn btn-primary" role="button"><i class="fa fa-arrow-right"></i>READ MORE</a>
	</div>
</section>

<!-- END OF FOURTH SECTION About Our Company -->

<!-- START SIDE SECTION 1 ROW 4 COLUMNS -->

<section class="vk-process-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-3 col-xl-3 text-center vk-process process1 ">
				<img src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_booking.png" alt="">
				<h3>Booking</h3>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6 col-xl-3 text-center vk-process ">
				<img src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_moving_icon.png" alt="">
				<h3>Moving</h3>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6 col-xl-3 text-center vk-process">
				<img src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_packing-.png" alt="">
				<h3>Packing</h3>
			</div>
			<div class="col-xs-6 col-md-3 col-sm-6 col-xl-3 text-center vk-process process ">
				<img src="<?php echo get_bloginfo("template_directory"); ?>/images/ccim_homepage_delivery.png" alt="">
				<h3>Delivery</h3>
			</div>
		</div>
	</div>
</section>

<!-- END OF SIDE SECTION 1 ROW 4 COLUMNS -->

<!-- START OF 6th Section -->

<section class="vk-sixth-section">
	<div class="container">
		<h2 class="text-center"><?php the_field('sixth_section_headline') ?></h2>
		<hr class="line--split">

		<div class="row">
			<div class="col-xs-12 col-md-12 col-xl-4 col-sm-12 vk-outer-box">
				<div class="vk-review-box">
					<p class="box-1">
						<?php the_field('sixth_section_box_text_1') ?>
					</p>
					<span><?php the_field('sixth_section_box_span_name_1') ?></span>
				</div>
			</div>

			<div class="col-xs-12 col-md-12 col-sm-12 col-xl-4 vk-outer-box">
				<div class="vk-review-box">
					<p class="box-2">
					<?php the_field('sixth_section_box_text_2') ?>
					</p>
					<span><?php the_field('sixth_section_box_span_name_2') ?></span>
				</div>
			</div>

			<div class="col-xs-12 col-md-12 col-sm-12 col-xl-4 vk-outer-box">
				<div class="vk-review-box">
					<p class="box-3">
					<?php the_field('sixth_section_box_text_3') ?>
					</p>
					<span><?php the_field('sixth_section_box_span_name_3') ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of 6th Section -->

<!--Start Banner Section  -->

<section class="vk-banner-section container-fluid">
	<div class="container">
		<div class="vk-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/ccim_homepage_cta_map-1.png') ?>);">
			<div class="row">
				<div class="col-xl-6 col-md-12 col-sm-12 headline-quote">
					<h2><?php the_field('banner_section_headline'); ?></h2>
				</div>
				<div class="col-xl-3 text-center phone-quote">
					<a href="tel:+18886447812"><?php the_field('banner_section_phone') ?></a>
				</div>
				<div class="col-xl-3 col-md-12 text-center button-quote ">
					<a href="#" class="btn btn-orange"><?php the_field('page_banner_button_text') ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- End of Banner Section -->

<!-- Start Seventh Section Blog -->
<section class="vk-blog-section">
	<div class="container">
		<h2 class="text-center">Latest News</h2>
		<hr class="line--split">
		<div class="row">

		<?php 
			$today = date('Ymd');
			$homePagePosts = new WP_Query(array(
				'posts_per_page' => '3',
				'post_type' => 'post',
				'order' => 'ASC',
			));

			while($homePagePosts->have_posts()) {
				$homePagePosts->the_post(); ?>
				<div class="col-xs-12 col-md-4 col-lg-4 col-xl-4 vk-home-blog">
				<div class="vk-home-box">
					<div class="vk-blog-img"><?php the_post_thumbnail(); ?></div>
					<div class="vk-blog-date"><span class="vk-blogdate-number"><?php the_time('F d, Y.'); ?></span></div>
					<div class="vk-textarea-blog">
						<h4 class="vk-blog-title text-center"><?php echo get_the_title() ?></h4>
						<p class="vk-blog-text text-center"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
						<a href="<?php the_permalink(); ?>" class="vk-blog-image-button" id="vk-blog-button"><p class="blog-read-more text-center">READ MORE</p></a>
					</div>
				</div>
			</div>
			<?php }
		?>
		</div>
	</div>
</section>
<!-- End of Seventh Section Blog -->

<?php get_footer() ?>