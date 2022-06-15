<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $siteInfo['title']; ?></title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Zocker - eSports and Gaming HTML Template">
    <meta name="keywords" content="Zocker - eSports and Gaming HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================== Google Web Fonts ============================== -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>2.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>0.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <link rel="manifest" href="<?= base_url(); ?>/zoker/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--============================== All CSS File ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/zoker/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?= base_url(); ?>/zoker/assets/css/fontawesome.min.css">
    <!-- Layer Slider -->
    <link rel="stylesheet" href="<?= base_url(); ?>/zoker/assets/css/layerslider.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url(); ?>/zoker/assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?= base_url(); ?>/zoker/assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/zoker/assets/css/style.css">
    <!-- Theme Color CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/zoker/assets/css/theme-color1.css">

    <style type="text/css">
        .pagination{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .pagination li a{
                width: 48px;
            height: 48px;
            line-height: 48px;
            display: inline-block;
            background-color: var(--white-color);
            /* color: rgba(var(--theme-color2), 1); */
            -webkit-transition: all ease 0.4s;
            transition: all ease 0.4s;
            color: white;
        }        
    </style>

</head>

<body>

<!--============================== Preloader ==============================-->
<!-- <div class="preloader  ">
  <button class="vs-btn preloaderCls">Cancel Preloader </button>
  <div class="preloader-inner">
      <div class="loader-logo">
          <img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" alt="<?= $siteInfo['name']; ?>">
      </div>
      <div class="loader-wrap pt-4">
          <span class="loader"></span>
      </div>
  </div>
</div> -->
<!--======================== Sticky Header ========================-->
<div class="sticky-header-wrap sticky-header bg-light-dark py-1 py-sm-2 py-lg-1">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-5 col-md-3">
                <div class="logo">
                    <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/zoker/assets/img/logo-2.png" alt="Zocker"></a>
                </div>
            </div>
            <div class="col-7 col-md-9 text-end position-static">
                <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit">
                    <ul>
                        <li>
                            <a href="<?= base_url('/'); ?>">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.html">About</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="index-slick.html">Partners</a></li>
                                <li><a href="index-2.html">Communnity</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('blog'); ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?= base_url('shop'); ?>">Shop</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.html">E-Sports</a>
                            <ul class="sub-menu">
                                <li><a href="<?= base_url('teams'); ?>">Team</a></li>
                                <li><a href="<?= base_url('players'); ?>">Players</a></li>
                                <li><a href="<?= base_url('tournaments'); ?>">Tournaments</a></li>
                                <!-- <li><a href="<?= base_url('rankings'); ?>">Ranking</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
                <button class="vs-menu-toggle text-theme border-theme d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
            </div>
        </div>
    </div>
</div>
<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block  ">
    <div class="sidemenu-content bg-light-dark">
        <button class="closeButton border-theme text-theme bg-theme-hover sideMenuCls"><i class="far fa-times"></i></button>
        <div class="about-box">
            <a href="<?= base_url(); ?>"><img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" alt="Zocker"></a>
            <p class="text-light mt-3"><?= $siteInfo['description']; ?></p>
            <ul class="social-links text-light">
                <?php foreach($socialArray as $socialData){ ?>
                    <li><a href="<?= $socialData['link_url']; ?>"><?= $socialData['ux_html']; ?></a></li>
                <?php } ?>
            </ul>

            <div class="my-40">
                <div class="info-style1">
                    <span class="icon-btn2"><i class="fas fa-map-marker-alt"></i></span>
                    <p class="fs-4 lh-1 fw-medium text-white mb-0">Address</p>
                    <p class="text-white mb-0"><?= $siteInfo['address']; ?></p>
                </div>
                <div class="info-style1">
                    <span class="icon-btn2"><i class="fas fa-phone"></i></span>
                    <p class="fs-4 lh-1 fw-medium text-white mb-0">Get In Touch</p>
                    <p class="text-white mb-0"><a href="tel:<?= $siteInfo['phone']; ?>" class="text-inherit"><?= $siteInfo['phone']; ?></a></p>
                </div>
                <div class="info-style1">
                    <span class="icon-btn2"><i class="fas fa-envelope"></i></span>
                    <p class="fs-4 lh-1 fw-medium text-white mb-0">Mail Us</p>
                    <p class="text-white mb-0"><a href="mailto:example@gmail.com" class="text-inherit"><?= $siteInfo['email']; ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Popup Search Box
============================== -->
<div class="popup-search-box d-none d-lg-block  ">
    <button class="searchClose border-theme text-theme"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" class="border-theme" placeholder="What are you looking for">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
<!--==============================
Mobile Menu
============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area bg-dark">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="<?= base_url(); ?>"><img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" alt="Zocker"></a>
        </div>
        <div class="vs-mobile-menu link-inherit"></div><!-- Menu Will Append With Javascript -->
    </div>
</div>
<!--==============================
    Header Area
==============================-->
<header class="header-wrapper header-layout1 position-absolute top-0 start-0 w-100 z-index-step1">
    <div class="header-top">
        <div class="container">
            <div class="row py-md-2">
                <div class="col-sm-6 d-none d-md-block">
                    <p class="mb-0 fs-xs text-white">Welcome to our <a class="text-inherit" href="<?= base_url('/'); ?>"><u class=" fw-bold"><?= $siteInfo['name']; ?></u></a></p>
                </div>
                <div class="col-sm-6 text-end d-none d-md-block">
                    <ul class="social-links fs-xs text-white">
                      <?php foreach($socialArray as $socialData){ ?>
                        <li><a href="<?= $socialData['link_url']; ?>"><?= $socialData['ux_html']; ?></a></li>
                      <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container position-relative">
            <div class="bg-dark px-50">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-4 d-block d-xl-none py-3 py-xl-0">
                        <div class="header-logo">
                            <a href="<?= base_url(); ?>"><img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" alt="Zocker"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-8 col-xl-5 text-end text-xl-start">
                        <nav class="main-menu menu-style1 mobile-menu-active" data-expand="992">
                            <ul>
                                <li>
                                    <a href="<?= base_url('/'); ?>">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="partners.html">Partners</a></li>
                                        <li><a href="community.html">Communnity</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <?php foreach ($menuArray as $menuData) { if($menuData['location']=='Menu_Location_01'){ ?> 
                                <li><a href="<?= $menuData['link_url']; ?>"><?= $menuData['title']; ?></a></li>
                                <?php } } ?>
                                <li>
                                    <a href="<?= base_url('blog'); ?>">Blog</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('shop'); ?>">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">E-Sports</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('teams'); ?>">Team</a></li>
                                        <li><a href="<?= base_url('players'); ?>">Players</a></li>
                                        <li><a href="<?= base_url('tournaments'); ?>">Tournaments</a></li>
                                        <!-- <li><a href="<?= base_url('rankings'); ?>">Ranking</a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="vs-menu-toggle text-white d-inline-block d-lg-none"> <i class="far fa-bars"></i></button>
                    </div>
                    <div class="col-md-4 col-lg-2 text-center d-none d-xl-block">
                        <div class="header-logo1">
                            <a href="<?= base_url(); ?>"><img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" alt="Zocker"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 d-none d-xl-block">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <a href="#" class="vs-btn outline1 d-none d-xl-inline-block"><i class="fab fa-twitch"></i><strong>Live Streaming</strong></a>
                            <ul class="header-list1 list-style-none ml-30">
                                <li>
                                    <button class="searchBoxTggler"><i class="far fa-search"></i></button>
                                </li>
                                <li>
                                    <button class="sideMenuToggler"><i class="fal fa-grip-horizontal fs-2"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>