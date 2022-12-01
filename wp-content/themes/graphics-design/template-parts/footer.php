<!--====== FOOTER FOUR PART START ======-->
<footer id="footer" class="footer-area">
    <?php wp_footer(); ?>
    <div class="footer-widget">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">A propos</h6>
                        <p> Plus de 6 ans d’expérience en agence et en freelance m’ont permis d’acquérir
                            la créativité et la méthodologie nécessaires au bon déroulement d’un projet. Directeur
                            artistique et graphiste spécialisée dans la création d’identité visuelle, j’assure la
                            conception, la création et la réalisation de vos projets graphiques. Je mets en forme votre
                            message grâce à un éventail de compétences dans la conception de supports de communication.
                        </p>
                        <div class="realisation">
                            Mes réalisations
                        </div>
                        <div class="social-network">
                            <span><a href="https://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri().'/assets/images/linkedin-logo.png' ?>" alt=""></a></span>
                            <span><a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri().'/assets/images/facebook-logo.png' ?>" alt=""></a></span>
                        </div>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">Contact</h6>
                        <ul>
                            <li><a href="#"><i class="lni-facebook-filled"></i> Alexandre M.</a></li>
                            <li><a href="#"><i class="lni lni-display"></i> Studio de création visuel</a></li>
                            <li><a href="#"><i class="lni lni-phone"></i> +261 34 06 760 38</a></li>
                            <li><a href="#"><i class="lni lni-envelope"></i> zooomcanonn@gmail.com</a></li>
                            <li><a href="#"><i class="lni lni-world"></i> www.graphicdesign.com</a></li>
                            <li><a href="#"><i class="lni lni-skype"></i> Graphics</a></li>
                        </ul>
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
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                    </ul>
                </div>-->
            </div>
        </div>
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
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: true,
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
        });
        $(document).ready(function () {
            $('.miseenpages').slick();
        });

        $('.modal').on('shown.bs.modal', function (e) {
            $('.miseenpages').slick('setPosition');
            $('.wrap-modal-slider').addClass('open');
        })
    })
</script>
</body>

</html>

