<!--== Page Content Wrapper Start ==-->
<div class="main-content mb-60">
    <div class="container container-xxl">
        <div class="row">
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 mt-5 mt-lg-0 mx-auto">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>
                                        	Profile 
                                        	<a href="<?= base_url('customer-dashboard'); ?>" class="btn btn-lg">Back To Dashboard</a>
                                        </h3>
                                        <div class="account-details-form">
                                            <form action="<?= base_url('customer-profile'); ?>" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">First Name</label>
                                                            <input name="firstname" type="text" id="first-name" placeholder="First Name" value="<?= $userArray['firstname']; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Last Name</label>
                                                            <input name="lastname" type="text" id="last-name" placeholder="Last Name" value="<?= $userArray['lastname']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Display Name</label>
                                                    <input name="username" type="text" id="display-name" placeholder="Display Name" value="<?= $userArray['username']; ?>" />
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="email" class="required">Email Addres</label>
                                                    <input name="email" type="email" id="email" placeholder="Email Address" value="<?= $userArray['email']; ?>" />
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="phone" class="required">Phone</label>
                                                    <input name="phone" type="text" id="phone" placeholder="Phone..." value="<?= $userArray['phone']; ?>" />
                                                </div>

                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item">
                                                        <label for="current-pwd" class="required">Current Password</label>
                                                        <input name="current_password" type="password" id="current-pwd" placeholder="Current Password" />
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="new-pwd" class="required">New Password</label>
                                                                <input name="password" type="password" id="new-pwd" placeholder="New Password"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                <input name="c_password" type="password" id="confirm-pwd" placeholder="Confirm Password"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <div class="single-input-item">
                                                    <button type="submit" class="btn-login btn-add-to-cart">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>
                </div>
                <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->
<hr>