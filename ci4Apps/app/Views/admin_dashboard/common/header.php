<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/ico" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <title><?= $siteInfo['title']; ?> &mdash; <?= $activeMenu; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(''); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(''); ?>/css/sb-admin-2.min.css" rel="stylesheet">
     <link href="<?= base_url(''); ?>/css/cart1.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/summernote/summernote-image-list.min.css') ?>">   
    <style type="text/css">
        /*SUMMERNOTE STYLE*/
        .note-editable{ background: #fff !important;  }
        .note-editor .dropdown-toggle::after{ all:unset; }
        .note-editor .note-dropdown-menu{ box-sizing: content-box; }
        .note-editor .note-modal-footer{ box-sizing: content-box;}
    </style>    
    <style type="text/css">

.upload {
  &__box {
    padding: 40px;
  }
  &__inputfile {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
  
  &__btn {
    display: inline-block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 116px;
    padding: 5px;
    transition: all .3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #4045ba;
    border-color: #4045ba;
    border-radius: 10px;
    line-height: 26px;
    font-size: 14px;
    
    &:hover {
      background-color: unset;
      color: #4045ba;
      transition: all .3s ease;
    }
    
    &-box {
      margin-bottom: 10px;
    }
  }
  
  &__img {
    &-wrap {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }
    
    &-box {
      width: 200px;
      padding: 0 10px;
      margin-bottom: 12px;
    }
    
    &-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;

        &:after {
          content: '\2716';
          font-size: 14px;
          color: white;
        }
      }
  }
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" style="height:70; width:70px;">
                <div class="sidebar-brand-text mx-3"><?= $siteInfo['name']; ?></div>
            </a>

            <hr class="sidebar-divider my-0">
            <li class="nav-item <?php if($activeMenu=='Dashboard'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('Dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

<?php if (strpos(session('active_functions'), 'Site Settings') !== false) { ?>
            <li class="nav-item <?php if($activeMenu=='Siteinfo'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('Site-settings'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Site Settings</span></a>
            </li>
<?php } ?>   

<?php if (strpos(session('active_functions'), 'Business Settings') !== false) { ?>                     
            <li class="nav-item <?php if($activeMenu=='Business Settings'){ echo 'active'; }?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBusiness"
                    aria-expanded="true" aria-controls="collapseBusiness">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Business Settings</span>
                </a>
                <div id="collapseBusiness" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Business Settings:</h6>
                        <a class="collapse-item" href="<?= base_url('homepage-options'); ?>">Home Page Settings</a>
                        <a class="collapse-item" href="<?= base_url('Ticker-settings'); ?>">Tickers</a>
                        <a class="collapse-item" href="<?= base_url('third-grid'); ?>">3<sup>rd</sup> Grid</a>
                        <a class="collapse-item" href="<?= base_url('banner-settings'); ?>">Banner Options</a>
                    </div>
                </div>
            </li>
<?php } ?>   

<?php if (strpos(session('active_functions'), 'Social Settings') !== false) { ?>
            <li class="nav-item <?php if($activeMenu=='Social'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('Social-media-settings'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Social Settings</span></a>
            </li>
<?php } ?> 

<?php if (strpos(session('active_functions'), 'Slider') !== false) { ?>           
            <li class="nav-item <?php if($activeMenu=='Slider'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('Slider-settings'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Slider</span></a>
            </li> 
<?php } ?>   
<?php if (strpos(session('active_functions'), 'Message Options') !== false) { ?>           
            <li class="nav-item <?php if($activeMenu=='Message'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('Contact-us-options'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Messages</span></a>
            </li> 
<?php } ?> 
<?php if (strpos(session('active_functions'), 'Menu Settings') !== false) { ?>           
            <li class="nav-item <?php if($activeMenu=='Menu'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('Menu-settings'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Menu Settings</span></a>
            </li> 
<?php } ?> 
<?php if (strpos(session('active_functions'), 'Subscribe Settings') !== false) { ?>           
            <li class="nav-item <?php if($activeMenu=='Subscribe'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('Subscribe-Settings'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Subscribers</span></a>
            </li> 
<?php } ?>
 

<hr class="sidebar-divider">
<div class="sidebar-heading"> eCommerce Options ! </div>
<?php if (strpos(session('active_functions'), 'Product Options') !== false) { ?>  
            
            <li class="nav-item <?php if($activeMenu=='sales'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('dashboard-sale'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sale</span></a>
            </li>  

            <li class="nav-item <?php if($activeMenu=='Product'){ echo 'active'; }?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colpsProduct"
                    aria-expanded="true" aria-controls="colpsProduct">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Product</span>
                </a>
                <div id="colpsProduct" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cat & Product Optoins:</h6>
                        <a class="collapse-item" href="<?= base_url('product-category'); ?>">Product Categories </a>
                        <a class="collapse-item" href="<?= base_url('product-size'); ?>">Product Sizes </a>
                        <a class="collapse-item" href="<?= base_url('product-list'); ?>">Product List </a>
                        <a class="collapse-item" href="<?= base_url('product-add'); ?>">Add Product</a>
                    </div>
                </div>
            </li>
            <li class="nav-item <?php if($activeMenu=='stock'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('stock-Settings'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Stocks</span></a>
            </li>
            <li class="nav-item <?php if($activeMenu=='orders'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('orders-Settings'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Orders</span></a>
            </li>
            <li class="nav-item <?php if($activeMenu=='reports'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('reports'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reports</span></a>
            </li> 
            <li class="nav-item <?php if($activeMenu=='shipping'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('shipping-charge'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Shipping Charge</span></a>
            </li>  
            <li class="nav-item <?php if($activeMenu=='shop'){ echo 'active'; }?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colpsSizeGuide"
                    aria-expanded="true" aria-controls="colpsSizeGuide">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Shop Settings</span>
                </a>
                <div id="colpsSizeGuide" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('size-guide-settings'); ?>">Product Size Guide </a>
                    </div>
                </div>
            </li>             
<?php } ?> 


<!-- Divider -->
<hr class="sidebar-divider">   
<?php if (strpos(session('active_functions'), 'Pages') !== false) { ?>  
            <div class="sidebar-heading"> Blog Options </div>                     
            <li class="nav-item <?php if($activeMenu=='Page'){ echo 'active'; }?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                    aria-expanded="true" aria-controls="collapseBlog">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pages</span>
                </a>
                <div id="collapseBlog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Page Options:</h6>
                        <a class="collapse-item" href="<?= base_url('Page-settings'); ?>">Page List</a>
                        <a class="collapse-item" href="<?= base_url('Page-add'); ?>">Add Page</a>
                    </div>
                </div>
            </li>
<?php } ?>  

<!-- Nav Item - Utilities Collapse Menu -->
<?php if (strpos(session('active_functions'), 'Posts') !== false) { ?>                      
            <li class="nav-item <?php if($activeMenu=='Posts'){ echo 'active'; }?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colpsPost"
                    aria-expanded="true" aria-controls="colpsPost">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Posts</span>
                </a>
                <div id="colpsPost" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Category & Post Optoins:</h6>
                        <a class="collapse-item" href="<?= base_url('Category-settings'); ?>">Categories</a>
                        <a class="collapse-item" href="<?= base_url('Post-options'); ?>">Post List</a>
                        <a class="collapse-item" href="<?= base_url('Post-add'); ?>">Add Post</a>
                    </div>
                </div>
            </li> 
<?php } ?>                        
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Area !
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
<?php if (strpos(session('active_functions'), 'User Options') !== false) { ?>         
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Users</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="<?= base_url('users'); ?>">Uesr List</a>
                        <a class="collapse-item" href="<?= base_url('user-add'); ?>">Add User</a>
                    </div>
                </div>
            </li>
<?php } ?>             


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?= base_url(); ?>/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Aveen Pro</strong> <br/>For<br/> e-commerce</p>
                <a class="btn btn-success btn-sm" href="https://aveenirit.com/">Upgrade to Pro!</a>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
<!--                     <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
<!--                         <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> -->

                        <!-- Nav Item - Alerts -->
<?php if(session('role')=='ADMIN' OR session('role')=='SUPERADMIN'){ ?> 
                        <li class="nav-item dropdown no-arrow mx-1">
<!--                             <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Login & Logout Status.
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">Login Success!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        Trying to Login!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-danger">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Loging Out.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
<?php } ?>                        
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
<!--                             <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">7</span>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
<!--                                 <h6 class="dropdown-header"> Message Center </h6> -->
<!-- 
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                 -->
<!-- 
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                 -->
<!-- 
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                 -->
<!-- 
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                 -->
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session('username'); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url(); ?>/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('profile'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="<?= base_url('profile-password'); ?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Change Password
                                </a>
<!--                                 
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
 -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->