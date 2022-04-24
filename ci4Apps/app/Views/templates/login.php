    <!--=====login registration, forgot password start========-->
    <section class="main-content mb-60">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <!-- Login & Register Content Start -->
                    <div class="login-register-wrapper">
                        <!-- Login & Register tab Menu -->
                        <nav class="nav login-reg-tab-menu">
                            <a class="active" id="login-tab" data-toggle="tab" href="#login">Login</a>
                            <a id="register-tab" data-toggle="tab" href="#register">Register</a>
                            <a id="f-password-tab" data-toggle="tab" href="#f-password">Forgot Password</a>
                        </nav>
                        <!-- Login & Register tab Menu -->

                        <div class="tab-content" id="login-reg-tabcontent">
                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                <div class="login-reg-form-wrap">
                                    <form action="<?= base_url('customer-login'); ?>" method="POST">
                                        <div class="single-input-item">
                                            <input name="email"  type="email" placeholder="Email" required />
                                        </div>

                                        <div class="single-input-item">
                                            <input name="password" type="password" placeholder="Password" required />
                                        </div>

                                        <div class="single-input-item">
                                            <div
                                                class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                <div class="remember-meta">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="rememberMe">
                                                        <label class="custom-control-label" for="rememberMe">Remember
                                                            Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-input-item">
                                            <button type="submit" class="btn-submit">Login</button>
                                        </div>
                                    </form>

                                    <!--<div class="or"></div>-->

                                     <!--<a href="" class="login-with-fb fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="ture">-->
                                     <!--   <span class="icon"><i class="fab fa-facebook-f"></i></span> Login with facebook-->
                                     <!--</a>-->
                                     <!--   <button type="button"  href="#" class="login-with-google g-signin2" data-onsuccess="onSignIn">-->
                                     <!--       <span class="icon"><i class="fab fa-google-plus-g"></i></span>-->
                                     <!--       Login with google-->
                                     <!--    </button>-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="f-password" role="tabpanel">
                                <div class="login-reg-form-wrap">
                                    <form action="<?= base_url('customer-forget-password'); ?>" method="POST">
                                        <p style="font-size: 14px;">WE WILL SEND YOU AN EMAIL TO RESET YOUR PASSWORD.
                                        </p>
                                        <div class="single-input-item">
                                            <input type="email" placeholder="Email" required />
                                        </div>


                                        <div class="single-input-item">
                                            <button type="submit" class="btn-submit">send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="register" role="tabpanel">
                                <div class="login-reg-form-wrap">
                                    <form action="<?= base_url('customer-registration'); ?>" method="POST">

                                        <div class="single-input-item">
                                            <input name="role" type="hidden" placeholder="type" value="CUSTOMER" required />
                                        </div>

                                        <div class="single-input-item">
                                            <input name="username" type="text" placeholder="Full Name" required />
                                        </div>

                                        <div class="single-input-item">
                                            <input name="email" type="email" placeholder="Email" required />
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-input-item">
                                                    <input name="password" type="password" placeholder="Password" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="single-input-item">
                                                    <input name="c_password" type="password" placeholder="Repeat Password"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-input-item">
                                            <div class="login-reg-form-meta">
                                                <div class="remember-meta">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="subnewsletter">
                                                        <label class="custom-control-label"
                                                            for="subnewsletter">Remember Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-input-item">
                                            <button type="submit" class="btn-submit">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login & Register Content End -->
                </div>
            </div>
        </div>
    </section>


    <!--=====login registration, forgot password end========-->
    <hr>