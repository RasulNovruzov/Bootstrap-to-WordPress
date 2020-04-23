<?php /* Template Name: Portfolio Template */ ?>
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

		<section id="portfolio">
			<?php echo do_shortcode('[foogallery id="34"]'); ?>
		</section>

<?php endwhile;endif; ?>
<?php get_footer(); ?>