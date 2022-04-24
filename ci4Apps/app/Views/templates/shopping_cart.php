<!--=================cart part start =============-->
    <section class="main-content mb-60">
        <div class="container container-xxl">
            <h3 class="pb-3">Shopping Cart</h3>
            <!-- Cart Page Content Start -->
            <div class="row">
                <div class="col-lg-12">
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
                            <tbody id="big-cart"><!--cart items are here..--></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-lg-6 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <h3>Cart Totals</h3>
                        <div class="cart-calculate-items">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="tk-part"><span class="tk-sign font-weight-bold total-price">230</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart Page Content End -->

            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="continue-shop">
                        <a href="<?= base_url('products/all'); ?>">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkout-part" class="accordion" id="exampleAccordion">
                        <!--<a href="checkout.html"class="btn-submit">Proceed To Checkout</a>-->
                        <a href="<?= base_url('shopping-cart-post'); ?>" class="btn btn-submit collapsed" style="font-size: 16px;">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
    </section>
    <!--========= Cart part end =============-->
    <hr>


    // <script>
    //     $(document).ready(function () {
    //         // let bigCartItem = `
    //         // <tr>
    //         //     <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product-1x1/p_sq_1.jpg"
    //         //                                                 alt="Product"/></a></td>
    //         //     <td class="pro-title"><a href="#">ELLA DRESS</a></td>
    //         //     <td class="pro-size">XS</td>
    //         //     <td class="pro-price tk-part"><span class="tk-sign">2,347</span></td>
    //         //     <td class="pro-quantity">
    //         //         <div class="product-count">
    //         //             <form action="#" class="display-flex">
    //         //                 <div class="qtyminus">-</div>
    //         //                 <input type="text" name="quantity" value="1" class="qty">
    //         //                 <div class="qtyplus">+</div>
    //         //             </form>
    //         //         </div>
    //         //     </td>
    //         //     <td class="pro-subtotal tk-part"><span class="tk-sign">2,950</span></td>
    //         //     <td class="pro-remove"><a href="#"><i class="fas fa-trash"></i></a></td>
    //         // </tr>`.join("")
    //         renderBigCart('#big-cart', '.total-price');
    //      })
    </script>