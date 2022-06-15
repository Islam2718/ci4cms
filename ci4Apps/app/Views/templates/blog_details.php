<!--=============================  Breadcumb ============================= -->
    <div class="breadcumb-wrapper breadcumb-layout1 pt-200 pb-50" data-bg-src="<?= base_url(); ?>/zoker/assets/img/breadcumb/breadcumb-1.jpg" data-overlay>
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title h1 text-white my-0">Blog Details</h1>
                <h2 class="breadcumb-bg-title">News</h2>
                <ul class="breadcumb-menu-style1 text-white mx-auto fs-xs">
                    <li><a href="index.html"><i class="fal fa-home"></i>Home</a></li>
                    <li class="active">Blog Details</li>
                </ul>
            </div>
        </div>
    </div>

<!--============================  Blog Area =============================-->
    <section class="vs-blog-wrapper blog-single-layout1 space-top  newsletter-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover">
                            <a href="blog-details.html"><img src="<?= base_url('/uploads/'.$postArrayById['thumb']); ?>" class="w-100" alt="Blog Image"></a>
                        </div>
                        <div class="blog-meta bg-smoke has-border">
                            <a href="#"><i class="fal fa-calendar-alt"></i><?= $postArrayById['created_at']; ?></a>
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
                            <h2 class="blog-title h4 font-theme "><a href="blog-details.html"><?= $postArrayById['title']; ?></a></h2>
                            <?= $postArrayById['content']; ?>

                            <div class="blog-share-links d-md-flex align-items-center">
                                <h5 class="font-theme text-normal d-inline-block mb-3 mb-md-0 mr-20">Related Tags:</h5>
                                <div class="tagcloud">
                                    <a href="blog.html">Tech</a>
                                    <a href="blog.html">Tournament</a>
                                    <a href="blog.html">esports</a>
                                </div>
                            </div>
                            <div class="blog-social-links">
                                <ul class="nav nav-fill">
                                    <?php foreach($socialArray as $socialData){ ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $socialData['link_url']; ?>">
                                            <?= $socialData['ux_html']; ?> <?= $socialData['title']; ?>
                                        </a>
                                    </li>                
                                    <?php } ?>                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
<!-- 
                    <div class="blog-written-author d-md-flex bg-smoke px-60 pb-60 pt-55 my-40">
                        <div class="media-img mb-10 mb-md-0 mr-40 align-self-center">
                            <img src="assets/img/author/blog-author.png" alt="Blog Author" class="rounded-circle">
                        </div>
                        <div class="media-body text-center text-md-start">
                            <span class="fs-xs text-theme2">Written by</span>
                            <h3 class="font-theme text-normal mb-1">David Smith</h3>
                            <p>Distinctively innovate pandemic channels through superior action items. Conveniently productivate tactical.</p>
                            <div class="d-flex gap-2 text-white">
                                <a class="icon-btn3 size-40" href="https://google.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon-btn3 size-40" href="https://google.com"><i class="fab fa-twitter"></i></a>
                                <a class="icon-btn3 size-40" href="https://google.com"><i class="fab fa-linkedin-in"></i></a>
                                <a class="icon-btn3 size-40" href="https://google.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                     -->
                    <div class="vs-comment-area list-style-none vs-comments-layout1   ">
                        <h3 class="mt-n2 font-theme text-normal">Leave a Comment</h3>
                        <ul class="comment-list">
                            <li class="vs-comment">
                                <div class="vs-post-comment">
<!--                                     <div class="author-img">
                                        <img src="assets/img/author/comment-1-1.png" alt="Comment Author">
                                    </div> -->
                                    <div class="comment-content" style="width:100% !important">
                                        <div class="comment-top">
                                            <div class="comment-author">
                                                <h4 class="name">Mark Jack</h4>
                                                <div class="mb-12">
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
                            </li>
                        </ul>
                    </div> <!-- Comment Form -->
                    <div class="vs-comment-form comment-form-layout1 mt-10 mb-30">
                        <div class="form-title mb-20">
                            <h3 class="mt-n2 font-theme text-normal mb-1">Leave a Comment</h3>
                            <p class="">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <textarea placeholder="Write a Message" rows="10" class="form-control bg-smoke"></textarea>
                                <i class="fal fa-pencil-alt me-2"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Your Name" class="form-control bg-smoke">
                                <i class="fal fa-user me-2"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Your Email" class="form-control bg-smoke">
                                <i class="fal fa-envelope me-2"></i>
                            </div>
                            <div class="col-12 form-group pt-xl-20 mb-0">
                                <button class="vs-btn gradient-btn">Submit Message</button>
                            </div>
                        </div>
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