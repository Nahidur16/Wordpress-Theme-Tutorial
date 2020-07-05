<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
</head>

<body>
    <?php
    get_header();

    ?>


    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                <div>
                    <div class="container clearfix">
                        <span class="badge badge-danger bnews-title">Breaking News:</span>

                        <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </strong></a></div>
                                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </strong></a></div>
                                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </strong></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container clearfix">

                <!-- Post Content
============================================= -->
                <div class="postcontent nobottommargin clearfix">
                    <div id="posts">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                get_template_part('partials/content-ex');
                                //////ANOTHER WAY
                                ///get_template_part('partials/content', 'ex');
                            }
                        }
                        ?>
                    </div><!-- #posts end -->

                    <!-- Pagination
============================================= -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <?php
                            next_posts_link('&larr; Older');
                            previous_posts_link('Newer &rarr;');
                            ?>

                            <!-- <a href="#" class="btn btn-outline-secondary float-left">

                            </a>
                            <a href="#" class="btn btn-outline-dark float-right">

                            </a>-->
                        </div>
                    </div>
                    <!-- .pager end -->
                    <?php
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }

                    ?>
                </div><!-- .postcontent end -->

                <?php get_sidebar(); ?>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
============================================= -->
    <?php
    get_footer();
    ?>


</body>

</html>