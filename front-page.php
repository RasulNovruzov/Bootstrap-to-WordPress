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


<?php endwhile;
endif;
wp_reset_postdata() ?>
<!-- About section-->


<?php $post = get_page(get_page_by_path('weve-got-what-you-need', OBJECT, 'post')) ?>


<section class="page-section bg-primary" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0"><?= $post->post_title ?></h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4"><?= $post->post_content ?></p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>