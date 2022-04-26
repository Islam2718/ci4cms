<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$val = ['filter'=>'auth'];
$notVal = ['filter'=>'noauth']; 


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/*| FRONT-END ROUTINGS... |*/
$routes->get('/', 'HomeController::index');
// $routes->match(['get','post'],'Page/(:any)', 'HomeController::pageMethod/$1');
// $routes->match(['get','post'],'Subscribe', 'HomeController::SubscribeMethod');
// $routes->match(['get','post'],'shopping-cart', 'HomeController::ShoppingCart');
// $routes->match(['get','post'],'shopping-cart-post', 'HomeController::ShoppingCartPost');
// $routes->match(['get','post'],'customer-login', 'HomeController::CustomerLogin');

//customer logins areas.. 
// $routes->match(['get','post'],'customer-registration', 'HomeController::CustomerRegistrationMethod');
// $routes->match(['get','post'],'customer-login', 'HomeController::CustomerLoginMethod');
// $routes->match(['get','post'],'customer-login-shopping-cart', 'HomeController::CustomerLoginMethodCart');
// $routes->match(['get','post'],'customer-logout', 'HomeController::CustomerLogoutMethod');
// $routes->match(['get','post'],'customer-forget-password', 'HomeController::CustomerForgetPasswordMethod');
// $routes->match(['get','post'],'customer-checkout', 'HomeController::checkoutMethod');

//customer dashboard 
// $routes->match(['get','post'],'customer-order-details/(:any)', 'HomeController::customerOrderByID/$1',$val);
// $routes->match(['get','post'],'customer-order-confirmation/(:any)', 'HomeController::customerOrderConfirmationByID/$1',$val);
// $routes->match(['get','post'],'customer-dashboard', 'HomeController::customerDashboard',$val);
// $routes->match(['get','post'],'customer-order', 'HomeController::cusDashboardOrder',$val);
// $routes->match(['get','post'],'customer-address', 'HomeController::cusDashboardAddress',$val);
// $routes->match(['get','post'],'customer-acc', 'HomeController::cusDashboardAcc',$val);
// $routes->match(['get','post'],'customer-profile', 'HomeController::cusDashboardProfile',$val);
// $routes->match(['get','post'],'customer-change-password', 'HomeController::changePassword',$val);

// $routes->match(['get','post'],'products/(:any)', 'HomeController::productPageMethod/$1');
// $routes->match(['get','post'],'new-products', 'HomeController::newProductPageMethod');
// $routes->match(['get','post'],'product-details/(:any)', 'HomeController::productDetailsByIdMethod/$1');
// $routes->match(['get','post'],'search-product', 'HomeController::searchProductPageMethod');

// $routes->match(['get','post'],'gallery', 'HomeController::galleryPageMethod');
// $routes->match(['get','post'],'videos', 'HomeController::videoPageMethod');
// $routes->match(['get','post'],'our-news', 'HomeController::newsPageMethod');
// $routes->match(['get','post'],'career-circular', 'HomeController::circularPageMethod');
// $routes->match(['get','post'],'career-notice', 'HomeController::noticePageMethod');
// $routes->match(['get','post'],'Reports', 'HomeController::reportPageMethod');
// $routes->match(['get','post'],'corporate-brief', 'HomeController::cbfPageMethod');
// $routes->match(['get','post'],'products', 'HomeController::productPageMethod');


/*| USER METHOD - LOGIN, REGISTRATION, FORGET, CRUD, ACCESS|*/
// $routes->match(['get','post'],'admin-login', 'UserController::loginMethod');
// $routes->match(['get','post'],'Register', 'UserController::registerMethod');
// $routes->match(['get','post'],'Forget-password', 'UserController::forgetPasswrod');


/*|CUSTOM SETTINGS.|*/

$routes->match(['get','post'],'third-grid', 'CustomController::thirdgridMethod',$val);
$routes->match(['get','post'],'third-grid-delete/(:any)', 'CustomController::thirdgridDeleteMethod/$1/$2',$val);
$routes->match(['get','post'],'third-grid-edit/(:any)', 'CustomController::thirdgridEditMethod/$1/$2',$val);

$routes->match(['get','post'],'banner-settings', 'CustomController::bannerMethod',$val);
$routes->match(['get','post'],'banner-delete/(:any)', 'CustomController::bannerDeleteMethod/$1/$2',$val);
$routes->match(['get','post'],'banner-edit/(:any)', 'CustomController::bannerEditMethod/$1/$2',$val);

/* |USERS ROUTINGS| */
$routes->match(['get','post'],'admin-login', 'UserController::UserLoginMethod',$notVal);
$routes->match(['get','post'],'logout', 'UserController::UserLogoutMethod',$val);
$routes->match(['get','post'],'register', 'UserController::UserRegisterMethod',$notVal);
$routes->match(['get','post'],'password-forgot', 'UserController::ForgotPasswordMethod',$notVal);
$routes->match(['get','post'],'set-password/(:any)', 'UserController::SetNewPasswordMethod/$1');

//back
/*USER MANAGEMENT SYSTEM*/
$routes->match(['get','post'],'users', 'UserController::UsersMethod',$val);
$routes->match(['get','post'],'user-add', 'UserController::UserAddMethod',$val);
$routes->match(['get','post'],'user-edit/(:any)', 'UserController::UserEditMethod/$1',$val);
$routes->match(['get','post'],'user-remove-by-id/(:any)', 'UserController::UserRemoveById/$1',$val);
$routes->match(['get','post'],'user-access-on/(:any)', 'UserController::AccessON/$1');
$routes->match(['get','post'],'user-access-off/(:any)', 'UserController::AccessOFF/$1',$val);

/*PROFILE MANAGEMENT SYSTEM*/
$routes->match(['get','post'],'profile', 'UserController::profileMethod',$val);
$routes->match(['get','post'],'profile-password', 'UserController::profilePasswordMethod',$val);

/* |ADMIN ROUTINGS..| */
$routes->match(['get','post'],'Dashboard', 'AdminController::dashboardMethod',$val);
$routes->match(['get','post'],'Site-settings', 'SiteinfoController::siteinfoMethod',$val);
$routes->match(['get','post'],'size-guide-settings', 'SiteinfoController::sizeGuideMethod',$val);
$routes->match(['get','post'],'Menu-settings', 'AdminController::menusMethod',$val);
$routes->match(['get','post'],'Menu-to-location', 'AdminController::menuToLocationMethod',$val);
$routes->match(['get','post'],'Menu-location-remove/(:any)', 'AdminController::menuLocationMethodDel/$1',$val);

/* |CONTACT-US ROUTINGS..| */
$routes->match(['get','post'],'Contact-us-options', 'AdminController::contactusMethod',$val);
$routes->match(['get','post'],'Contact-del/(:any)', 'AdminController::contactusMethodDel/$1',$val);

/* |PAGE ROUTINGS..| */
$routes->match(['get','post'],'Page-settings', 'BlogController::pageMethod',$val);
$routes->match(['get','post'],'Page-add', 'BlogController::pageAddMethod',$val);
$routes->match(['get','post'],'Page-edit/(:any)', 'BlogController::pageEditMethod/$1',$val);
$routes->match(['get','post'],'Page-delete/(:any)', 'BlogController::pageDeleteMethod/$1/$2',$val);

/* |SOCIAL LINKS ROUTINGS..| */
$routes->match(['get','post'],'Social-media-settings', 'SiteinfoController::socialMethod',$val);
$routes->match(['get','post'],'social-delete/(:any)', 'SiteinfoController::socialDelMethod/$1',$val);
$routes->match(['get','post'],'social-edit/(:any)', 'SiteinfoController::socialEditMethod/$1',$val);
$routes->match(['get','post'],'social-on/(:any)', 'SiteinfoController::SocAccessON/$1',$val);
$routes->match(['get','post'],'social-off/(:any)', 'SiteinfoController::SocAccessOFF/$1',$val);

/* |SUBSCRIBE ROUTINGS..| */
$routes->match(['get','post'],'Subscribe-Settings', 'SiteinfoController::subscribeMethod',$val);
$routes->match(['get','post'],'subscribe-delete/(:any)', 'SiteinfoController::subscribeDeleteMethod/$1',$val);

/* |SLIDER ROUTINGS..| */
$routes->match(['get','post'],'Slider-settings', 'SiteinfoController::sliderMethod',$val);
$routes->match(['get','post'],'Slider-add', 'SiteinfoController::sliderAddMethod',$val);
$routes->match(['get','post'],'Slider-edit/(:any)', 'SiteinfoController::sliderEditMethod/$1',$val);
$routes->match(['get','post'],'Slider-delete/(:any)', 'SiteinfoController::sliderDeleteMethod/$1/$2',$val);

/*---eCommerce System---*/
$routes->match(['get','post'],'dashboard-sale', 'EcommerceController::SalesMethod',$val);

$routes->match(['get','post'],'product-category', 'EcommerceController::ProductCategoryMethod',$val);
$routes->match(['get','post'],'product-cat-delete/(:any)', 'EcommerceController::ProductCatDeleteMethod/$1/$2',$val);
$routes->match(['get','post'],'product-cat-edit/(:any)', 'EcommerceController::ProductCatEditMethod/$1/$2',$val);

$routes->match(['get','post'],'product-size', 'EcommerceController::ProductSizeMethod',$val);
$routes->match(['get','post'],'product-size-delete/(:any)', 'EcommerceController::ProductSizeDeleteMethod/$1/$2',$val);
$routes->match(['get','post'],'product-size-edit/(:any)', 'EcommerceController::ProductSizeEditMethod/$1',$val);

$routes->match(['get','post'],'product-list', 'EcommerceController::ProductListMethod',$val);
$routes->match(['get','post'],'product-add', 'EcommerceController::ProductAddMethod',$val);
$routes->match(['get','post'],'product-edit/(:any)', 'EcommerceController::ProductEditMethod/$1',$val);
$routes->match(['get','post'],'product-delete/(:any)', 'EcommerceController::ProductDeleteMethod/$1/$2',$val);

$routes->match(['get','post'],'stock-Settings', 'EcommerceController::stockSettingsMethod',$val);
$routes->match(['get','post'],'stock-update-by-id/(:any)', 'EcommerceController::stockUpdateById/$1',$val);
$routes->match(['get','post'],'stock-size-based/(:any)', 'EcommerceController::getSizeBasedQuantity/$1',$val);

$routes->match(['get','post'],'orders-Settings', 'EcommerceController::ordersSettingsMethod',$val);
$routes->match(['get','post'],'reports', 'EcommerceController::reportMethod',$val);
$routes->match(['get','post'],'shipping-charge', 'EcommerceController::ShippingChargeMethod',$val);
$routes->match(['get','post'],'shipping-charge-edit/(:any)', 'EcommerceController::ShippingChargeEditMethod/$1',$val);
$routes->match(['get','post'],'shipping-charge-delete/(:any)', 'EcommerceController::ShippingChargeDeleteMethod/$1',$val);

$routes->match(['get','post'],'remove-gal-from-product/(:any)', 'EcommerceController::removeProductGal/$1/$2/$3');/*crud*/

// $routes->match(['get','post'],'store', 'EcommerceController::StoreMethod',$val);
// $routes->match(['get','post'],'store-edit/(:any)', 'EcommerceController::StoreEditMethod/$1',$val);
// $routes->match(['get','post'],'store-delete/(:any)', 'EcommerceController::StoreDeleteMethod/$1',$val);

/*------------------------------------------------------------------------------------------------*/
/* | BLOG AREAS | */
$routes->match(['get','post'],'Category-settings', 'BlogController::categoryMethod',$val);
$routes->match(['get','post'],'Category-edit/(:any)', 'BlogController::categoryEditMethod/$1',$val);
$routes->match(['get','post'],'Category-delete/(:any)', 'BlogController::catDeleteMethod/$1/$2',$val);

$routes->match(['get','post'],'Post-options', 'BlogController::postMethod',$val);
$routes->match(['get','post'],'Post-add', 'BlogController::postAddMethod',$val);
$routes->match(['get','post'],'Post-delete/(:any)', 'BlogController::postDeleteMethod/$1/$2',$val);
$routes->match(['get','post'],'Post-edit/(:any)', 'BlogController::postEditMethod/$1/$2',$val);

//SUMMERNOTE 
$routes->match(['get','post'],'list-post-image', 'SummernoteController::listImage',$val);
$routes->match(['get','post'],'uploads-post-image', 'SummernoteController::uploadImage',$val);
$routes->match(['get','post'],'remove-post-image', 'SummernoteController::removeImage',$val);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
