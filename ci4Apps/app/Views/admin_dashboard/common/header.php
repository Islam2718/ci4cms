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
                    <i class="fas fa-fw fa-pager"></i>
                    <span>Homepage Settings</span>
                </a>
                <div id="collapseBusiness" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Homepage Settings:</h6>                        
                        <a class="collapse-item" href="#">Custom Links...</a>
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
                    <span>Contact / Inbox</span></a>
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
            <li class="nav-item <?php if($activeMenu=='shipping'){ echo 'active'; }?>">
                <a class="nav-link" href="<?= base_url('shipping-charge'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Shipping Charge</span></a>
            </li>  
            <li class="nav-item <?php if($activeMenu=='shop'){ echo 'active'; }?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clpseReports"
                    aria-expanded="true" aria-controls="clpseReports">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Reports</span>
                </a>
                <div id="clpseReports" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Sales Report</a>
                        <a class="collapse-item" href="#">Stock Report</a>
                        <a class="collapse-item" href="#">Purchase Report</a>
                        <a class="collapse-item" href="#">Most ordered Area</a>
                        <a class="collapse-item" href="#">Most Solded Product</a>
                        <a class="collapse-item" href="#">Top Customer</a>
                    </div>
                </div>
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
                        <a class="collapse-item" href="#">General (sale on/off)</a>
                        <a class="collapse-item" href="#">Shipping</a>
                        <a class="collapse-item" href="#">Discount</a>
                        <a class="collapse-item" href="#">Vat & Tax</a>
                        <a class="collapse-item" href="#">Coupons</a>
                    </div>
                </div>
            </li>             
<?php } ?> 


<!-- Divider -->
<hr class="sidebar-divider">   
<?php if (strpos(session('active_functions'), 'Pages') !== false) { ?>  
            <div class="sidebar-heading"> Walets</div>                     
            <li class="nav-item <?php if($activeMenu=='Page'){ echo 'active'; }?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clpseWalets"
                    aria-expanded="true" aria-controls="clpseWalets">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Walets</span>
                </a>
                <div id="clpseWalets" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Walets Options:</h6>
                        <a class="collapse-item" href="#">Expense (CRUD)</a>
                        <a class="collapse-item" href="#">Income (CRUD)</a>
                        <a class="collapse-item" href="#">Reports</a>
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
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
<!--                     
                    <form
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
                    </form>
 -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <?php if(session('role')=='ADMIN' OR session('role')=='SUPERADMIN'){ ?> 
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog fa-fw"></i>
                            </a>
                        </li>
                        <?php } ?>                     

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
                                <a class="dropdown-item" href="<?= base_url('profile'); ?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile</a>
                                <a class="dropdown-item" href="<?= base_url('profile-password'); ?>"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->