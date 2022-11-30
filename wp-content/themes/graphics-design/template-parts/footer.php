<!--====== FOOTER FOUR PART START ======-->
<footer id="footer" class="footer-area">
    <?php wp_footer(); ?>
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">Company</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Profile</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">Solutions</h6>
                        <ul>
                            <li><a href="#">Facilities Services</a></li>
                            <li><a href="#">Workplace Staffing</a></li>
                            <li><a href="#">Project Management</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">Product & Services</h6>
                        <ul>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Developer</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-link">
                        <h6 class="footer-title">Help & Suuport</h6>
                        <ul>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->

    <div class="footer-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="copyright text-center text-lg-left mt-10">

                    </div> <!--  copyright -->
                </div>
                <div class="col-lg-5">
                    <ul class="social text-center text-lg-right mt-10">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
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
            loop:true,
            margin:10,
            dots:false,
            nav:true,
            mouseDrag:false,
            autoplay:false,
            animateOut: 'slideOutUp',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    })
</script>
</body>

</html>

