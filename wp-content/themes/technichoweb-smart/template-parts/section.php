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
                        <li data-filter="*" class="active">ALL WORK</li>
                        <li data-filter=".branding-3">BRANDING</li>
                        <li data-filter=".marketing-3">MARKETING</li>
                        <li data-filter=".planning-3">PLANNING</li>
                        <li data-filter=".research-3">RESEARCH</li>
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
                $image = get_field('gd_photo', $post->ID);
                $slug = '';
                $defaultImage = get_template_directory_uri()."/assets/images/without_picture.png";
                $postName = explode('-', $post->post_name);
                if (isset($postName) && array_key_exists(0, $postName)) {
                    $slug = $postName[0];
                }
                ?>
                <div class="col-lg-4 col-sm-6 <?= $slug ?>">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="<?= $image ?? $defaultImage ?>" alt="portfolio">
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
                    <form id="contact-form" action="assets/contact.php" method="post">
                        <div class="form-input mt-15">
                            <label>Name</label>
                            <div class="input-items default">
                                <input type="text" placeholder="Name" name="name">
                                <i class="lni-user"></i>
                            </div>
                        </div> <!-- form input -->
                        <div class="form-input mt-15">
                            <label>Email</label>
                            <div class="input-items default">
                                <input type="email" placeholder="Email" name="email">
                                <i class="lni-envelope"></i>
                            </div>
                        </div> <!-- form input -->
                        <div class="form-input mt-15">
                            <label>Massage</label>
                            <div class="input-items default">
                                <textarea placeholder="Massage" name="massage"></textarea>
                                <i class="lni-pencil-alt"></i>
                            </div>
                        </div> <!-- form input -->
                        <p class="form-message"></p>
                        <div class="form-input rounded-buttons mt-20">
                            <button type="submit" class="main-btn rounded-three">Submit</button>
                        </div> <!-- form input -->
                    </form>
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT TWO PART ENDS ======-->