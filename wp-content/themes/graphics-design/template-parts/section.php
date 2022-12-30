<!--====== NAVBAR PART START ======-->
<section class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php bloginfo('url') ?>">
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
            <div class="banner-main">
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
                    $slideThirdTitle = get_field('gd_third_title', $post->ID);
                    ?>
                    <div class="item">
                        <video autoplay muted loop id="bg-video">
                            <source src="<?php echo get_template_directory_uri() . '/assets/images/pexels-arthouse-studio.mp4' ?>"
                                    type="video/mp4"/>
                        </video>
                        <!--                    <img src="--><? //= $slideImage ?><!--" alt="images not found">-->
                        <div class="cover">
                            <div class="container">
                                <div class=" text-justify header-content wow fadeInUp" data-wow-duration="1.2s"
                                     data-wow-delay="0.2s">
                                    <div class="content-effect">
                                        <div class="k-header-inside-1 wow " data-wow-duration="2.2s"
                                             data-wow-delay="1.2s"><?= the_title() ?></div>
                                        <div class="k-header-inside-1 wow " data-wow-duration="2.2s"
                                             data-wow-delay="1.2s"><?= the_title() ?></div>
                                    </div>
                                    <div class="k-header-inside-2 wow fadeInUp" data-wow-duration="1.2s"
                                         data-wow-delay="0.2s"><?= $slideFirstTitle ?></div>
                                    <div class="k-header-inside-3 wow fadeInUp" data-wow-duration="1.2s"
                                         data-wow-delay="0.2s"><?= $slideThirdTitle ?></div>
                                </div>
                                <div class="k-header-ouside-1 wow fadeInUp" data-wow-duration="1.2s"
                                     data-wow-delay="0.2s"><?= $slideSecondTitle ?></div>
                                <div class="k-header-ouside-2 wow fadeInUp" data-wow-duration="1.2s"
                                     data-wow-delay="0.2s"><?= $post->post_content; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php break; endwhile; ?>
            </div>
        </header>
    </div>
</section>

<!--====== portfolio PART START ======-->
<section id="portfolio" class="portfolio-area">
    <div class="container-fluid section-container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3 class="title section-header-title wow fadeInUp" data-wow-delay="0.2s"><?php echo get_option('tw_title_portfolio') ?></h3>
                    <p class="text section-text wow fadeInUp" data-wow-delay="0.2s"><?php echo get_option('tw_portfolio') ?></p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu pt-30 text-center">
                    <ul>
                        <li data-filter="*" class="active">TOUT</li>
                        <li class="notranslate" data-filter=".background">BACKGROUND</li>
                        <li data-filter=".brochure">BROCHURES</li>
                        <li data-filter=".detourage">Détourage photos</li>
                        <li data-filter=".etiquette">ÉTIQUETTES</li>
                        <li data-filter=".miseenpage">Mise en page</li>
                    </ul>
                </div> <!-- portfolio menu -->
            </div>
        </div> <!-- row -->
        <div class="row grid portfolio">
            <?php
            $args = array(
                'post_type' => 'gdclipping',
                'posts_per_page' => -1
            );

            // Query the posts:
            $query = new WP_Query($args);
            // Loop through the obituaries:
            while ($query->have_posts()) : $query->the_post();
                $firstImage = get_field('gd_first_image', $post->ID)['url'];
                $secondImage = get_field('gd_second_image', $post->ID)['url'];
                $slug = '';
                $postName = explode('-', $post->post_name);
                if (isset($postName) && array_key_exists(0, $postName)) {
                    $slug = $postName[0];
                }
                ?>
                <div class="detour col-md-4 col-sm-6 <?= $slug ?>">
                    <div class="single-portfolio mt-30">
                        <div class="img-comp-container">
                            <div class="img-comp-img "
                                 style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/clip.png' ?>')">
                                <img src="<?php echo $firstImage ?>" width="380" height="240">
                            </div>
                            <div class="img-comp-img img-comp-overlay">
                                <img src="<?php echo $secondImage ?>" width="380" height="240">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php
            $termWithoutParent = '';
            $terms = get_terms([
                'taxonomy' => 'gallery',
                'hide_empty' => false,
            ]);

            foreach ($terms as $term) {
                if ((bool)$term->parent) {
                    continue;
                }
                $termWithoutParent = $term;
                $image = get_field('gd_photo', 'gallery' . '_' . $term->term_id)['url'];
                $defaultImage = "https://images.unsplash.com/photo-1664189154567-8de6739810ac?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NjY2ODU2NDU&ixlib=rb-4.0.3&q=80";
                $slug = '';
                $termName = explode('-', $term->slug);
                if (isset($termName) && array_key_exists(0, $termName)) {
                    $slug = $termName[0];
                }
                ?>

                <a href="#" class="card_image card col-md-4 <?= $slug ?>"
                   data-toggle="modal"
                   data-url="<?= admin_url('admin-ajax.php'); ?>"
                   data-term="<?= $term->term_id ?>"
                   data-target="#modal-<?php echo $term->term_id ?>">
                    <div class="image">
                        <img class="darker image-thumbnail" src="<?= $image ?? $defaultImage ?>" alt=""/>
                    </div>
                </a>
            <?php } ?>



        </div>
    </div> <!-- row -->
    <div class="modal fade" style="background-color: rgba(0, 0, 0, 0.8);" id="" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wrap-modal-slider">
                        <div class="miseenpages">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- partial:index.partial.html -->
<section id="services">
    <div class="codepenBG">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title section-header-title wow fadeInUp" data-wow-delay="0.2s"><?php echo get_option('tw_title_service') ?></h3>
                        <p class="text wow fadeInUp" data-wow-delay="0.2s"><?php echo get_option('tw_service') ?></p>
                    </div> <!-- row -->
                </div>

                <div class="container">
                    <div class="row pb-100">
                        <?php
                        $args = array(
                            'post_type' => 'gdservices',
                            'posts_per_page' => 4
                        );

                        // Query the posts:
                        $query = new WP_Query($args);
                        // Loop through the obituaries:
                        while ($query->have_posts()) : $query->the_post();
                        $pictoIcon = get_field('picto');
                        ?>
                        <div class="col">
                            <div class="card-service">
                                <div class="content-card">
                                    <div class="front">
                                        <h3><?= the_title() ?></h3>
                                        <p><img width="100" src="<?php echo $pictoIcon['url'] ?>" alt=""></p>
                                    </div>
                                    <div class="back from-<?php if ($post->ID % 2 == 0): ?>right<?php else: ?>left<?php endif; ?>">
                                        <p class="des">
                                            <?php the_content() ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php if ($post->ID % 2 == 0): ?>
                                <div class="w-100 pb-4"></div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div> <!-- row -->

        </div>
    </div>
</section>

</div>
<!--====== portfolio PART ENDS ======-->
<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center pb-20">
                    <h3 class="title contact-header-title"><?php echo get_option('tw_title_contact') ?></h3>
                    <p class="text"><?php echo get_option('tw_contact') ?></p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <h4 class="contact-title"><?php echo get_option('tw_seconde_contact') ?></h4>
                    <p class="text">Positionnement, couleurs, typographie , déclinaison , etc ...</p>
                    <ul class="contact-info">
                        <li><i class="lni-money-location"></i> Créa-Graphic Design</li>
                        <?php if (get_option('tw_phone') !== "" && $phoneNumber = get_option('tw_phone')): ?>
                            <li><i class="lni-phone-handset"></i> <?= $phoneNumber ?></li>
                        <?php endif; ?>

                        <?php if (get_option('tw_email') !== "" && $emailAddress = get_option('tw_email')): ?>
                            <li><i class="lni-envelope"></i> <?= $emailAddress ?></li>
                        <?php endif; ?>
                    </ul>
                </div> <!-- contact two -->
            </div>
            <div class="col-lg-6">
                <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s"
                     data-wow-delay="0.5s">
                    <?php echo do_shortcode('[contact-form-7 id="147" title="contact"]') ?>
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<!-- Counter Section Start -->
<section id="counter" class="section-padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'gdcounter',
                        'posts_per_page' => 4
                    );

                    // Query the posts:
                    $query = new WP_Query($args);
                    // Loop through the obituaries:
                    while ($query->have_posts()) : $query->the_post();
                    ?>
                    <!-- Start counter -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="fact-count">
                                <h3><span class="counter"><?php echo get_field('counter') ?></span></h3>
                                <p><?php the_title() ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
<!--====== CONTACT TWO PART START ======-->