    <footer id="footer" class="footer" style="margin-bottom: 0px;margin-top: 0px">
            <div class="container">
                <div class="row">
                <!---Social buttons-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-single">
                            <img src="images/royalty logo-02.png" alt="royaltylogoflat" style="margin-bottom: 15px">
                            <p>Connect with us on social media!</p>
                            <div class="social" style="margin-top: 0px">
                                <a href="https://www.facebook.com/RoyaltyBD/"><i class="fa fa-facebook"></i></a>                         
                                <a href="https://www.instagram.com/royaltybd/"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCKFicIPvXBA-_a04LNsurhA"><i class="fa fa-youtube"></i></a>
                                <a href="https://twitter.com/RoyaltyBD"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>                        
                            </div>
                        </div>
                    </div>

                <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-single">
                            <h6  style="margin-bottom: 10px">Company</h6>
                            <ul>
                                <li><a href="about">About Us</a></li>
                                <li><a href="contact">Contact Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-single" style="margin-top: 0px">
                            <h6  style="margin-bottom: 10px">Partner with Royalty</h6>
                            <ul>
                                <li><a href="partners" target="_blank">Partner Page</a></li>
                                <li><a href="partnerjoin" target="_blank">Partner Join</a></li>
                                <li><a href="partnerjoin/partnerpage.php">Partner benefits</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-single">
                            <h6 style="margin-bottom: 10px">Categories</h6>
                            <ul>
                                <li><a href="offerspage.php">Food & Drinks</a></li>
                                <li><a href="offerspage.php">Beauty & Spa</a></li>
                                <li><a href="offerspage.php">Health & Fitness</a></li>
                                <li><a href="offerspage.php">Lifestyle</a></li>
                                <li><a href="offerspage.php">Getaways</a></li>
                                <li><a href="offerspage.php">Entertainment</a></li>
                            </ul>
                        </div>
                    </div>
                                                    
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-single">
                            <h6  style="margin-bottom: 10px">More</h6>
                            <ul>
                                <li><a href="contact">Customer Support</a></li>
                                <li><a href="faqs">FAQs</a></li>
                                <li><a href="privacypolicy">Privacy Policy</a></li>
                                <li><a href="terms&conditions">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div> 
            </div>
            
        </footer>
            <div class="row" style="background-color: #0e1830;width: 100%;height: 130px; margin: 0px">
                <div class="col-md-12">
                    <p class="copyright text-center" style="margin: 50px auto">
                        Copyright © 2017 <a href="www.google.com">Alpha Vault Tech</a>. All rights reserved. Designed & developed by <a href="#">Alpha Vault Bangladesh.</a>
                    </p>
                </div>
            </div>
        </center>
        
        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>
<!-- Modal -->

        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        <!-- jquery for filter -->
        <script src="js/chosen.jquery.js" ></script>
        <script src="js/prism.js"></script>
        <script src="js/init.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/kinetic.js"></script>
        <script type="text/javascript" src="js/jquery.final-countdown.js"></script>
        <script src="js/restaurant cat page.js" ></script>
        <!-- Custom Functions -->
        <script src="js/custom.js"></script>

        <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript">
            $(function() {
            
                $('#da-slider').cslider();
                
            });
        </script>
        
        
<script>

$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
</script>


</body>
</html>
