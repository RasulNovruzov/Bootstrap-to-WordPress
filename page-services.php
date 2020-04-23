<?php /* Template Name: Services Teamplate */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- Masthead-->
		<header class="masthead">
			<div class="container h-100">
				<div class="row h-100 align-items-center justify-content-center text-center">
					<div class="col-lg-10 align-self-end">
						<h1 class="text-uppercase text-white font-weight-bold">
							<?php the_title() ?>
						</h1>
						<hr class="divider my-4" />
					</div>
					<div class="col-lg-8 align-self-baseline">
						<p class="text-white-75 font-weight-light mb-5">
							<?php the_content() ?>
						</p>
						<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
					</div>
				</div>
			</div>
		</header>

		<section class="page-section" id="services">
			<div class="container">
				<h2 class="text-center mt-0">At Your Service</h2>
				<hr class="divider my-4" />
				<div class="row">
					<?php
					$posts = get_posts(array(
						'numberposts' => -1,
						'post_type' => 'services_posts',
						'suppress_filters' => true,
					));
					?>

					<?php foreach ($posts as $post) : setup_postdata($post) ?>

						<div class="col-lg-3 col-md-6 text-center">
							<div class="mt-5">
								<img src="<?php the_post_thumbnail_url() ?> "  width="120px">
								<h3 class="h4 mb-2"><?php the_title() ?></h3>
								<div class="text-muted mb-0"><?php the_content() ?></div>
							</div>
						</div>

					<?php endforeach;
					wp_reset_postdata() ?>
				</div>
			</div>
		</section>


<?php endwhile;endif; ?>
<?php get_footer(); ?>