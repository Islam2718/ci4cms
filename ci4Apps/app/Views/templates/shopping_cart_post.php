<form action="<?= base_url('customer-checkout'); ?>" method="POST">
    <!--== Page Content Wrapper Start ==-->
    <section class="main-content mb-60">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-lg-12" style="display: none;">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-size">Size</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="big-cart">
                                <!-- <tr>
                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product-1x1/p_sq_1.jpg"
                                                                       alt="Product"/></a></td>
                            <td class="pro-title"><a href="#">ELLA DRESS</a></td>
                            <td class="pro-size">XS</td>
                            <td class="pro-price tk-part"><span class="tk-sign">2,347</span></td>
                            <td class="pro-quantity">
                                <div class="product-count">
                                    <form action="#" class="display-flex">
                                        <div class="qtyminus">-</div>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <div class="qtyplus">+</div>
                                    </form>
                                </div>
                            </td>
                            <td class="pro-subtotal tk-part"><span class="tk-sign">2,950</span></td>
                            <td class="pro-remove"><a href="#"><i class="fas fa-trash"></i></a></td>
                        </tr> -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Checkout Billing Details -->
            <!--<div class="row">-->
            <!--    <div class="col-md-9 mx-auto">-->
            <!--        <div class="alert alert-success" role="alert">-->
            <!--            Congratulations! Your order has been placed successfully.-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="checkout-billing-details-wrap">
                        <h2>Billing Details</h2>
                        <div class="billing-form-wrap">
                            <form action="#">
                                <div class="single-input-item">
                                    <label for="name" class="required">Name</label>
                                    <input name="username" type="text" id="name" required value="<?= session('username'); ?>"/>
                                </div>
                                <div class="single-input-item">
                                    <label for="address" class="required">Address</label>
                                    <input name="address" type="text" id="address" placeholder="House number and street name" required value="<?= session('address'); ?>"/>
                                </div>
                                <div class="single-input-item">
                                    <label for="district" class="required">District</label>
                                    <select name="charge" id="district" required>
                                        <option value="">-- Select District --</option>
                                        <?php foreach($chargeArray as $chargeData){ ?> 
                                        <option value="<?= $chargeData['charge']; ?>"><?= $chargeData['district']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="single-input-item">
                                    <label for="phone" class="required">Phone No</label>
                                    <input name="phone" type="text" id="phone" value="<?= session('phone'); ?>"/>
                                </div>

                                <div class="single-input-item">
                                    <label for="email">Email Address (Optional)</label>
                                    <input name="email" type="email" id="email" value="<?= session('email'); ?>"/>
                                </div>

                                <div class="single-input-item">
                                    <label for="ordernote">Order Note (Optional)</label>
                                    <textarea name="notes" id="ordernote" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Order Summary Details -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper  oreders">
                        <h2>Your Order</h2>
                        <div class="cart-calculate-items">
                            <div class="table-responsive">
                                <table class="table table-bordered font-weight-bold">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="tk-part">
                                            <span class="tk-sign total-price"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td class="tk-part">
                                            <span class="tk-sign shipping-charge" id="shipping-charge">0</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="tk-part">
                                            <span class="tk-sign font-weight-bold" id="final-price">0</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--<div class="coupon-code">-->
                        <!--    <label for="phone" class="required">Have a coupon? enter your code</label>-->
                        <!--    <div class="coupon-inner text-center">-->
                        <!--        <input type="text" id="coupon" />-->
                        <!--        <button class="btn" type="submit">Apply Coupon</button>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="single-payment-method show">
                            <div class="payment-method-name">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="cashon" name="order_type" value="cash" class="custom-control-input" checked />
                                    <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                </div>
                            </div>
                            <div class="payment-method-details" data-method="cash">
                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </div>

                        <div class="summary-footer-area">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="terms" required />
                                <label class="custom-control-label" for="terms">I have read and agree to the website
                                    <a href="#" class="text-success">terms and conditions.</a>
                                </label>
                            </div>
                            <br/>
                            <?php if(session('id')){?>
                            <button type="submit" class="btn-submit w-100">Place Order</button>
                            <?php }else{ ?>
                            <a href="<?= base_url('customer-order-confirmation/'.$proData['id']); ?>" class="btn-submit w-100" data-toggle="modal" data-target="#loginAttack">Place Order</a>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!--== Checkout Page Content End ==-->
        </div>
    </section>
</form>
    <!--== Page Content Wrapper End ==-->
    <hr>


<!-- Modal -->
<div class="modal fade" id="loginAttack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="login-reg-form-wrap">
    <form action="<?= base_url('shopping-cart-post'); ?>" method="POST">
        <div class="single-input-item">
            <input name="email" type="email" placeholder="Email" required="">
        </div>

        <div class="single-input-item">
            <input name="password" type="password" placeholder="Password" required="">
        </div>

        <div class="single-input-item">
            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                <div class="remember-meta">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberMe">
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

    <div class="or"></div>
    
    <button class="login-with-fb fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false">
        <span class="icon"><i class="fab fa-facebook-f"></i></span> Login with facebook
    </button>
    

    <button href="#" class="login-with-google" id="my-signin2">
        <span class="icon"><i class="fab fa-google-plus-g"></i></span>
        Login with google
    </button>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



