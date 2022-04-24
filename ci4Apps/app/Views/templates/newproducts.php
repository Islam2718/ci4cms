<br/><br/><center><h1>New Products</h1><br/><br/>
<!--=============product list start=====-->
    <section class="pt-5">
        <div class="container container-xxl">
            <div class="row">
                <?php $i=0; foreach($productArray as $proData){ $i++; ?>
                <div class="col-6 col-lg-3 col-md-3 mb-5 px-2">
                    <div class="product-part" data-product-id="<?= $i; ?>">
                        <div class="product-top">
                            <a href="<?= base_url('product-details/'.$proData['id']); ?>" class="product-d-link">
                            <div class="product-img">
                                <img src="<?= base_url('/uploads/'.$proData['thumb']); ?>" class="img-fluid" alt="img not found">
                            </div>
                            </a>
                            <div class="product-choose">
                                <div class="quick-option">
                                    <fieldset>
                                        <span>Select Size</span>

                                        <ul class="option-list">
                                            <?php if(strpos($proData['product_size'], '32-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>32" value="32">
                                                <label for="dress<?= $i; ?>32">32</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '34-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>34" value="34">
                                                <label for="dress<?= $i; ?>34">34</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '36-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>36" value="36">
                                                <label for="dress<?= $i; ?>36">36</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '38-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>38" value="38">
                                                <label for="dress<?= $i; ?>38">38</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '40-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>40" value="40">
                                                <label for="dress<?= $i; ?>40">40</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '42-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>42" value="42">
                                                <label for="dress<?= $i; ?>42">42</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '44-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>44" value="44">
                                                <label for="dress<?= $i; ?>44">44</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '46-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>46" value="46">
                                                <label for="dress<?= $i; ?>46">46</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '48-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>48" value="48">
                                                <label for="dress<?= $i; ?>48">48</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '50-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>50" value="50">
                                                <label for="dress<?= $i; ?>50">50</label>
                                            </li>
                                            <?php } ?>
                                            <?php if(strpos($proData['product_size'], '52-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>52" value="52">
                                                <label for="dress<?= $i; ?>52">52</label>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </fieldset>
                                </div>

                                <button type="button" class="submit-btn add-to-cart" data-loading-text="Please wait...">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                        <div class="product-bottom">
                            <a href="<?= base_url('product-details/'.$proData['id']); ?>" class="product-d-link">
                                <div class="product-name">
                                    <?= $proData['title']; ?>
                                </div>
                                <div class="product-color">
                                    <?= $proData['product_color']; ?>
                                </div>
                                <div class="product-price" data-selling-price="<?php if($proData['offer_price']){ echo $proData['offer_price']; }else{ echo $proData['sell_price']; } ?>" class="text-center">
                                    <div class="regular-price">৳ <span class="line-through ml-2"><?= $proData['sell_price']; ?></span></div>
                                    <div class="discount-price"><center><?php if($proData['offer_price']){ echo $proData['offer_price']; }else{ echo $proData['sell_price']; } ?></center></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<!--=============product list end=====-->
   

    <!--    <script>-->
    <!--    $(window).ready(function(){-->
    <!--        addToCartProdCard ();-->
    <!--    });-->
    <!--</script>-->