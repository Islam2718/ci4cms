    <!--============================== Newsletter Area ==============================-->
    <section class="vs-newsletter-wrapper bg-dark z-index-step1  ">
        <div class="container ">
            <div class="position-relative">
                <div class="inner-wrapper bg-black position-absolute top-50 start-50 translate-middle w-100 px-60 py-40">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 text-center text-xl-start mb-3 mb-xl-0">
                            <span class="sub-title2 mt-2">Newsletter</span>
                            <h2 class="mb-0 text-white">get monthly updates</h2>
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-6">
                            <form action="#" class="newsletter-style1 d-md-flex">
                                <input type="email" class="form-control" placeholder="Enter email address">
                                <button class="vs-btn gradient-btn">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--==============================  Footer Area ==============================-->
    <footer class="footer-wrapper footer-layout1 bg-fluid bg-major-black position-relative">
        <div class="bg-fluid d-none d-none d-xl-block position-absolute start-0 top-0 w-100 h-100" data-bg-src="<?= base_url(); ?>/zoker/assets/img/bg/footer-bg-1-1.jpg"></div>
        <div class="footer-widget-wrapper  dark-style1 z-index-common">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-3 col-xl-4">
                        <div class="widget footer-widget pt-0">
                            <h3 class="widget_title">About Us</h3>
                            <div class="vs-widget-about">
                                <p class="about-text text-footer1 pe-xl-5"><?= $siteInfo['description']; ?></p>
                                <div class="d-flex gap-2 text-white mt-45">
                                  <?php foreach($socialArray as $socialData){ ?>
                                    <a class="icon-btn1 skew-right" href="<?= $socialData['link_url']; ?>"><?= $socialData['ux_html']; ?></a>
                                  <?php } ?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="widget widget_categories footer-widget   ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <?php foreach ($menuArray as $menuData) { if($menuData['location']=='Menu_Location_02'){ ?> 
                                <li><a href="<?= $menuData['link_url']; ?>"><?= $menuData['title']; ?></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="widget widget_nav_menu footer-widget  ">
                            <h3 class="widget_title">NEED HELP?</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                <?php foreach ($menuArray as $menuData) { if($menuData['location']=='Menu_Location_03'){ ?> 
                                <li><a href="<?= $menuData['link_url']; ?>"><?= $menuData['title']; ?></a></li>
                                <?php } } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget footer-widget  ">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="vs-widget-about">
                                <p class="contact-info"><i class="fal fa-map-marker-alt text-white"></i><?= $siteInfo['address']; ?></p>
                                <p class="contact-info"><i class="fal fa-phone text-white"></i><a href="tel:<?= $siteInfo['phone']; ?>">(<?= $siteInfo['phone']; ?></a></p>
                                <p class="contact-info"><i class="fal fa-envelope text-white"></i><a href="mailto:<?= $siteInfo['email']; ?>"><?= $siteInfo['email']; ?></a></p>
                                <p class="contact-info"><i class="fal fa-globe text-white"></i><a href="<?= base_url(); ?>"><?= $siteInfo['site_url']; ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright bg-black z-index-step1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 align-self-center text-center py-3 py-xl-0">
                        <p class="text-light fw-bold text-bold text-center mb-0">&copy; 2022 <a class="text-white" href="https://islamhossain.info/">A2i Technology</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--******************************** Code End  Here  ******************************** -->
    <!-- Scroll Top Top Button -->
    <a href="#" class="scrollToTop icon-btn3"><i class="far fa-angle-up"></i></a>
    <div class="vs-cursor"></div>
    <div class="vs-cursor2"></div>

    <!--============================== All Js File ============================= -->
    <!-- Jquery -->
    <script src="<?= base_url(); ?>/zoker/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?= base_url(); ?>/zoker/assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>/zoker/assets/js/bootstrap.min.js"></script>
    <!-- Layer Slider including GSAP -->
    <script src="<?= base_url(); ?>/zoker/assets/js/layerslider.utils.js"></script>
    <script src="<?= base_url(); ?>/zoker/assets/js/layerslider.transitions.js"></script>
    <script src="<?= base_url(); ?>/zoker/assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Magnific Popup -->
    <script src="<?= base_url(); ?>/zoker/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotop -->
    <script src="<?= base_url(); ?>/zoker/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/zoker/assets/js/isotope.pkgd.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?= base_url(); ?>/zoker/assets/js/jquery-ui.min.js"></script>
    <!-- Custom Carousel -->
    <script src="<?= base_url(); ?>/zoker/assets/js/vscustom-carousel.min.js"></script>
    <!-- Mouse Cursor -->
    <script src="<?= base_url(); ?>/zoker/assets/js/vs-cursor.min.js"></script>
    <!-- Mobile Menu -->
    <script src="<?= base_url(); ?>/zoker/assets/js/vsmenu.min.js"></script>
    <!-- Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
    <script src="<?= base_url(); ?>/zoker/assets/js/map.js"></script>
    <!-- Form Js -->
    <script src="<?= base_url(); ?>/zoker/assets/js/ajax-mail.js"></script>
    <!-- Main Js File -->
    <script src="<?= base_url(); ?>/zoker/assets/js/main.js"></script>

</body>
</html>