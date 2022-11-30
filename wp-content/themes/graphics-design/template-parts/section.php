<!--====== NAVBAR PART START ======-->
<section class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight"
                                aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'container' => false,
                                'menu_class' => 'navbar-nav ml-auto',
                            ));
                            ?>
                            <?php //echo do_shortcode('[gtranslate]'); ?>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
    <div id="home">
        <header>
            <div class="owl-carousel owl-theme">
                <?php
                $args = array(
                    'post_type' => 'gdslider',
                    'posts_per_page' => -1
                );

                // Query the posts:
                $query = new WP_Query($args);
                // Loop through the obituaries:
                while ($query->have_posts()) : $query->the_post();
                $slideImage = get_field('gd_photo', $post->ID)['url'];
                $slideSecondTitle = get_field('gd_second_title', $post->ID);
                $slideFirstTitle = get_field('gd_first_title', $post->ID);
                ?>
                <div class="item">
                    <img src="<?= $slideImage ?>" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <?php if ($post->post_content !== ''): ?>
                                    <div class="line"></div>
                                <?php endif; ?>
                                <h2><?= $slideSecondTitle ?></h2>
                                <h1><?= the_title() ?></h1>
                                <h4><?= $post->post_content; ?></h4>
                            </div>
                            <div class="k-title-outside-line-1"><?= $post->post_content; ?></div>
                            <div class="k-title-outside-line-2"><?= $slideSecondTitle; ?></div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </header>
    </div>
</section>

<!--====== portfolio PART START ======-->
<section id="portfolio" class="portfolio-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3 class="title">Our Portfolio</h3>
                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get
                        results. Happiness guaranteed!</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu pt-30 text-center">
                    <ul>
                        <li data-filter="*" class="active">TOUT</li>
                        <li class="notranslate" data-filter=".bac">BACKGROUND</li>
                        <li data-filter=".bro">BROCHURES</li>
                        <li data-filter=".eti">ÉTIQUETTES</li>
                    </ul>
                </div> <!-- portfolio menu -->
            </div>
        </div> <!-- row -->
        <div class="row grid">
            <?php
            $args = array(
                'post_type' => 'gdportfolio',
                'posts_per_page' => -1
            );
            // Query the posts:
            $query = new WP_Query($args);
            // Loop through the obituaries:
            while ($query->have_posts()) : $query->the_post();
                $image = get_field('gd_photo', $post->ID)['url'];
                $defaultImage = "https://images.unsplash.com/photo-1664189154567-8de6739810ac?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NjY2ODU2NDU&ixlib=rb-4.0.3&q=80";
                $slug = '';
                $postName = explode('-', $post->post_name);
                if (isset($postName) && array_key_exists(0, $postName)) {
                    $slug = $postName[0];
                }
                ?>
                <div class="col-lg-4 col-sm-6 <?= $slug ?>">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img class="img-thumbnail" src="<?= $image ?? $defaultImage ?>" alt="portfolio">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="<?= $image ?? $defaultImage ?>"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="#"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#"><?php the_title() ?></a></h4>
                            <p class="text"><?= $post->post_content ?></p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
            <?php endwhile; ?>
        </div>
    </div> <!-- row -->
    </div> <!-- row -->
</section>
<!--====== portfolio PART ENDS ======-->

<!--====== CONTACT TWO PART START ======-->
<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3 class="title">Get in touch</h3>
                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get
                        results. Happiness guaranteed!</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <h4 class="contact-title">Lets talk about the project</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde repellendus
                        delectus facilis quia consequatur maxime perferendis! Sequi, modi consequatur.</p>
                    <ul class="contact-info">
                        <li><i class="lni-money-location"></i> Elizabeth St, Melbourne, Australia</li>
                        <li><i class="lni-phone-handset"></i> +333 789-321-654</li>
                        <li><i class="lni-envelope"></i> hello@ayroui.com</li>
                    </ul>
                </div> <!-- contact two -->
            </div>
            <div class="col-lg-6">
                <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s"
                     data-wow-delay="0.5s">
                     <?php echo do_shortcode('[contact-form-7 id="29" title="contact"]') ?>
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT TWO PART ENDS ======-->