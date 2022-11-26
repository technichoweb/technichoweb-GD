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
    <div id="home" class="slider-area">
        <div class="bd-example">
            <div id="carouselOne" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselOne" data-slide-to="1"></li>
                    <li data-target="#carouselOne" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item bg_cover active"
                         style="background-image: url(assets/images/slider-1.jpg)">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title">Refreshing Design & Easy to Customize</h2>
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- container -->
                        </div> <!-- carousel caption -->
                    </div> <!-- carousel-item -->

                    <div class="carousel-item bg_cover" style="background-image: url(assets/images/slider-2.jpg)">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title">Based on Latest Bootstrap & HTML5</h2>
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- container -->
                        </div> <!-- carousel caption -->
                    </div> <!-- carousel-item -->

                    <div class="carousel-item bg_cover" style="background-image: url(assets/images/slider-3.jpg)">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title">Multi-purpose Landing Page Template</h2>
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- container -->
                        </div> <!-- carousel caption -->
                    </div> <!-- carousel-item -->
                </div> <!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                    <i class="lni-arrow-left-circle"></i>
                </a>
                <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                    <i class="lni-arrow-right-circle"></i>
                </a>
            </div> <!-- carousel -->
        </div> <!-- bd-example -->
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
            <div class="col-lg-4 col-sm-6 branding-3 planning-3">
                <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio-1.png" alt="">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup" href="assets/images/portfolio-1.png"><i
                                                class="lni-zoom-in"></i></a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="#"><i class="lni-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                        <p class="text">Short description for the ones who look for something new. Awesome!</p>
                    </div>
                </div> <!-- single portfolio -->
            </div>
            <div class="col-lg-4 col-sm-6 marketing-3 research-3">
                <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio-2.png" alt="">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup" href="assets/images/portfolio-2.png"><i
                                                class="lni-zoom-in"></i></a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="#"><i class="lni-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                        <p class="text">Short description for the ones who look for something new. Awesome!</p>
                    </div>
                </div> <!-- single portfolio -->
            </div>
            <div class="col-lg-4 col-sm-6 branding-3 marketing-3">
                <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio-3.png" alt="">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup" href="assets/images/portfolio-3.png"><i
                                                class="lni-zoom-in"></i></a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="#"><i class="lni-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                        <p class="text">Short description for the ones who look for something new. Awesome!</p>
                    </div>
                </div> <!-- single portfolio -->
            </div>
            <div class="col-lg-4 col-sm-6 planning-3 research-3">
                <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio-4.png" alt="">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup" href="assets/images/portfolio-4.png"><i
                                                class="lni-zoom-in"></i></a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="#"><i class="lni-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                        <p class="text">Short description for the ones who look for something new. Awesome!</p>
                    </div>
                </div> <!-- single portfolio -->
            </div>
            <div class="col-lg-4 col-sm-6 marketing-3">
                <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio-5.png" alt="">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup" href="assets/images/portfolio-5.png"><i
                                                class="lni-zoom-in"></i></a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="#"><i class="lni-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                        <p class="text">Short description for the ones who look for something new. Awesome!</p>
                    </div>
                </div> <!-- single portfolio -->
            </div>
            <div class="col-lg-4 col-sm-6 planning-3">
                <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                    <div class="portfolio-image">
                        <img src="assets/images/portfolio-6.png" alt="">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a class="image-popup" href="assets/images/portfolio-6.png"><i
                                                class="lni-zoom-in"></i></a>
                                </div>
                                <div class="portfolio-icon">
                                    <a href="#"><i class="lni-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                        <p class="text">Short description for the ones who look for something new. Awesome!</p>
                    </div>
                </div> <!-- single portfolio -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
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