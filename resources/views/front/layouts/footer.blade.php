<section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-3">
                <div class="row footer-top-29">
                    <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Our Info</h6>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="blog.html"> Blog Posts</a></li>
                            <li><a href="services.html">Services</a></li>
                           
                            <li><a href="about.html">Team</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
                        <h6 class="footer-title-29">Quick Link</h6>
                        <ul>
                            <li><a href="#syn">Symptoms</a></li>
                        
                            <li><a href="#vention">Prevention</a></li>
                            <li><a href="#protect">Protect Youself</a></li>
                            <li><a href="#our">Our Doctors</a></li>
                            <li><a href="#pack">About Corona</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
                        <h6 class="footer-title-29">Helpfull link</h6>
                        <ul>
                            <li><a href="#terms">Terms of service</a></li>
                            <li><a href="#privacy"> Privacy policy</a></li>
                            <li><a href="#doc"> Documentation</a></li>
                            <li><a href="#support"> Support</a></li>
                            <li><a href="#changelog"> Changelog</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
                        <div class="footer-logo mb-3">
                            <h2>
                                <a class="navbar-brand" href="index.html">
                                    K<i class="fab fa-keycdn"></i>vid</a>
                            </h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur ipsum elit.</p>

                        <div class="cont-details">
                            <div class="cont-top margin-up">
                              <div class="cont-left text-center">
                                <span class="fas fa-map-marked-alt"></span>
                              </div>
                              <div class="cont-right">
                                <p> covid 2022 update</p>
                              </div>
                            </div>
                            <div class="cont-top margin-up">
                              <div class="cont-left text-center">
                                <span class="fas fa-blender-phone"></span>
                              </div>
                              <div class="cont-right">
                                <p><a href="tel:+(21) 255 999 8888">9862381737</a></p>
                              </div>
                            </div>
                            <div class="cont-top margin-up">
                              <div class="cont-left text-center">
                                <span class="fas fa-envelope-open-text"></span>
                              </div>
                              <div class="cont-right">
                                <p><a href="mailto:example@mail.com" class="mail">
                                    bhandariramesh942@gmail.com</a></p>
                              </div>
                            </div>
                          </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->
    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2021 Kovid. All rights reserved.Design by<a
                        href="https://w3layouts.com/" target="_blank">
                        NCT</a></p>
                  <div class="col-lg-4 main-social-footer-29">
                    <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                    <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                    <a href="#pinterest"><span class="fab fa-pinterest-p"></span></a>
                    <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                 
                  </div>
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <i class="fas fa-level-up-alt"></i>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->
    <!--//footer-->
    <!-- Template JavaScript -->
    <script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('front/js/theme-change.js')}}"></script>
    
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

</body>

</html>