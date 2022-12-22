<!--====== FOOTER FOUR PART START ======-->
<footer id="footer" class="footer-area">
    <?php wp_footer(); ?>
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="footer-link">
                        <?php if (get_option('tw_about') != "" and $textAbout = get_option('tw_about')): ?>
                        <h6 class="footer-title">A propos</h6>
                        <p>
                            <?= $textAbout; ?>
                        </p>
                        <?php endif; ?>
                        <div class="realisation">
                            Mes pages
                        </div>
                        <div class="social-network">
                            <span><a target="_blank" href="<?php echo get_option('tw_facebook_url'); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/linkedin-logo.png' ?>" alt=""></a></span>
                            <span><a target="_blank" href="<?php echo get_option('tw_linkedin_url'); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/facebook-logo.png' ?>" alt=""></a></span>
                        </div>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">Contact</h6>
                        <ul>
                            <?php if (get_option('tw_facebook_url') !== "" && $websiteUrl = get_option('tw_facebook_url')): ?>
                                <li><a target="_blank" href="<?php echo get_option('tw_facebook_url') ?>"><i
                                                class="lni lni-facebook-filled"></i> Alexandre M.</a>
                                </li>
                            <?php endif; ?>
                            <li><a target="_blank" href="#"><i class="lni lni-display"></i> Studio de création visuel</a></li>
                            <?php if (get_option('tw_phone') !== "" && $phoneNumber = get_option('tw_phone')): ?>
                                <li><a target="_blank" href="<?= $phoneNumber ?>"><i class="lni lni-phone"></i>
                                        <?php echo get_option('tw_phone') ?></a></li>
                            <?php endif; ?>
                            <?php if (get_option('tw_email') !== "" && $emailAddress = get_option('tw_email')): ?>
                                <li><a target="_blank" href="<?php echo get_option('tw_email') ?>"><i
                                                class="lni lni-envelope"></i> <?php echo get_option('tw_email') ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (get_option('tw_website') !== "" && $websiteUrl = get_option('tw_website')): ?>
                                <li><a target="_blank" href="<?php echo get_option('tw_website') ?>"><i
                                                class="lni lni-world"></i> <?php echo get_option('tw_website') ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (get_option('tw_skype_url') !== "" && $websiteUrl = get_option('tw_skype_url')): ?>
                                <li><a target="_blank" href="<?php echo get_option('tw_skype_url') ?>"><i
                                                class="lni lni-skype"></i> <?php echo get_option('tw_skype_url') ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">Galeries</h6>
                        <div class="row">
                            <div class="col ">
                                <a class="zoom go-to-portfolio" href="#">

                                <img class="img-thumbnail img-gallery-blur"
                                     src="<?php echo get_template_directory_uri() . '/assets/images/Graphic-12' ?>"
                                     alt=""></a>
                            </div>
                            <div class="col ">
                                <a class="zoom go-to-portfolio" href="#">
                                    <img class="img-thumbnail img-gallery-blur"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/Graphic-3.jpg' ?>"
                                         alt=""></a>
                            </div>
                            <div class="w-100"></div>
                            <div class="col ">
                                <a class="zoom go-to-portfolio" href="#">
                                    <img class="img-thumbnail img-gallery-blur"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/Graphic-dids.jpg' ?>"
                                         alt=""></a>
                            </div>
                            <div class="col ">
                                <a class="zoom go-to-portfolio" href="#">
                                    <img class="img-thumbnail img-gallery-blur"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/Graphic-10' ?>"
                                         alt=""></a>
                            </div>
                        </div>
                    </div> <!-- footer link -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->

    <div class="footer-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright text-center mt-10">
                        <p class="text">&copy; Alexandre M. 2022</p>
                    </div>
                </div>
              <!--  <div class="col-lg-5">
                    <ul class="social text-center text-lg-right mt-10">
                        <li><a target="_blank" href="https://facebook.com/uideckHQ"><i class="lni-facebook-filled"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/uideckHQ"><i class="lni-twitter-original"></i></a></li>
                        <li><a target="_blank" href="https://instagram.com/uideckHQ"><i class="lni-instagram-original"></i></a></li>
                        <li><a target="_blank" href="#"><i class="lni-linkedin-original"></i></a></li>
                    </ul>
                </div>-->
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="statusBar"></div>
    </div>
</footer>

<div class="main__bg"></div>
<div class="main__bg layer1"></div>
<div class="main__bg layer2"></div>
<!--====== FOOTER FOUR PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->
<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
<!--====== BACK TOP TOP PART ENDS ======-->
<script>
    jQuery(document).ready(function ($) {
        /*$('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: false,
            mouseDrag: false,
            autoplay: false,
            animateOut: 'slideOutUp',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });*/
        $(document).ready(function () {
            $('.miseenpages').slick({
                speed: 1500,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>'
            });
        });

        $('.modal').on('shown.bs.modal', function (e) {
            $('.miseenpages').slick('setPosition');
            $('.wrap-modal-slider').addClass('open');
        })
    })
</script>
</body>

</html>

