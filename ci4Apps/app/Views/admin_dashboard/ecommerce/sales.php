<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sale Product</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
<!--           <a href="<?= base_url('product-add'); ?>" class="btn btn-primary btn-block shadow">Add New Product</a>  &nbsp;  -->
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>         
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Products</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th>#</th>
      <th scope="col">Product</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($productArray as $proData){ $i++; ?>     
    <tr>
        <td><?= $i; ?></td>
        <td style="width:75%">
            <div class="product-part" data-product-id="<?= $i; ?>">

                        <div class="product-top">
                            <div class="col product-img">
                                <img src="<?= base_url('/uploads/'.$proData['thumb']); ?>" class="img-fluid" alt="not-found" style="width:50px; height:50px;">
                            </div>
                            <div class="col product-bottom" style="text-align: left; ">
                                
                                    <div class="row product-name d-flex flex-column" style="font-size:12px; ">
                                        <?= $proData['product_code']; ?>
                                        <strong><?= $proData['title']; ?></strong>
                                        Color: <?= $proData['product_color']; ?><br/>
                                    </div>
                                    <div class="row product-price" data-selling-price="<?php if($proData['offer_price']){ echo $proData['offer_price']; }else{ echo $proData['sell_price']; }; ?>" style="font-size:12px; ">
                                        <div class="regular-price">
                                            <span class="line-through">Regular Price: <?= $proData['sell_price']; ?></span> 
                                        </div>
                                        <div class="discount-price">
                                            Sell Price: <?php if($proData['offer_price']){ echo $proData['offer_price']; }else{ echo $proData['sell_price']; }; ?> 
                                        </div>
                                    </div>
                                
                            </div>                            
                            <!--<div class="col product-choose">-->
                            <!--    <div class="quick-option">-->
                            <!--        <fieldset>-->
                                        <!--<ul class="nav nav-tabs" id="myTab" role="tablist">-->
                                        <!--  <li class="nav-item" role="presentation">-->
                                        <!--    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Size <br> 36</a>-->
                                        <!--  </li>-->
                                        <!--  <li class="nav-item" role="presentation">-->
                                        <!--    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Size <br> 25</a>-->
                                        <!--  </li>-->
                                        <!--  <li class="nav-item" role="presentation">-->
                                        <!--    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Size <br> 30</a>-->
                                        <!--  </li>-->
                                        <!--</ul>-->
                                        
                                        
                                        <!--<ul class="option-list">-->
                                        <!--    <li>-->
                                        <!--        <input type="radio" name="size1" id="dress140" value="40">-->
                                        <!--        <label for="dress140">40</label>-->
                                        <!--    </li>    -->
                                        <!--    <li>-->
                                        <!--        <input type="radio" name="size1" id="dress142" value="42">-->
                                        <!--        <label for="dress142">42</label>-->
                                        <!--    </li>-->
                                        <!--</ul>-->
                                    
                            <!--        </fieldset>-->
                            <!--    </div>-->
                            <!--                                                                            <button type="button" class="submit-btn add-to-cart btn btn-primary btn-sm" data-loading-text="Please wait...">-->
                            <!--                                                                                <i class="fa fa-plus"></i>-->
                            <!--                                                                            </button>-->
                                                                                                                                                                                <!--<div class="tab-content" id="myTabContent">-->
                                                                                                        <!--  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">-->
                                                                                                        <!--    <form action="#" class="display-flex">-->
                                                                                                        <!--           <input type="hidden" name="quantity100" value="1" class="qty">-->
                                                                                                        <!--        <div class="qtyplus btn btn-primary btn-sm" type="button"><i class="fa fa-plus"></i></div>-->
                                                                                                        <!--   </form>                                      -->
                                                                                                        <!--  </div>-->
                                                                                                        <!--  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                                                                                                        <!--      <form action="#" class="display-flex">-->
                                                                                                        <!--           <input type="hidden" name="quantity100" value="2" class="qty">-->
                                                                                                        <!--        <div class="qtyplus btn btn-primary btn-sm" type="button"><i class="fa fa-plus"></i></div>-->
                                                                                                        <!--   </form>   -->
                                                                                                        <!--  </div>-->
                                                                                                        <!--  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">-->
                                                                                                        <!--      <form action="#" class="display-flex">-->
                                                                                                        <!--           <input type="hidden" name="quantity100" value="3" class="qty">-->
                                                                                                        <!--        <div class="qtyplus btn btn-primary btn-sm" type="button"><i class="fa fa-plus"></i></div>-->
                                                                                                        <!--   </form>   -->
                                                                                                        <!--  </div>-->
                                                                                                        <!--</div>-->
                               
                            <!--</div>-->
                            
                            
                            <div class="product-choose">
                                <div class="quick-option">
                                    <fieldset>
                                        <ul class="option-list">
                                            <?php if(strpos($proData['product_size'], '32-') !== false){?>
                                            <li>
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>32" value="32">
                                                <label for="dress<?= $i; ?>32">32</label>
                                            </li>
                                            <?php if(strpos($proData['product_size'], '34-') !== false){?>
                                            <?php } ?>
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
                                                <input type="radio" name="size<?= $i; ?>" id="dress<?= $i; ?>42" value="4242">
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
                    </div>
                </td>        
    </tr>

  
<?php } ?>

  </tbody>

<!--<tbody>-->
<!--<?php $i=0; foreach($productArray as $proData){ $i++; ?>     -->
<!--    <tr>-->
<!--        <td><?= $i; ?></td>-->
<!--        <td><?= $proData['product_code']; ?></td>-->
<!--        <td style="width:50%"><?= $proData['title']; ?></td>-->
<!--        <td><div class="product-part" data-product-id="100">-->
<!--                        <div class="product-top">-->
<!--                            <div class="product-img">-->
<!--                                <img src="assets/img/product-1x1/p_sq_1.jpg" class="img-fluid" alt="img not found">-->
<!--                            </div>-->
<!--                            <div class="product-choose">-->
<!--                                <div class="quick-option">-->
<!--                                    <fieldset>-->
<!--                                        <ul class="option-list">-->
<!--                                            <li>-->
<!--                                                <input type="radio" name="size100" id="dress3XS" value="XS">-->
<!--                                                <label for="dress3XS">XS</label>-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <input type="radio" name="size100" id="dress3S" value="S">-->
<!--                                                <label for="dress3S">S</label>-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <input type="radio" name="size100" id="dress3M" value="M">-->
<!--                                                <label for="dress3M">M</label>-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <input type="radio" name="size100" id="dress3L" value="L">-->
<!--                                                <label for="dress3L">L</label>-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <input type="radio" name="size100" id="dress3XL" value="XL">-->
<!--                                                <label for="dress3XL">XL</label>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </fieldset>-->
<!--                                </div>-->

<!--                                <button type="button" class="submit-btn btn btn-primary  btn-sm add-to-cart" data-loading-text="Please wait...">-->
<!--                                    <i class="fa fa-plus"></i>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="product-bottom">-->
<!--                            <a href="product_details.html" class="product-d-link">-->
<!--                                <div class="product-name">-->
<!--                                    Ella Dress-->
<!--                                </div>-->
<!--                                <div class="product-color">-->
<!--                                    Romance green-->
<!--                                </div>-->
<!--                                <div class="product-price" data-selling-price="400">-->
<!--                                    <div class="regular-price">BDT <span class="line-through ml-2">2,234</span></div>-->
<!--                                    <div class="discount-price">1,234</div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </td>-->
<!--        <td><?= sprintf('%0.2f',$proData['offer_price']); ?></td>-->
        
<!--    </tr>-->
<!-- REMOVE Modal-->
  
<!--<?php } ?>-->

<!--  </tbody>-->
</table>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-4"> 
            <div class="card shadow mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Cart</h6>                    
                </div> 
                <div class="card-body">
                    <div id="header-area">
                       <div class="header-right-meta">
                        <ul class="cart-calculator-wrapper  oreders">
                            <li class="shop-cart"><a href="#"><i class="fa fa-shopping-bag"></i> <span
                                        class="count" id="cart-total-count">0</span></a>
                                <div class="mini-cart">
                                    <div class="mini-cart-body">

                                    </div>
                                </div>
                            </li>
                             <div class="cart-subtotal">
                                <span>Cart Subtotal</span>
                                 <span class="tk-sign total-price" id="product_subtotal"></span>
                            </div>
                            <div class="d-flex justify-content-between">
                               <div class="d-flex flex-column">
                                    <label for="district" class="required" style="font-weight: 700; color:#000">Delivery Charge</label>
                                    <select name="charge" id="district" class="form-control" required>
                                        <option value="">District</option>
                                        <option value="100">Dhaka</option>
                                </select>
                               </div>
                               <div>
                                 <span class="tk-sign shipping-charge" id="shipping-charge"
                                  style="width: 70px; color:#000">0</span>
                               </div>

                            </div>
                            <div class="d-flex justify-content-between mt-2" style="font-weight: 700; color:#000">
                                <label>Discount</label>
                                <input type="text" class="form-control" name="discount" style="width: 70px; color: #000">
                            </div>
                            <div class="d-flex justify-content-between mt-3" style="font-weight: 700; color:#000">
                                <span>Grand Total</span>
                                <span class="tk-sign font-weight-bold" id="final-price">0</span>
                            </div>
                        </ul>
                            
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid-->  