<!--====== NAVBAR PART START ======-->
<section class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php  bloginfo('url') ?>">
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
<!--                    <img src="--><?//= $slideImage ?><!--" alt="images not found">-->
                    <div class="cover">
                        <div class="container">
                            <div class=" text-justify header-content wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                <div class="content-effect">
                                    <div class="k-header-inside-1 wow " data-wow-duration="2.2s"
                                         data-wow-delay="1.2s"><?= the_title() ?></div>
                                    <div class="k-header-inside-1 wow " data-wow-duration="2.2s"
                                         data-wow-delay="1.2s"><?= the_title() ?></div>
                                </div>
                                <div class="k-header-inside-2 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s"><?= $slideFirstTitle ?></div>
                                <div class="k-header-inside-3 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s"><?= $slideThirdTitle ?></div>
                            </div>
                            <div class="k-header-ouside-1 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s"><?= $slideSecondTitle ?></div>
                            <div class="k-header-ouside-2 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s"><?= $post->post_content; ?></div>
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
                    <h3 class="title section-header-title wow fadeInUp" data-wow-delay="0.2s">Portfolio</h3>
                    <p class="text section-text wow fadeInUp" data-wow-delay="0.2s">Je vous accompagne dans la création de votre identité visuel <br> avec professionnalisme et simplicité </p>
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
            $termWithoutParent = '';
            $terms = get_terms([
                'taxonomy' => 'gallery',
                'hide_empty' => false,
            ]);

            foreach ($terms as $term){
                if ((bool)$term->parent){
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
                    <div class="image" >
                       <img class="darker image-thumbnail"  src="<?= $image ?? $defaultImage ?>" alt="" />
                    </div>
                </a>
            <?php } ?>


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
                <div class="col-lg-4 col-sm-6 <?= $slug ?>">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="img-comp-container">
                            <div class="img-comp-img " style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/clip.png'?>')">
                                <img src="<?php echo $firstImage ?>" width="350" height="240">
                            </div>
                            <div class="img-comp-img img-comp-overlay" >
                                <img src="<?php echo $secondImage ?>" width="350" height="240">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div> <!-- row -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</section>
<section id="services"></section>
<script>
    /*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
    initComparisons();
    function initComparisons() {
        var x, i;
        /*find all elements with an "overlay" class:*/
        x = document.getElementsByClassName("img-comp-overlay");
        for (i = 0; i < x.length; i++) {

            /*once for each "overlay" element:
            pass the "overlay" element as a parameter when executing the compareImages function:*/
            compareImages(x[i]);
        }
        function compareImages(img) {
            var slider, img, clicked = 0, w, h;
            /*get the width and height of the img element*/
            w = img.offsetWidth;
            h = img.offsetHeight;
            /*set the width of the img element to 50%:*/
            img.style.width = (w / 2) + "px";
            /*create slider:*/
            slider = document.createElement("DIV");
            slider.setAttribute("class", "img-comp-slider");
            /*insert slider*/
            img.parentElement.insertBefore(slider, img);
            /*position the slider in the middle:*/
            slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
            slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
            /*execute a function when the mouse button is pressed:*/
            slider.addEventListener("mousedown", slideReady);
            /*and another function when the mouse button is released:*/
            window.addEventListener("mouseup", slideFinish);
            /*or touched (for touch screens:*/
            slider.addEventListener("touchstart", slideReady);
            /*and released (for touch screens:*/
            window.addEventListener("touchend", slideFinish);
            function slideReady(e) {
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*the slider is now clicked and ready to move:*/
                clicked = 1;
                /*execute a function when the slider is moved:*/
                window.addEventListener("mousemove", slideMove);
                window.addEventListener("touchmove", slideMove);
            }
            function slideFinish() {
                /*the slider is no longer clicked:*/
                clicked = 0;
            }
            function slideMove(e) {
                var pos;
                /*if the slider is no longer clicked, exit this function:*/
                if (clicked == 0) return false;
                /*get the cursor's x position:*/
                pos = getCursorPos(e)
                /*prevent the slider from being positioned outside the image:*/
                if (pos < 0) pos = 0;
                if (pos > w) pos = w;
                /*execute a function that will resize the overlay image according to the cursor:*/
                slide(pos);
            }
            function getCursorPos(e) {
                var a, x = 0;
                e = (e.changedTouches) ? e.changedTouches[0] : e;
                /*get the x positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x coordinate, relative to the image:*/
                x = e.pageX - a.left;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                return x;
            }
            function slide(x) {
                /*resize the image:*/
                img.style.width = x + "px";
                /*position the slider:*/
                slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
            }
        }
    }
</script>
<!--====== portfolio PART ENDS ======-->

<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center pb-20">
                    <h3 class="title contact-header-title">Je suis disponible pour un travail indépendant.</h3>
                    <p class="text">Écrivez-moi si vous avez envie de discuter.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <h4 class="contact-title">L’identité visuelle d’une société fait partie intégrante
                        de la stratégie de communication. Véritable carte d’identité
                        graphique, elle véhicule l’image de votre entreprise.</h4>
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
                    <!-- Start counter -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="fact-count">
                                <h3><span class="counter">41</span></h3>
                                <p>Logos</p>
                            </div>
                        </div>
                    </div>
                    <!-- End counter -->
                    <!-- Start counter -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="fact-count">
                                <h3><span class="counter">123</span></h3>
                                <p>Carte de visite</p>
                            </div>
                        </div>
                    </div>
                    <!-- End counter -->
                    <!-- Start counter -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.8s">
                            <div class="fact-count">
                                <h3><span class="counter">395</span></h3>
                                <p>Affiches</p>
                            </div>
                        </div>
                    </div>
                    <!-- End counter -->
                    <!-- Start counter -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="fact-count">
                                <h3><span class="counter">68</span></h3>
                                <p>Brochures</p>
                            </div>
                        </div>
                    </div>
                    <!-- End counter -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
<!--====== CONTACT TWO PART START ======-->