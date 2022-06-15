<!--=============================  Breadcumb ============================ -->
    <div class="breadcumb-wrapper breadcumb-layout1 pt-200 pb-50" data-bg-src="<?= base_url(); ?>/zoker/assets/img/breadcumb/breadcumb-1.jpg" data-overlay>
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title h1 text-white my-0">merchandise</h1>
                <h2 class="breadcumb-bg-title">Product</h2>
                <ul class="breadcumb-menu-style1 text-white mx-auto fs-xs">
                    <li><a href="index.html"><i class="fal fa-home"></i>Home</a></li>
                    <li class="active">Shop Details</li>
                </ul>
            </div>
        </div>
    </div>

<!--============================== Product Area =============================-->
    <section class="vs-product-details space-top space-md-bottom">
        <div class="container">
            <div class="position-relative z-index-common py-lg-60">
                <div class="product-details-shape bg-smoke"></div>
                <div class="row">               	
                    <div class="col-lg-6 ">
                        <div class="product-main-img text-center pt-30 pt-lg-60">
                            <div class="product-share">
                                <a href="#" class="icon1 text-reset"><i class="fal fa-share-alt fs-20"></i></a>
                            </div>
                            <img src="<?= base_url('/uploads/'.$productArrayById['thumb']); ?>" class="zoom-img" alt="Product Image">
                        </div>
                        <div class="product-thum-slide">
                            <div class="vs-carousel" data-slide-show="4" id="thumbSlide">
<?php 
	$productGalString = $productArrayById['product_gallery']; 
	$productGalArray = explode('##', $productGalString);
	$proGalCount = count($productGalArray);
	$i=0; 
	foreach($productGalArray as $proGalData){ $i++; if($i < $proGalCount){
?>
                                <div class="thumb m-1">
                                    <img src="<?= base_url('/uploads/'.$proGalData); ?>" class="zoom-thumb" data-zoom-image="<?= base_url('/uploads/'.$proGalData); ?>" alt="Product Image">
                                </div>
<?php } } ?>
                                <div class="thumb">
                                    <img src="<?= base_url('/uploads/'.$productArrayById['thumb']); ?>" class="zoom-thumb" data-zoom-image="<?= base_url('/uploads/'.$productArrayById['thumb']); ?>" alt="Product Image">
                                </div>                           
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-about">
                            <div class="mb-2">
                                <span class="text-yellow fs-xs me-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                                <span class="d-inline-block">(2 Customer Review)</span>
                            </div>
                            <h3 class="product-name font-theme text-normal"><?= $productArrayById['title']; ?></h3>
                            <h4 class="product-price text-theme2">$50.00</h4>
                            <hr class="border-dashed-light mt-25 mb-20">
                            <div class="mb-2"><?= $productArrayById['short_description']; ?></div>
                            <div class="cart-btn-group">
                                <a href="tel:<?= $siteInfo['phone']; ?>" class="vs-btn">Call Now</a>
                                <a href="#" class="icon-btn3"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-40 pt-lg-60">
                <ul class="nav nav-tabs tab-menu2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="desc-tab" data-bs-toggle="tab" href="#desc" role="tab" aria-controls="desc" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="review-tab" data-bs-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review (02)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane " id="desc" role="tabpanel" aria-labelledby="desc-tab">
                       <?= $productArrayById['description']; ?>
                    </div>
                    <div class="tab-pane show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="vs-comment-area list-style-none vs-comments-layout1   ">
                            <ul class="comment-list">
                                <li class="vs-comment">
                                    <div class="vs-post-comment">
                                        <div class="author-img">
                                            <img src="<?= base_url(); ?>/zoker/assets/img/author/comment-1-1.png" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-top">
                                                <div class="comment-author">
                                                    <h4 class="name">Mark Jack</h4>
                                                    <div class="mb-10">
                                                        <span class="text-yellow fs-xs me-3">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        <span class="commented-on">22 April, 2021</span>
                                                    </div>
                                                </div>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="vs-btn "><i class="fal fa-reply-all mr-10"></i>Replay</a>
                                                </div>
                                            </div>
                                            <p class="text">Progressively procrastinate mission-critical action items before team building ROI.
                                                Interactively provide access to cross functional quality vectors for client-centric catalysts for change.
                                            </p>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="vs-comment">
                                            <div class="vs-post-comment">
                                                <div class="author-img">
                                                    <img src="<?= base_url(); ?>/zoker/assets/img/author/comment-1-2.png" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-top">
                                                        <div class="comment-author">
                                                            <h4 class="name">Peter Parker</h4>
                                                            <div class="mb-10">
                                                                <span class="text-yellow fs-xs me-3">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                </span>
                                                                <span class="commented-on">22 April, 2021</span>
                                                            </div>
                                                        </div>
                                                        <div class="reply_and_edit">
                                                            <a href="blog-details.html" class="vs-btn "><i class="fal fa-reply-all mr-10"></i>Replay</a>
                                                        </div>
                                                    </div>
                                                    <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="vs-comment">
                                    <div class="vs-post-comment">
                                        <div class="author-img">
                                            <img src="<?= base_url(); ?>/zoker/assets/img/author/comment-1-3.png" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-top">
                                                <div class="comment-author">
                                                    <h4 class="name">John Deo</h4>
                                                    <div class="mb-10">
                                                        <span class="text-yellow fs-xs me-3">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        <span class="commented-on">22 April, 2021</span>
                                                    </div>
                                                </div>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="vs-btn "><i class="fal fa-reply-all mr-10"></i>Replay</a>
                                                </div>
                                            </div>
                                            <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets whereas 2.0 users. Enthusiastically seize team.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="vs-comment-form comment-form-layout1 bg-smoke px-40 py-40 mb-30 mt-lg-30">
                            <div class="form-title">
                                <h3 class="h4 font-theme text-normal mt-n2">Add A Review</h3>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="vs-rating-input mb-20">
                                        <strong>Your rating: </strong>
                                        <span class="active"><i class="fas fa-star"></i></span>
                                        <span class="active"><i class="fas fa-star"></i></span>
                                        <span class="active"><i class="fas fa-star"></i></span>
                                        <span class="active"><i class="fas fa-star"></i></span>
                                        <span class="active"><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Write a Message" class="form-control" rows="8" cols="5"></textarea>
                                    <i class="fal fa-pencil-alt me-2"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Name" class="form-control">
                                    <i class="fal fa-user me-2"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Email" class="form-control">
                                    <i class="fal fa-envelope me-2"></i>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="vs-btn gradient-btn no-skew">Submit Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--============================= Product Area ============================-->
    <section class="vs-product-wrapper vs-product-layout2 newsletter-pb">
        <div class="container">
            <h2 class="mt-n2 font-theme text-normal mb-4">Related Products</h2>
            <div class="row vs-carousel arrow-margin" data-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-product">
                        <div class="product-img">
                            <a href="shop-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/product/product-2-1.jpg" class="w-100" alt="Product Image"></a>
                            <div class="cart-btn-group">
                                <a href="#" class="icon-btn3"><i class="far fa-heart"></i></a>
                                <a href="#" class="vs-btn">Add to cart</a>
                                <a href="#" class="icon-btn3"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="text-yellow fs-xs mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="product-name text-normal font-theme fs-20 lh-base mb-2"><a class="text-inherit" href="shop-details.html">Continually exploit business information portals</a></h3>
                            <strong class="fs-18 text-theme2">$200.50</strong>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-product">
                        <div class="product-img">
                            <span class="label">HOT</span>
                            <a href="shop-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/product/product-2-2.jpg" class="w-100" alt="Product Image"></a>
                            <div class="cart-btn-group">
                                <a href="#" class="icon-btn3"><i class="far fa-heart"></i></a>
                                <a href="#" class="vs-btn">Add to cart</a>
                                <a href="#" class="icon-btn3"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="text-yellow fs-xs mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="product-name text-normal font-theme fs-20 lh-base mb-2"><a class="text-inherit" href="shop-details.html">In particular, the garbled words of lorem ipsum</a></h3>
                            <strong class="fs-18 text-theme2">$200.50</strong>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-product">
                        <div class="product-img">
                            <a href="shop-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/product/product-2-3.jpg" class="w-100" alt="Product Image"></a>
                            <div class="cart-btn-group">
                                <a href="#" class="icon-btn3"><i class="far fa-heart"></i></a>
                                <a href="#" class="vs-btn">Add to cart</a>
                                <a href="#" class="icon-btn3"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="text-yellow fs-xs mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="product-name text-normal font-theme fs-20 lh-base mb-2"><a class="text-inherit" href="shop-details.html">McClintock's eye for detail certainly helped</a></h3>
                            <strong class="fs-18 text-theme2">$200.50</strong>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="vs-product">
                        <div class="product-img">
                            <a href="shop-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/product/product-2-4.jpg" class="w-100" alt="Product Image"></a>
                            <div class="cart-btn-group">
                                <a href="#" class="icon-btn3"><i class="far fa-heart"></i></a>
                                <a href="#" class="vs-btn">Add to cart</a>
                                <a href="#" class="icon-btn3"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="text-yellow fs-xs mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="product-name text-normal font-theme fs-20 lh-base mb-2"><a class="text-inherit" href="shop-details.html">Creation timelines for the standard passage vary</a></h3>
                            <strong class="fs-18 text-theme2">$200.50</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>