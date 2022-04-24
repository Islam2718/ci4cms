<!--=============product list start=====-->
    <section class="pt-5">
        <div class="container container-xxl">
            <div class="row">
                <?php foreach($productArray as $proData){ ?>
                <div class="col-6 col-lg-3 col-md-3 mb-5 px-2">
                    <div class="product-part" data-product-id="100">
                        <div class="product-top">
                            <div class="product-img">
                                <img src="<?= base_url('/uploads/'.$proData['thumb']); ?>" class="img-fluid" alt="img not found">
                            </div>
                            <div class="product-choose">
                                <div class="quick-option">
                                    <fieldset>
                                        <span>Select Size</span>

                                        <ul class="option-list">
                                            <li>
                                                <input type="radio" name="size100" id="dress3XS" value="XS">
                                                <label for="dress3XS">XS</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size100" id="dress3S" value="S">
                                                <label for="dress3S">S</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size100" id="dress3M" value="M">
                                                <label for="dress3M">M</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size100" id="dress3L" value="L">
                                                <label for="dress3L">L</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size100" id="dress3XL" value="XL">
                                                <label for="dress3XL">XL</label>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </div>

                                <button type="button" class="submit-btn add-to-cart" data-loading-text="Please wait...">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                        <div class="product-bottom">
                            <a href="product_details.html" class="product-d-link">
                                <div class="product-name">
                                    <?= $proData['title']; ?>
                                </div>
                                <div class="product-color">
                                    <?= $proData['product_color']; ?>
                                </div>
                                <div class="product-price" data-selling-price="<?php if($proData['offer_price']){ echo $proData['offer_price']; }else{ echo $proData['sell_price']; } ?>">
                                    <div class="regular-price">BDT <span class="line-through ml-2"><?= $proData['sell_price']; ?></span></div>
                                    <div class="discount-price"><?php if($proData['offer_price']){ echo $proData['offer_price']; }else{ echo $proData['sell_price']; } ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>

<!-- 
                <div class="col-6 col-lg-3 col-md-3 mb-5 px-2">
                    <div class="product-part" data-product-id="101">
                        <div class="product-top">
                            <div class="product-img">
                                <img src="assets/img/product-1x1/p_sq_2.jpg" class="img-fluid" alt="img not found">
                            </div>
                            <div class="product-choose">
                                <div class="quick-option">
                                    <fieldset>
                                        <span>Select Size</span>

                                        <ul class="option-list">
                                            <li>
                                                <input type="radio" name="size101" id="dress4XS" value="XS">
                                                <label for="dress4XS">XS</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size101" id="dress4S" value="S">
                                                <label for="dress4S">S</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size101" id="dress4M" value="M">
                                                <label for="dress4M">M</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size101" id="dress4L" value="L">
                                                <label for="dress4L">L</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="size101" id="dress4XL" value="XL">
                                                <label for="dress4XL">XL</label>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </div>

                                <button type="button" class="submit-btn add-to-cart" data-loading-text="Please wait...">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                        <div class="product-bottom">
                            <a href="product_details.html" class="product-d-link">
                                <div class="product-name">
                                    Ella Dress
                                </div>
                                <div class="product-color">
                                    Romance green
                                </div>
                                <div class="product-price" data-selling-price="400">
                                    <div class="regular-price">BDT <span class="ml-2">2,234</span></div>

                                </div>
                            </a>
                        </div>

                    </div>
                </div> -->
            </div>
        </div>
    </section>
<!--=============product list end=====-->
    <hr>

        <script>
        $(window).load(function(){
            addToCartProdCard ();
        });
    </script>