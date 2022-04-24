<!--================Product Details start==========-->
    <section class="main-content">
        <div class="container container-xxl">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-5 col-md-5 single-product-page-content">

                    <div class="product__carousel">
                        <div class="gallery-parent">
                            <!-- SwiperJs and EasyZoom plugins start -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <?php
                                        $mystring = $productById['product_gallery']; 
                                        $proGalArray = explode('##', $mystring); 
                                        $i=0; 
                                        foreach ($proGalArray as $proGal) { $i++; 
                                            if(!empty($proGal)){
                                    ?>
                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                        <a href="<?= base_url('/uploads/'.$proGal); ?>">
                                            <img src="<?= base_url('/uploads/'.$proGal); ?>" alt="" />
                                        </a>
                                    </div>                                                
                                    <?php } } ?>                                     
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-white" style="background-color:transparent;"></div>
                                <div class="swiper-button-prev swiper-button-white"  style="background-color:transparent;"></div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">

                        <?php
                            $mystring = $productById['product_gallery']; 
                            $proGalArray = explode('##', $mystring); 

                            $i=0; 
                            foreach ($proGalArray as $proGal) { $i++; 
                                if(!empty($proGal)){
                        ?>
                                    <div class="swiper-slide <?php if($i==0){ echo 'active'; }else{ echo 'na'; } ?>">
                                        <img src="<?= base_url('/uploads/'.$proGal); ?>" alt="" />
                                    </div>
                        <?php } } ?>  
                                </div>
                            </div>
                            <!-- SwiperJs and EasyZoom plugins end -->
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-single-item" data-product-id="<?= $productById['id']; ?>" 
                    data-name="<?= $productById['title']; ?>" 
                    data-price="<?php if($productById['offer_price']){ echo $productById['offer_price']; }else{ echo $productById['sell_price']; } ?>" 
                    data-image="<?= base_url('/uploads/'.$productById['thumb']); ?>"
                    > 
                        <div class="product-bottom">
                            <div class="product-d-link">
                                <div class="product-name" style="font-size: 22px;">
                                    <?= $productById['title']; ?>
                                </div>
                                <div class="product-color">
                                    <?= $productById['product_color']; ?>
                                </div>
                                <div class="product-price">
                                    <div class="regular-price" style="font-size: 17px;">৳ <span class="ml-2">
                                        <?php if($productById['offer_price']!=''){ ?>
                                            <del><?= sprintf('%0.2f',$productById['sell_price']); ?></del>
                                            <?= sprintf('%0.2f',$productById['offer_price']); ?>
                                        <?php }else{ ?> 
                                            <?= sprintf('%0.2f',$productById['sell_price']); ?>
                                        <?php } ?>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="product-size-part d-flex justify-content-between align-items-end mt-5">
                            <div class="product-size">
                                <h4 style="margin-bottom:-15px">SIZE</h4>
                                <fieldset>
                                    <ul class="product-single-size">
                                        <?php if(strpos($productById['product_size'], '32-') !== false){?>
                                        <li>
                                            <input type="radio" name="size" id="dress32" value="32">
                                            <label class="b-1" for="dress32">32</label>
                                        </li>                                 
                                        <?php } ?>

                                        <?php if(strpos($productById['product_size'], '34-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress34" value="34">
                                            <label class="b-1" for="dress34">34</label>
                                        </li>                                
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '36-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress36" value="36">
                                            <label class="b-1" for="dress36">36</label>
                                        </li>                                
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '38-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress38" value="38">
                                            <label class="b-1" for="dress38">38</label>
                                        </li>                                
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '40-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress40" value="40">
                                            <label class="b-1" for="dress40">40</label>
                                        </li>                                
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '42-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress42" value="42">
                                            <label class="b-1" for="dress42">42</label>
                                        </li>                                
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '44-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress44" value="44">
                                            <label class="b-1" for="dress44">44</label>
                                        </li>                                
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '46-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress46" value="46">
                                            <label class="b-1" for="dress46">46</label>
                                        </li>                               
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '48-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress48" value="48">
                                            <label class="b-1" for="dress48">48</label>
                                        </li>                              
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '50-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress50" value="50">
                                            <label class="b-1" for="dress50">50</label>
                                        </li>                              
                                        <?php } ?>
                                        
                                        <?php if(strpos($productById['product_size'], '52-') !== false){?>
                                      <li>
                                            <input type="radio" name="size" id="dress52" value="52">
                                            <label class="b-1" for="dress52">52</label>
                                        </li>                              
                                        <?php } ?>

                                    </ul>
                                </fieldset>
                            </div>
                            
                            
                            <div class="size-guide text-left mt-3">
                                <button type="button" class="size-modal" data-toggle="modal" data-target="#size_chart">
                                    SIZE GUIDE 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="size_chart" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="<?= base_url('/uploads/'.$siteInfo['size_guide']); ?>" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="add-to-cart-lg">
                            <!-- <input type="submit" value="ADD TO CART"> -->
                            <button class="add-to-cart-single">ADD TO CART</button>
                        </div>

                        <!--==============Collapse info========-->
                        <div id="accordion" class="accordion p-details-accordion">
                            <div class="card mb-0">
                                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <a class="card-title">
                                        DESCRIPTION
                                    </a>
                                </div>
                                <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                                    <p><?= $productById['description']; ?></p>
                                </div>
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo">
                                    <a class="card-title">
                                        DETAILS & CARE
                                    </a>
                                </div>
                                <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                                    <p><?= $productById['short_description']; ?></p>
                                </div>
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree">
                                    <a class="card-title">
                                        SIZE & FIT
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <?= $productById['size_description']; ?>
                                    </div>
                                </div>
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour">
                                    <a class="card-title">
                                        SHIPPING
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <?= $productById['shipping_details']; ?>
                                    </div>
                                </div>
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive">
                                    <a class="card-title">
                                        RETURN POLICY
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <?= $productById['return_policy']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--==============Collapse info========-->
                    </div>

                </div>
            </div>
        </div>
    </section>
<!--================Product Details end==========-->

<!--==============Suggested Product start========-->
    <section class="p-tb-60">
        <div class="container container-xxl long-line">
            <div class="suggested-product">
                <h3>You May also Like</h3>
            </div>
            <div class="row pt-5">
                <div class="col-md-12">
                    <div class="owl-carousel suggested-product-slider">
                        <?php foreach($productArray as $proData){ ?>
                        <div class="item">
                            <div class="product-part">
                                <a href="<?= base_url('product-details/'.$proData['id']); ?>" class="product-d-link">
                                <div class="product-top">
                                    <div class="product-img">
                                        <img src="<?= base_url('/uploads/'.$proData['thumb']); ?>" class="img-fluid"
                                            alt="img not found">
                                    </div>
                                </div>
                                </a>
                                <div class="product-bottom">
                                    <a href="<?= base_url('product-details/'.$proData['id']); ?>" class="product-d-link">
                                        <div class="product-name">
                                            <?= $proData['title']; ?>
                                        </div>
                                        <div class="product-color">
                                            <?= $proData['product_color']; ?>
                                        </div>
                                        <div class="product-price">
                                            <div class="regular-price">৳ <span class="ml-2"><?= $proData['sell_price']; ?></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--==============Suggested Product end==========-->