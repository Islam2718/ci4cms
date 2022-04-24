<!--== Page Content Wrapper Start ==-->
<div class="main-content mb-60">
    <div class="container container-xxl">
        <div class="row">
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fas fa-chart-line"></i>
                                    Customer Profile</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                <!--<a href="#address" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>-->

                                <!--<a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>-->
                                
                                <!--<a href="<?= base_url('customer-profile'); ?>"><i class="fa fa-user"></i> Customer Profile</a>-->

                                <a href="<?= base_url('customer-logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 mt-5 mt-lg-0">
                            <div class="tab-content" id="myaccountContent">
                                <!--<div class="tab-pane fade show active" id="dashboad" role="tabpanel">-->
<!--== Page Content Wrapper Start ==-->

                        <!-- My Account Tab Content Start -->
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

                        <!-- My Account Tab Content End -->
<!--== Page Content Wrapper End ==-->                               

                                <!--</div>-->
                                
                                <!-- Single Tab Content Start -->
                                <!--<div class="tab-pane fade show active" id="dashboad" role="tabpanel">-->
                                <!--    <div class="myaccount-content">-->
                                <!--        <h3>Dashboard</h3>-->

                                <!--        <div class="welcome">-->
                                <!--            <p>Hello, <strong><?= $userArray['username']; ?></strong> (If Not <strong><?= $userArray['username']; ?> !</strong><a-->
                                <!--                    href="<?= base_url('customer-logout'); ?>" class="logout"> Logout</a>)</p>-->
                                <!--        </div>-->

                                <!--        <p class="mb-0">From your account dashboard. you can easily check & view your-->
                                <!--            recent orders, manage your shipping and billing addresses and edit your-->
                                <!--            password and account details.</p>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <?php if($orderArray){ ?>
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php $i=0; foreach($orderArray as $orderData){ $i++; ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $orderData['created_at']; ?></td>
                                                    <td>
                                                    <?php 
                                                        $status = $orderData['order_status']; 
                                                        if($status==0){ echo 'Placed'; }elseif($status==1){ echo 'Approved'; }elseif($status=2){ echo 'Delivered'; }else{ echo 'Canceled'; }
                                                    ?>                                                        
                                                    </td>
                                                    <td><?= ($orderData['total']+$orderData['delivery_cost']); ?></td>
                                                    <td><a href="<?= base_url('customer-order-details/'.$orderData['id']); ?>" class="btn-add-to-cart">View</a></td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                               

                                <!-- Single Tab Content Start -->
                                <!--<div class="tab-pane fade" id="address" role="tabpanel">-->
                                <!--    <div class="myaccount-content">-->
                                <!--        <h3>Billing Address</h3>-->

                                <!--        <address>-->
                                <!--            <p><strong><?= $userArray['username']; ?></strong></p>-->
                                <!--            <p><?= $userArray['address']; ?></p>-->
                                <!--            <p>Mobile: <?= $userArray['phone']; ?></p>-->
                                <!--            <p>E-Mail: <?= $userArray['email']; ?></p>-->
                                <!--        </address>-->

                                <!--        <a href="#" class="btn-add-to-cart d-inline-block" data-toggle="modal" data-target="#cusAddPops"><i class="fa fa-edit"></i>-->
                                <!--            Edit Address</a>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <!--<div class="tab-pane fade" id="account-info" role="tabpanel">-->
                                <!--    <div class="myaccount-content">-->
                                <!--        <h3>Account Details</h3>-->

                                <!--        <div class="account-details-form">-->
                                <!--            <form action="<?= base_url('customer-profile'); ?>" method="POST">-->
                                <!--                <div class="row">-->
                                <!--                    <div class="col-lg-6">-->
                                <!--                        <div class="single-input-item">-->
                                <!--                            <label for="first-name" class="required">First Name</label>-->
                                <!--                            <input name="firstname" type="text" id="first-name" placeholder="First Name" value="<?= $userArray['firstname']; ?>" />-->
                                <!--                        </div>-->
                                <!--                    </div>-->

                                <!--                    <div class="col-lg-6">-->
                                <!--                        <div class="single-input-item">-->
                                <!--                            <label for="last-name" class="required">Last Name</label>-->
                                <!--                            <input name="lastname" type="text" id="last-name" placeholder="Last Name" value="<?= $userArray['lastname']; ?>" />-->
                                <!--                        </div>-->
                                <!--                    </div>-->
                                <!--                </div>-->

                                <!--                <div class="single-input-item">-->
                                <!--                    <label for="display-name" class="required">Display Name</label>-->
                                <!--                    <input name="username" type="text" id="display-name" placeholder="Display Name" value="<?= $userArray['username']; ?>" />-->
                                <!--                </div>-->

                                <!--                <div class="single-input-item">-->
                                <!--                    <label for="email" class="required">Email Addres</label>-->
                                <!--                    <input name="email" type="email" id="email" placeholder="Email Address" value="<?= $userArray['email']; ?>" />-->
                                <!--                </div>-->

                                <!--                <div class="single-input-item">-->
                                <!--                    <label for="phone" class="required">Phone</label>-->
                                <!--                    <input name="phone" type="text" id="phone" placeholder="Phone..." value="<?= $userArray['phone']; ?>" />-->
                                <!--                </div>-->

                                <!--                <div class="single-input-item">-->
                                <!--                    <button type="submit" class="btn-login btn-add-to-cart">Save Changes</button> &nbsp; -->
                                <!--                    <a href="#" class="btn-login btn-add-to-cart" data-toggle="modal" data-target="#cngPass">Change Password</a>-->
                                <!--                </div>-->
                                <!--            </form>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
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

<!-- Modal -->
<!--<div class="modal fade" id="cusAddPops" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:150%">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--    <form action="<?= base_url('customer-dashboard'); ?>" method="POST">-->
<!--      <div class="modal-header">-->
<!--        <h2 class="modal-title" id="exampleModalLabel" style="font-family: arial; padding:2%; font-size:24px;">Billing Address</h2>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--          <div class="form-group">-->
<!--            <textarea name="address" class="form-control" id="cus_address" rows="3" style="font-size:16px;"><?= $userArray['address']; ?></textarea>-->
<!--          </div>-->
<!--      </div>-->
<!--      <div class="modal-footer" >-->
<!--        <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button type="submit" class="btn btn-lg btn-primary">Save changes</button>-->
<!--      </div>-->
<!--    </form>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!-- Modal -->
<!--<div class="modal fade" id="cngPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--    <form action="<?= base_url('customer-change-password'); ?>" method="POST">-->
<!--      <div class="modal-header">-->
<!--        <h2 class="modal-title" id="exampleModalLabel" style="font-family: arial; font-size:20px;">Change Password</h2>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        <div class="single-input-item">-->
<!--            <label for="current-pwd" class="required">Current Password</label>-->
<!--            <input name="current_password" type="password" id="current-pwd" placeholder="Current Password" />-->
<!--        </div>-->

<!--        <div class="row">-->
<!--            <div class="col-lg-6">-->
<!--                <div class="single-input-item">-->
<!--                    <label for="new-pwd" class="required">New Password</label>-->
<!--                    <input name="password" type="password" id="new-pwd" placeholder="New Password"/>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-6">-->
<!--                <div class="single-input-item">-->
<!--                    <label for="confirm-pwd" class="required">Confirm Password</label>-->
<!--                    <input name="c_password" type="password" id="confirm-pwd" placeholder="Confirm Password"/>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="modal-footer" >-->
<!--        <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button type="submit" class="btn btn-lg btn-primary">Save changes</button>-->
<!--      </div>-->
<!--    </form>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->