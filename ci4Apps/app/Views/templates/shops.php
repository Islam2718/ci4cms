<!--============================== Breadcumb ============================= -->
    <div class="breadcumb-wrapper breadcumb-layout1 pt-200 pb-50" data-bg-src="<?= base_url(); ?>/zoker/assets/img/breadcumb/breadcumb-1.jpg" data-overlay>
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title h1 text-white my-0">merchandise</h1>
                <h2 class="breadcumb-bg-title">Product</h2>
                <ul class="breadcumb-menu-style1 text-white mx-auto fs-xs">
                    <li><a href="index.html"><i class="fal fa-home"></i>Home</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </div>

<!--============================= Product Area =============================-->
    <section class="vs-product-wrapper vs-product-layout2 space-top newsletter-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row align-items-center mb-30">
                        <div class="col-xl-5">
                            <p class="mb-0">Showing 1–24 of 37 item(s)</p>
                        </div>
                        <div class="col-xl-7 mt-3 mt-xl-0">
                            <div class="sort-btn d-flex flex-wrap justify-content-between justify-content-xl-end align-items-start">
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="d-flex mt-3 mt-sm-0">
                                    <a href="#" class="icon-btn3 active"><i class="far fa-border-all"></i></a>
                                    <a href="#" class="icon-btn3"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<?php foreach($productArray as $productData){ ?>
                        <div class="col-sm-6">
                            <div class="vs-product">
                                <div class="product-img">
                                    <a href="<?= base_url('product-details/'.$productData['id']); ?>"><img src="<?= base_url('/uploads/'.$productData['thumb']); ?>" class="w-100" alt="Product Image" style="height:250px;"></a>
                                    <div class="cart-btn-group">
                                        <a href="#" class="icon-btn3"><i class="far fa-heart"></i></a>
                                        <a href="tel:+6494461709" class="vs-btn">Call Now</a>
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
                                    <h3 class="product-name text-normal font-theme fs-20 lh-base mb-2"><a class="text-inherit" href="shop-details.html"><?= $productData['title']; ?></a></h3>
                                    <strong class="fs-18 text-theme2">$<?= sprintf('%0.2f',$productData['sell_price']); ?></strong>
                                </div>
                            </div>
                        </div>
                    	<?php } ?>
                    </div>
                    <div class="pagination-wrapper pagination-layout1 mt-lg-30 mb-30">
                        <?= $pager->links() ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area sticky-top overflow-hidden">
                        <div class="widget widget_search   ">
                            <form class="search-form">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <h3 class="sidebox-title-v2 h5">Filter by Price</h3>
                        <div class="vs-sidebox-v2 ">
                            <div class="range-slider-area">
                                <div id="slider-range"></div>
                                <div class="price-area">
                                    <span>Price:</span>
                                    <input type="text" readonly id="amount">
                                </div>
                                <a href="#" class="vs-btn vs-style1">Filter</a>
                            </div>
                        </div>
                        <h3 class="sidebox-title-v2 h5">Categories</h3>
                        <div class="vs-sidebox-v2 ">
                            <ul class="vs-cat-list1">
                            	<?php foreach($proCategoryArray as $pCatData){ ?> 
                                <li><a href="blog.html"><?= $pCatData['title']; ?> <span class="cat-number">10</span></a></li>
                            	<?php } ?>
                            </ul>
                        </div>
                        <h3 class="sidebox-title-v2 h5">Filter by Price</h3>
                        <div class="vs-sidebox-v2 ">
                            <div class="latest-product-v1">
                                <div class="d-flex post">
                                    <div class="media-img mr-25">
                                        <img src="<?= base_url(); ?>/zoker/assets/img/product/p-thumb-1-1.jpg" alt="Product Thumb">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-yellow fs-12">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h4 class="h6 font-theme text-normal mb-0"><a href="#" class="text-inherit">Dolor sit cing elit</a></h4>
                                        <del class="fs-12">$200.00</del>
                                        <span class="text-theme2 fs-12 ms-2">$150.00</span>
                                    </div>
                                </div>
                                <div class="d-flex post">
                                    <div class="media-img mr-25">
                                        <img src="<?= base_url(); ?>/zoker/assets/img/product/p-thumb-1-2.jpg" alt="Product Thumb">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-yellow fs-12">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h4 class="h6 font-theme text-normal mb-0"><a href="#" class="text-inherit">Dolor sit cing elit</a></h4>
                                        <del class="fs-12">$200.00</del>
                                        <span class="text-theme2 fs-12 ms-2">$150.00</span>
                                    </div>
                                </div>
                                <div class="d-flex post">
                                    <div class="media-img mr-25">
                                        <img src="<?= base_url(); ?>/zoker/assets/img/product/p-thumb-1-3.jpg" alt="Product Thumb">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-yellow fs-12">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h4 class="h6 font-theme text-normal mb-0"><a href="#" class="text-inherit">Dolor sit cing elit</a></h4>
                                        <del class="fs-12">$200.00</del>
                                        <span class="text-theme2 fs-12 ms-2">$150.00</span>
                                    </div>
                                </div>
                                <div class="d-flex post">
                                    <div class="media-img mr-25">
                                        <img src="<?= base_url(); ?>/zoker/assets/img/product/p-thumb-1-4.jpg" alt="Product Thumb">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-yellow fs-12">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h4 class="h6 font-theme text-normal mb-0"><a href="#" class="text-inherit">Dolor sit cing elit</a></h4>
                                        <del class="fs-12">$200.00</del>
                                        <span class="text-theme2 fs-12 ms-2">$150.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>