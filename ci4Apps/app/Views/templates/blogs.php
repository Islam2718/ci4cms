<!--============================== Breadcumb ============================ -->
    <div class="breadcumb-wrapper breadcumb-layout1 pt-200 pb-50" data-bg-src="<?= base_url(); ?>/zoker/assets/img/breadcumb/breadcumb-1.jpg" data-overlay>
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title h1 text-white my-0">Latest Blog</h1>
                <h2 class="breadcumb-bg-title">News</h2>
                <ul class="breadcumb-menu-style1 text-white mx-auto fs-xs">
                    <li><a href="index.html"><i class="fal fa-home"></i>Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>

<!--============================= Blog Area =============================-->
    <section class="vs-blog-wrapper blog-single-layout1 space-top  newsletter-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <?php foreach($postArray as $postData){  ?>
                    <div class="vs-blog">
                        <?php if(!empty($postData['thumb'])){ ?>
                        <div class="blog-image image-scale-hover">
                            <a href="<?= base_url('blog-details/'.$postData['id']); ?>"><img src="<?= base_url('/uploads/'.$postData['thumb']); ?>" class="w-100" alt="<?= $postData['title']; ?>"></a>
                        </div>
                        <?php } ?>
                        <div class="blog-meta bg-smoke has-border">
                            <a href="#"><i class="fal fa-calendar-alt"></i><?= $postData['created_at']; ?></a>
<!-- 
                            <a href="#"><i class="far fa-comments"></i>263</a>
                            <div class="cat-list">
                                <i class="far fa-folder-open"></i>
                                <a href="#">e-sports</a>
                                <a href="#">gaming</a>
                                <a href="#">pro</a>
                            </div>
 -->
                        </div>
                        <div class="blog-content bg-smoke">
                            <h2 class="blog-title h4 font-theme "><a href="<?= base_url('blog-details/'.$postData['id']); ?>"><?= $postData['title']; ?></a></h2>
                            <p><?= substr($postData['content'],0,220); ?></p>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="pagination-wrapper pagination-layout1 pt-lg-30 pb-30">
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
                        <h3 class="sidebox-title-v2 h5">Latest Updates</h3>
                        <div class="vs-sidebox-v2 px-0 pb-0 pt-20 mb-0">
                            <div class="nav nav-fill  tab-menu1 tab-indicator bg-white" role="tablist">
                                <a class="nav-link active" id="recent-tab" data-bs-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent</a>
                                <a class="nav-link" id="popular-tab" data-bs-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false">Popular</a>
                                <a class="nav-link" id="latest-tab" data-bs-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="false">latest</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                <div class="post-thumb-style1 vs-sidebox-v2 pb-1">
                                    <?php $i=0; foreach($postArrayforSidebar as $postFilterData){ $i++; if($i<5){ ?>
                                    <div class="vs-blog d-flex gap-3">
                                        <div class="media-img">
                                            <a href="<?= base_url('blog-details/'.$postFilterData['id']); ?>"><img src="<?= base_url('/uploads/'.$postFilterData['thumb']); ?>" alt="<?= $postFilterData['title']; ?>" style="width:80px;"></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4 class="h5 blog-title font-theme lh-base mb-0"><a href="blog-details.html"><?= $postFilterData['title']; ?></a></h4>
                                            <div class="blog-meta link-inherit fs-xs mt-1">
                                                <a href="blog.html"><i class="fal fa-calendar-alt text-theme2"></i><?= $postFilterData['created_at']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                            <div class="tab-pane" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                <div class="post-thumb-style1 vs-sidebox-v2 pb-1">
                                    <?php $i=0; foreach($postArrayforSidebar as $postFilterData){ $i++; if($i<5){ ?>
                                    <div class="vs-blog d-flex gap-3">
                                        <div class="media-img">
                                            <a href="<?= base_url('blog-details/'.$postFilterData['id']); ?>"><img src="<?= base_url('/uploads/'.$postFilterData['thumb']); ?>" alt="<?= $postFilterData['title']; ?>" style="width:80px;"></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4 class="h5 blog-title font-theme lh-base mb-0"><a href="blog-details.html"><?= $postFilterData['title']; ?></a></h4>
                                            <div class="blog-meta link-inherit fs-xs mt-1">
                                                <a href="blog.html"><i class="fal fa-calendar-alt text-theme2"></i><?= $postFilterData['created_at']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                            <div class="tab-pane" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                                <div class="post-thumb-style1 vs-sidebox-v2 pb-1">
                                    <?php $i=0; foreach($postArrayforSidebar as $postFilterData){ $i++; if($i<5){ ?>
                                    <div class="vs-blog d-flex gap-3">
                                        <div class="media-img">
                                            <a href="<?= base_url('blog-details/'.$postFilterData['id']); ?>"><img src="<?= base_url('/uploads/'.$postFilterData['thumb']); ?>" alt="<?= $postFilterData['title']; ?>" style="width:80px;"></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4 class="h5 blog-title font-theme lh-base mb-0"><a href="blog-details.html"><?= $postFilterData['title']; ?></a></h4>
                                            <div class="blog-meta link-inherit fs-xs mt-1">
                                                <a href="blog.html"><i class="fal fa-calendar-alt text-theme2"></i><?= $postFilterData['created_at']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>

                        <h3 class="sidebox-title-v2 h5">Categories</h3>
                        <div class="vs-sidebox-v2 ">
                            <ul class="vs-cat-list1">
                                <?php foreach($categoryrray as $catData){  ?>
                                <li><a href="<?= base_url(); ?>"><?= $catData['title']; ?> <span class="cat-number">--</span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <h3 class="sidebox-title-v2 h5">Top Games</h3>
                        <div class="vs-sidebox bg-smoke">
                            <div class="row no-gutters g-2">
                                <div class="col-6">
                                    <div class="image-scale-hover"><a href="#"><img src="<?= base_url(); ?>/zoker/assets/img/widget/sidebbox-img-1.jpg" class="w-100" alt="Sidebox Image"></a></div>
                                </div>
                                <div class="col-6">
                                    <div class="image-scale-hover"><a href="#"><img src="<?= base_url(); ?>/zoker/assets/img/widget/sidebbox-img-2.jpg" class="w-100" alt="Sidebox Image"></a></div>
                                </div>
                                <div class="col-6">
                                    <div class="image-scale-hover"><a href="#"><img src="<?= base_url(); ?>/zoker/assets/img/widget/sidebbox-img-3.jpg" class="w-100" alt="Sidebox Image"></a></div>
                                </div>
                                <div class="col-6">
                                    <div class="image-scale-hover"><a href="#"><img src="<?= base_url(); ?>/zoker/assets/img/widget/sidebbox-img-4.jpg" class="w-100" alt="Sidebox Image"></a></div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>