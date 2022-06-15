
    <!--==============================
    Hero Area
    ==============================-->
    <section class="vs-hero-wrapper  ">
        <div class="vs-hero-carousel" data-height="900" data-container="1170" data-slidertype="fullwidth">
            <a href="#" class="ls-arrow text-white d-none d-xl-inline-block" data-ls-go="next">Next<i class="fal fa-arrow-right"></i></a>
            <a href="#" class="ls-arrow text-white d-none d-xl-inline-block" data-ls-go="prev"><i class="fal fa-arrow-left"></i>Prev</a>
            
            <?php foreach ($sliderArray as $sliderData) { ?>             
            <div class="ls-slide" data-ls="duration: 8000; transition2d: 5;">
                <img src="<?= base_url('/uploads/'.$sliderData['thumb']); ?>" alt="Hero Bg Image" class="ls-bg">


                <h2 class="ls-l ls-responsive" data-ls-mobile="left: 50%; top: 300px; text-align: center; font-size: 110px;" style="left: -2px; top: 400px; text-transform: uppercase; color: #ffffff; font-weight: 700; font-size: 72px; letter-spacing: -0.03em;" data-ls="durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 500; durationout: 3000; fadeout: true; skewxout: 10;"><?= $sliderData['title']; ?></h2>
                <br/>
                <p class="ls-l ls-hide-phone" style="left: 0; top: 575px; color: #b0b1be; font-size: 18px; width: 700px; min-width: 230px; white-space: normal;" data-ls="minfontsize: 16px; durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;"><?= $sliderData['content']; ?></p>
                <div class="ls-l ls-center-xs ls-responsive" data-ls-mobile="left: 50%; top: 660px; width: 100px; height: 100px;" style="left: 0; top: 635px;" data-ls="durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;">
                    <div class="ls-btn-group">
                        <a href="<?= $sliderData['link_url']; ?>" class="vs-btn gradient-btn">Go</a>
                        <a href="" class="vs-btn black-skew"><i class="fal fa-shopping-cart"></i>Merch shop</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <div class="bg1 bg-light-dark bg-fixed" data-bg-src="assets/img/bg/bg-1.jpg">
        <!--==============================
  Video Area
  ============================== -->
        <div class="vs-video-area  space-top">
            <div class="container ">
                <div class="row align-items-center gx-xl-0 arrow-white vs-carousel" data-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true">
                    <div class="col-lg-4">
                        <div class="video-box1">
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="popup-video">
                                <img src="<?= base_url(); ?>/zoker/assets/img/video/video-img-1-1.jpg" alt="Video Image" class="w-100">
                            </a>
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="play-btn popup-video overlay-center"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="video-box1">
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="popup-video">
                                <img src="<?= base_url(); ?>/zoker/assets/img/video/video-img-1-2.jpg" alt="Video Image" class="w-100">
                            </a>
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="play-btn popup-video overlay-center"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="video-box1">
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="popup-video">
                                <img src="<?= base_url(); ?>/zoker/assets/img/video/video-img-1-3.jpg" alt="Video Image" class="w-100">
                            </a>
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="play-btn popup-video overlay-center"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="video-box1">
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="popup-video">
                                <img src="<?= base_url(); ?>/zoker/assets/img/video/video-img-1-4.jpg" alt="Video Image" class="w-100">
                            </a>
                            <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="play-btn popup-video overlay-center"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
    Match Area
    ==============================-->
        <section class="vs-match-wrapper vs-match-layout1 space-top space-bottom">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-md-3 col-xl-4">
                        <div class="section-title">
                            <span class="sub-title1">trending match</span>
                            <h2 class="sec-title1 text-white">matchs</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-xl-8 text-center text-lg-end">
                        <div class="filter-menu-style1 filter-menu-active mb-70">
                            <button data-filter="*" class="active">All</button>
                            <button data-filter=".csgo"> csgo</button>
                            <button data-filter=".dota">dota 2</button>
                            <button data-filter=".fortnite">fortnite</button>
                            <button data-filter=".pubg">pubg</button>
                            <button data-filter=".free">free fire</button>
                        </div>
                    </div>
                </div>
                <div class="mb-15 filter-active row">
                    <div class="col-md-6 col-lg-12 grid-item pubg fortnite csgo ">
                        <div class="vs-match">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-3">
                                    <div class="match-logo">
                                        <iframe width="560" height="115" src="https://www.youtube.com/embed/aCghEsTPhdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="match-about pl-35">
                                        <h3 class="team-name h5 text-white mb-1 mb-lg-2"><a href="team-details.html">esports mirax</a> <span class="text-theme">vs</span> <a href="team-details.html">werewolf</a></h3>
                                        <p class="match-date mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="match-date mb-0">December 25, 2021 4:00 PM</p>
                                    </div>
                                </div>
                                <div class="col-auto col-xl-2 text-end">
                                    <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="icon-btn1 popup-video"><i class="fab fa-twitch"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 grid-item pubg fortnite free ">
                        <div class="vs-match">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-3">
                                    <div class="match-logo">
                                        <iframe width="560" height="115" src="https://www.youtube.com/embed/aCghEsTPhdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="match-about pl-35">
                                        <h3 class="team-name h5 text-white mb-1 mb-lg-2"><a href="team-details.html">esports mirax</a> <span class="text-theme">vs</span> <a href="team-details.html">werewolf</a></h3>
                                        <p class="match-date mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="match-date mb-0">December 25, 2021 4:00 PM</p>
                                    </div>
                                </div>
                                <div class="col-auto col-xl-2 text-end">
                                    <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="icon-btn1 popup-video"><i class="fab fa-twitch"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 grid-item pubg fortnite csgo ">
                        <div class="vs-match">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-3">
                                    <div class="match-logo">
                                        <iframe width="560" height="115" src="https://www.youtube.com/embed/aCghEsTPhdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="match-about pl-35">
                                        <h3 class="team-name h5 text-white mb-1 mb-lg-2"><a href="team-details.html">esports mirax</a> <span class="text-theme">vs</span> <a href="team-details.html">werewolf</a></h3>
                                        <p class="match-date mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="match-date mb-0">December 25, 2021 4:00 PM</p>
                                    </div>
                                </div>
                                <div class="col-auto col-xl-2 text-end">
                                    <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="icon-btn1 popup-video"><i class="fab fa-twitch"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 grid-item  fortnite csgo dota">
                        <div class="vs-match">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-3">
                                    <div class="match-logo">
                                        <iframe width="560" height="115" src="https://www.youtube.com/embed/aCghEsTPhdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="match-about pl-35">
                                        <h3 class="team-name h5 text-white mb-1 mb-lg-2"><a href="team-details.html">esports mirax</a> <span class="text-theme">vs</span> <a href="team-details.html">werewolf</a></h3>
                                        <p class="match-date mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="match-date mb-0">December 25, 2021 4:00 PM</p>
                                    </div>
                                </div>
                                <div class="col-auto col-xl-2 text-end">
                                    <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="icon-btn1 popup-video"><i class="fab fa-twitch"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 grid-item pubg  csgo dota">
                        <div class="vs-match">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-3">
                                    <div class="match-logo">
                                        <iframe width="560" height="115" src="https://www.youtube.com/embed/aCghEsTPhdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="match-about pl-35">
                                        <h3 class="team-name h5 text-white mb-1 mb-lg-2"><a href="team-details.html">esports mirax</a> <span class="text-theme">vs</span> <a href="team-details.html">werewolf</a></h3>
                                        <p class="match-date mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="match-date mb-0">December 25, 2021 4:00 PM</p>
                                    </div>
                                </div>
                                <div class="col-auto col-xl-2 text-end">
                                    <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="icon-btn1 popup-video"><i class="fab fa-twitch"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 grid-item pubg fortnite  dota">
                        <div class="vs-match">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-3">
                                    <div class="match-logo">
                                        <iframe width="560" height="115" src="https://www.youtube.com/embed/aCghEsTPhdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="match-about pl-35">
                                        <h3 class="team-name h5 text-white mb-1 mb-lg-2"><a href="team-details.html">esports mirax</a> <span class="text-theme">vs</span> <a href="team-details.html">werewolf</a></h3>
                                        <p class="match-date mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="match-date mb-0">December 25, 2021 4:00 PM</p>
                                    </div>
                                </div>
                                <div class="col-auto col-xl-2 text-end">
                                    <a href="https://www.youtube-nocookie.com/embed/uoonAnmKQhI" class="icon-btn1 popup-video"><i class="fab fa-twitch"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--==============================
        Blog Area
    ==============================-->
    <section class="vs-blog-wrapper bg-dark vs-blog-layout1 link-inherit space-top space-md-bottom" id="blog">
        <div class="container">
            <div class="section-title  ">
                <span class="sub-title1">blog</span>
                <h2 class="sec-title1 text-white">news feeds</h2>
            </div>
            <div class="row vs-carousel arrow-white" data-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true">
                <div class="col-lg-4">
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover">
                            <a href="blog-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/blog/blog-img-1-1.jpg" alt="Blog Image" class="w-100"></a>
                            <div class="blog-category">
                                <a href="blog.html">esports</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title text-white fs-20"><a href="blog-details.html">Hundreds of demonstrator
                                    march against the death</a></h3>
                            <div class="blog-meta text-light fs-xs">
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i>June 21, 2021</a>
                                <a href="blog.html"><i class="fal fa-user"></i>Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover">
                            <a href="blog-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/blog/blog-img-1-2.jpg" alt="Blog Image" class="w-100"></a>
                            <div class="blog-category">
                                <a href="blog.html">Action</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title text-white fs-20"><a href="blog-details.html">Lorem ipsum dolor sectetur adipiscing print have</a></h3>
                            <div class="blog-meta text-light fs-xs">
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i>Augest 21, 2021</a>
                                <a href="blog.html"><i class="fal fa-user"></i>Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover">
                            <a href="blog-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/blog/blog-img-1-3.jpg" alt="Blog Image" class="w-100"></a>
                            <div class="blog-category">
                                <a href="blog.html">Classic</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title text-white fs-20"><a href="blog-details.html">From its medieval origins digital learn graphic or web </a></h3>
                            <div class="blog-meta text-light fs-xs">
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i>March 21, 2021</a>
                                <a href="blog.html"><i class="fal fa-user"></i>Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-blog">
                        <div class="blog-image image-scale-hover">
                            <a href="blog-details.html"><img src="<?= base_url(); ?>/zoker/assets/img/blog/blog-img-1-4.jpg" alt="Blog Image" class="w-100"></a>
                            <div class="blog-category">
                                <a href="blog.html">Modern</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title text-white fs-20"><a href="blog-details.html">The purpose of lorem ipsum natural looking century </a></h3>
                            <div class="blog-meta text-light fs-xs">
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i>Feb 21, 2021</a>
                                <a href="blog.html"><i class="fal fa-user"></i>Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Players Area
    ============================== -->
    <section class="vs-member-area vs-member-layout1 bg-light-dark space-top space-md-bottom">
        <div class="container">
            <div class="section-title">
                <span class="sub-title1">Team</span>
                <h2 class="sec-title1 text-white">Pro Players</h2>
            </div>
            <div class="row vs-carousel arrow-white" data-arrows="true" data-xl-arrows="true" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="1" data-slide-show="4">
                <div class="col-lg-3">
                    <div class="vs-member">
                        <div class="member-img">
                            <a href="player-details.html" target="blank"><img src="<?= base_url(); ?>/zoker/assets/img/member/member-1-1.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <span class="degi">cs:go</span>
                            <h3 class="member-name fs-20"><a href="player-details.html" target="blank">shroud</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-member">
                        <div class="member-img">
                            <a href="player-details.html" target="blank"><img src="<?= base_url(); ?>/zoker/assets/img/member/member-1-2.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <span class="degi">pubg</span>
                            <h3 class="member-name fs-20"><a href="player-details.html" target="blank">maxdom</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-member">
                        <div class="member-img">
                            <a href="player-details.html" target="blank"><img src="<?= base_url(); ?>/zoker/assets/img/member/member-1-1.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <span class="degi">codm</span>
                            <h3 class="member-name fs-20"><a href="player-details.html" target="blank">emric</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-member">
                        <div class="member-img">
                            <a href="player-details.html" target="blank"><img src="<?= base_url(); ?>/zoker/assets/img/member/member-1-2.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <span class="degi">fortnite</span>
                            <h3 class="member-name fs-20"><a href="player-details.html" target="blank">shroud</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-member">
                        <div class="member-img">
                            <a href="player-details.html" target="blank"><img src="<?= base_url(); ?>/zoker/assets/img/member/member-1-3.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <span class="degi">pubg</span>
                            <h3 class="member-name fs-20"><a href="player-details.html" target="blank">ninja</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-member">
                        <div class="member-img">
                            <a href="player-details.html" target="blank"><img src="<?= base_url(); ?>/zoker/assets/img/member/member-1-4.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <span class="degi">dota ii</span>
                            <h3 class="member-name fs-20"><a href="player-details.html" target="blank">emotics</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vs-member">
                        <div class="member-img">
                            <a href="player-details.html" target="blank"><img src="<?= base_url(); ?>/zoker/assets/img/member/member-1-5.png" class="w-100" alt="Member Image"></a>
                        </div>
                        <div class="member-content">
                            <span class="degi">pubg</span>
                            <h3 class="member-name fs-20"><a href="player-details.html" target="blank">shroud</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Brand Area
    ==============================-->
    <div class="vs-brand-wrapper bg-dark space">
        <div class="container">
            <div class="row vs-carousel arrow-white" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="4" data-sm-slide-show="3" data-xs-slide-show="2" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-1.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-2.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-3.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-4.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-5.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-1.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-2.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-3.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-4.png" alt="Brand Image">
                </div>
                <div class="col-xl-2 text-center">
                    <img src="<?= base_url(); ?>/zoker/assets/img/brand/brand-5.png" alt="Brand Image">
                </div>
            </div>
        </div>
    </div>
    <!--==============================
      Contact Form Area
    ==============================-->
    <section class="vs-contact-wrapper bg-light-dark space">
        <div class="container">
            <div class="section-title">
                <span class="sub-title1">Contact</span>
                <h2 class="sec-title1 text-white">Get in touch</h2>
            </div>
            <form action="mail.php" method="POST" class="contact-form contact-form-style1 form-dark px-80 py-80">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label class="text-white" for="name">Enter Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="col-lg-6 form-group">
                        <label class="text-white" for="email">Enter Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="col-12 form-group">
                        <label class="text-white" for="message">Enter Message</label>
                        <textarea class="form-control" id="message" rows="11" cols="50" name="message" placeholder="Your Message"></textarea>
                        <i class="fal fa-pencil-alt"></i>
                    </div>
                    <div class="col-12 form-group mb-0 text-center">
                        <button type="submit" class="vs-btn gradient-btn ">Submit Your Quote</button>
                        <p class="form-messages text-white mt-20 mb-0 text-center"></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
