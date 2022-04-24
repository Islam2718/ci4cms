<!--== Contact start ==-->
<div class="main-content mb-60">
    <div class="container container-xxl">
        <div class="row">
            <!-- Contact Page Content Start -->
            <div class="col-lg-12">
                <!-- Contact Method Start -->
                <div class="contact-method-wrap">
                    <div class="row">
                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-map-marker"></i></span>
                                <div class="method-info">
                                    <h3>Street Address</h3>
                                    <p><?= $siteInfo['address']; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-phone"></i></span>
                                <div class="method-info">
                                    <h3>Phone Number</h3>
                                    <p><?= $siteInfo['phone']; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fas fa-fax"></i></span>
                                <div class="method-info">
                                    <h3>Number Fax</h3>
                                    <p><?= $siteInfo['fax']; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-envelope"></i></span>
                                <div class="method-info">
                                    <h3>Email Address</h3>
                                    <a href="mailto:your@email.here"><?= $siteInfo['email']; ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->
                    </div>
                </div>
                <!-- Contact Method End -->
            </div>
            <!-- Contact Page Content End -->
        </div>

        
        <row>
            <div class="col-lg-9 mx-auto">
                <div class="responsive-map">
                    <iframe src="<?= $siteInfo['map_html']; ?></iframe>
                        </div>
                </div>
            </row>

        <div class="row">
            <!-- Contact Form Start -->
            <div class="col-lg-9 m-auto">
                <div class="contact-form-wrap">
                    <h2>Contact Us</h2>

                    <form id="contact-form" class="default-form" action="<?= base_url('Page/'.$getPageArrayById['id']); ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="first_name" placeholder="First Name *" required/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="last_name" placeholder="Last Name *" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="email" name="email" placeholder="Email Address *" required/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="subject" placeholder="Subject *" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-input-item">
                                    <textarea name="message" id="message" cols="30" rows="6"
                                              placeholder="Message"></textarea>
                                </div>

                                <div class="single-input-item text-center">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" name="submit" class="btn-add-to-cart">Send Meassage</button>
                                </div>

                                <!-- Form Notification -->
                                <div class="form-messege"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Contact Form End -->
        </div>
    </div>
</div>
<!--== Contact end==-->
<hr>