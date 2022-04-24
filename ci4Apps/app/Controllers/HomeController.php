<?php
namespace App\Controllers;
use CodeIgniter\Controller; 

use App\Models\SiteinfoModel; 
use App\Models\SocialModel;
use App\Models\SliderModel;
use App\Models\ContactModel;
use App\Models\PageModel;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\MenuModel;
use App\Models\GalleryModel;
use App\Models\LandingModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\SubscribeModel;
use App\Models\TickerModel;
use App\Models\UserModel;
use App\Models\OrderModel;
use App\Models\ThirdgridModel;
use App\Models\BannerModel;
use App\Models\ShippingchargeModel;

class HomeController extends BaseController
{
    // private $facebook=NULL; 
    // private $fb_helper=NULL;
    
    
    public function __construct(){
        //parent::__construct();
        helper(['form', 'url']);
        
    }

/*
    essential methods and page template needed 
    -------------------------
    1. index - default of this apps 
    2. post category - category list or grid will show 
    3. post category details - category title, description and related post grid/list will show using thumb/card/list. Using category ID
    4. post details - post details will show by ID
    
    6. Product category - Product category will show using list/grid/card. 
    7. Product category Details - product category details will show using Product Category ID - list/grid/card. 
    8. Product Details - Product will show using product ID. 

    9. Template: 
        0. Index page template. 
        1. post Category page template. 
        2. post category details page template. 
        3. product category page template. 
        4. product category page template. 
        5. product details page template. 

    10. Additional page template.         
        a. contact us template. 
        b. simple page template. 
        c. checkout page template. 
        d. Invoice template. 
        e. customer dashboard template. 
        f. customer profile template. 
        g. customer order list template. 
        h. customer order details template. 


*/ 
    /* | Default Home page | */
    public function index()
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel(); 
        $menuModel = new MenuModel(); 
        $sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 
        $thirdgridModel = new ThirdgridModel(); 
        $bannerModel = new BannerModel(); 

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
 
        ); 

        echo view('templates/header',$data); 
        echo view('templates/home',$data);  
        echo view('templates/footer',$data); 
    }

    /* | product by category Home page | */
    public function productPageMethod($key)
    {
        $siteinfoModel = new SiteinfoModel(); 
        $socialModel = new SocialModel();  
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        if($key=='all'){
            $productQry = $productModel->findAll(); 
        }else{
            $productQry = $productModel->where('cat_id',$key)->findAll(); 
        }

        //page load...
        $data = array(
            'title'=> $productCategoryModel->where('id',$key)->first(),
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(), 
            'menuArray' => $menuModel->findAll(), 
            //'sliderArray' => $sliderModel->findAll(),   
            'LandingArray' => $landingModel->where('id',1)->first(), 

            'proCatArray' => $productCategoryModel->findAll(), 
            'productArray' => $productQry,  
            'tickerArray' => $tickerModel->findAll(),            
            
        ); 

        echo view('templates/header',$data); 
        //echo view('templates/slider',$data); 
        echo view('templates/allproducts',$data);  
        echo view('templates/footer',$data); 
    }

    /* | product by category Home page | */
    public function searchProductPageMethod()
    {
        $siteinfoModel = new SiteinfoModel(); 
        $socialModel = new SocialModel();  
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        $search_key = '';                         
        if($this->request->getMethod() == 'post'){
            $search_key = $this->request->getVar('search_key');                         
        }        

        //page load...
        $data = array(
            'title'=> $search_key,
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(), 
            'menuArray' => $menuModel->findAll(),    
            'LandingArray' => $landingModel->where('id',1)->first(), 

            'proCatArray' => $productCategoryModel->findAll(), 
            'productArray' => $productModel->LIKE('title', $search_key)->findAll(),  
            'tickerArray' => $tickerModel->findAll(),            
            
        ); 

        echo view('templates/header',$data); 
        echo view('templates/search_product',$data);  
        echo view('templates/footer',$data); 
    }

    /* | product by category Home page | */
    public function newProductPageMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $socialModel = new SocialModel();   
        $menuModel = new MenuModel();  
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(), 
            'menuArray' => $menuModel->findAll(),    
            'LandingArray' => $landingModel->where('id',1)->first(), 

            'proCatArray' => $productCategoryModel->findAll(), 
            'productArray' => $productModel->orderBy('id','DESC')->findAll(16), 
            'tickerArray' => $tickerModel->findAll(),        
        ); 

        echo view('templates/header',$data); 
        //echo view('templates/slider',$data); 
        echo view('templates/newproducts',$data);  
        echo view('templates/footer',$data); 
    }

    /* | Default Admin Login | */
    public function PageMethod($id)
    {
        $siteinfoModel = new SiteinfoModel(); 
        $socialModel = new SocialModel(); 
        $menuModel = new MenuModel(); 
        $sliderModel = new SliderModel();  
        $pageModel = new PageModel();  
        
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel();        
        $contactModel = new ContactModel(); 
        $tickerModel = new TickerModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email'=> 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('/Page/'.$id));
            }else{ 
                $newData = [
                    'first_name'    => $this->request->getVar('first_name'),
                    'last_name'   => $this->request->getVar('last_name'),
                    'email'   => $this->request->getVar('email'),
                    'subject' => $this->request->getVar('subject'),
                    'message' => $this->request->getVar('message'),
                ]; 
                $contactModel->save($newData);   
                return redirect()->to(base_url('/Page/'.$id));                              
            }
        }

        //page load...
        $data = array(
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(), 
            'menuArray' => $menuModel->findAll(), 
            'sliderArray' => $sliderModel->findAll(),  
            'getPageArrayById' => $pageModel->where('id', $id)->first(), 
            'getAllPageArray'=> $pageModel->findAll(), 

            'LandingArray' => $landingModel->where('id',1)->first(), 

            'proCatArray' => $productCategoryModel->findAll(), 
            'productArray' => $productModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(),            
        ); 


        echo view('templates/header',$data);        
        echo view('templates/'.$data['getPageArrayById']['template'],$data);  
        echo view('templates/footer',$data); 
    }


    public function productDetailsByIdMethod($id){
        $siteinfoModel = new SiteinfoModel(); 
        $socialModel = new SocialModel(); 
        $menuModel = new MenuModel();  
        $pageModel = new PageModel();  
         
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel();        
        $contactModel = new ContactModel(); 
        $tickerModel = new TickerModel(); 

        //page load...
        $data = array(
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(), 
            'menuArray' => $menuModel->findAll(), 
            'getPageArrayById' => $pageModel->where('id', $id)->first(), 
            'getAllPageArray'=> $pageModel->findAll(), 

            // 'LandingArray' => $landingModel->where('id',1)->first(), 

            'proCatArray' => $productCategoryModel->findAll(), 
            //'productArray' => $productModel->findAll(),            
            'productById' => $productModel->where('id', $id)->first(),            
            'productArray' => $productModel->findAll(6), 
            'tickerArray' => $tickerModel->findAll(),            
        ); 


        echo view('templates/header',$data); 
        // echo view('templates/slider',$data);         
        echo view('templates/product_details',$data);  
        echo view('templates/footer',$data); 
    }   

    public function SubscribeMethod(){
        $subscribeModel = new SubscribeModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email'=> 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('/'.$id));
            }else{ 
                $newData = [
                    'email'   => $this->request->getVar('email'),
                ]; 

                $subscribeModel->save($newData);   
                return redirect()->to(base_url('/'));                              
            }
        }
    }
   

    public function ShoppingCart(){
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel(); 
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 
        $userModel = new UserModel(); 

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'userArray' => $userModel->where('id', session('id'))->first(),  

            'proCatArray' => $productCategoryModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(), 
            //'productArray' => $productQry,               
        ); 

        echo view('templates/header',$data); 
        echo view('templates/shopping_cart',$data);  
        echo view('templates/footer',$data);         
    } 
    
    public function ShoppingCartPost(){
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel(); 
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 
        $userModel = new UserModel(); 
        $shippingchargeModel = new ShippingchargeModel(); 


        if($this->request->getMethod() == 'post'){ 
            $rules = [
                'email' => 'required',
                'password' => 'required'
            ];

            $errors = [ 'password' => [ 'validateUser' => 'Invalid Email or Password !' ] ];

            if(! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator; 

                $session = session(); 
                $session->setFlashdata('failed','Login Failed!');                
                return redirect()->to('shopping-cart-post');
            }else{ 
                $user = $userModel->where('email',$this->request->getVar('email'))->first();
                $this->setUserSession($user); 
                
                return redirect()->to('shopping-cart-post');               
            }
        }

        // $fb_permission = ['email'];
        
        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  
            'userArray' => $userModel->where('id', session('id'))->first(),  
            'proCatArray' => $productCategoryModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(),             
            'chargeArray' => $shippingchargeModel->findAll(), 
            // 'fb_btn' => $this->fb_helper->getLoginUrl(base_url('https://melalifestyle.store/shopping-cart-post/authWithFB?'), $fb_permission),
        ); 

        echo view('templates/header',$data); 
        echo view('templates/shopping_cart_post',$data);  
        echo view('templates/footer',$data);         
    } 

    public function authWithFB(){
        
    }

    public function checkoutMethod(){
        $orderModel = new OrderModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email'=> 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('shopping-cart');
            }else{
                $product_thumb = $this->request->getVar('product_thumb'); 
                $product_name = $this->request->getVar('product_name'); 
                $product_size = $this->request->getVar('product_size'); 
                $product_price = $this->request->getVar('product_price'); 
                $product_qty = $this->request->getVar('product_qty'); 
                
                $username = $this->request->getVar('username'); 
                $email = $this->request->getVar('email'); 
                $phone = $this->request->getVar('phone'); 
                $address = $this->request->getVar('address'); 

                //ORDER PREPAIRED... 
                $loop = count($product_name);
                $product_details =''; 
                $total = 0; 
                for($i=0; $i<$loop; $i++){                                        
                     $total = $total+($product_price[$i]*$product_qty[$i]); 
                     $product_thumb[$i] = '<img src="'.$product_thumb[$i].'" style="width:50px; height:50px;">';
                     $product_details .= '<tr><td>'.$product_thumb[$i].'</td><td>'.$product_name[$i].'</td><td>'.$product_price[$i].'</td><td>'.$product_qty[$i].'</td><td>'.$product_price[$i]*$product_qty[$i].'</td></tr>';
                }

                $newData = [
                    'order_id' => 'MB-'.(time() + (7 * 24 * 60 * 60)),
                    'order_type' => $this->request->getVar('order_type'),
                    'delivery_cost' => $this->request->getVar('delivery_cost'),
                    'customer_id' => session('id'),
                    'customer_details' => '<h4>'.$this->request->getVar('username').'</h4> '.$this->request->getVar('email').' &nbsp; '.$this->request->getVar('phone'),
                    'billing_address' => $this->request->getVar('address'),
                    'order_details' => $product_details,
                    'order_total' => $total,
                    'delivery_cost' => $this->request->getVar('charge'),
                    'notes' => $this->request->getVar('notes'),
                    'discount' => 0,
                    'total' => $total,
                ]; 

                if($orderModel->save($newData)){
                    $ins_id = $orderModel->insertID;
                    return redirect()->to('customer-order-confirmation/'.$ins_id);
                }                
            }
        }

    }

    public function CustomerLogin(){
        $siteinfoModel = new SiteinfoModel(); 
        $socialModel = new SocialModel();  
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){ 
            $rules = [
                'email' => 'required',
                'password' => 'required|min_length[6]|max_length[255]|validateUser[email,password]'
            ];

            $errors = [ 'password' => [ 'validateUser' => 'Invalid Email or Password !' ] ];

            if(! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator; 

                $session = session(); 
                $session->setFlashdata('failed','Login Failed!');                
                return redirect()->to('customer-login');
            }else{ 
                $user = $userModel->where('email',$this->request->getVar('email'))->first();
                $this->setUserSession($user); 
                
                return redirect()->to('customer-dashboard');               
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'proCatArray' => $productCategoryModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(), 
            //'productArray' => $productQry,               
        ); 

        echo view('templates/header',$data); 
        echo view('templates/login',$data);  
        echo view('templates/footer',$data);        
    }

    public function CustomerLoginMethodCart(){
        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){ 
            $rules = [
                'email' => 'required',
                'password' => 'required|min_length[6]|max_length[255]|validateUser[email,password]'
            ];

            $errors = [ 'password' => [ 'validateUser' => 'Invalid Email or Password !' ] ];

            if(! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator; 

                $session = session(); 
                $session->setFlashdata('failed','Login Failed!');                
                return redirect()->to('shopping-cart');
            }else{ 
                $user = $userModel->where('email',$this->request->getVar('email'))->first();
                $this->setUserSession($user); 
                
                return redirect()->to('shopping-cart');               
            }
        }     
    }

    // Session settings <- Login method 
    private function setUserSession($user){
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],  
            'email' => $user['email'],
            'phone' => $user['phone'],
            'role' => $user['role'],
            'isLoggedIn' => true,
        ];
        session()->set($data); 
        return true; 
    } 

    public function CustomerRegistrationMethod(){
        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email'=> 'required',
                'password'=> 'required',
                'c_password'=> 'matches[password]',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('customer-login');
            }else{

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'email'    => $this->request->getVar('email'),
                    'role'     => $this->request->getVar('role'),
                    'password' => $this->request->getVar('password'),
                ]; 

                if($userModel->save($newData)){
                    return redirect()->to('customer-login');
                }                
            }
        }
    }

    public function customerDashboard(){
        $siteinfoModel = new SiteinfoModel();
        $socialModel = new SocialModel();   
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        $userModel = new UserModel(); 
        $orderModel = new OrderModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'address'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('customer-dashboard');
            }else{

                $newData = [
                    'address'  => $this->request->getVar('address'),
                ]; 

                if($userModel->where('id', session('id'))->set($newData)->update()){
                    return redirect()->to('customer-dashboard');
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'proCatArray' => $productCategoryModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(),              
            'userArray' => $userModel->where('id',session('id'))->first(),  
            'orderArray' => $orderModel->where('customer_id', session('id'))->orderBy('id','DESC')->findAll(),
        ); 

        echo view('templates/header',$data); 
        echo view('templates/customer_dashboard',$data);  
        echo view('templates/footer',$data);  
    }

    public function customerOrderByID($id){
        $siteinfoModel = new SiteinfoModel();
        $socialModel = new SocialModel();   
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        $userModel = new UserModel(); 
        $orderModel = new OrderModel(); 

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'proCatArray' => $productCategoryModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(),              
            'userArray' => $userModel->where('id',session('id'))->first(),  
            'orderArrayByID' => $orderModel->where('id', $id)->first(),
        ); 

        // echo view('templates/header',$data); 
        echo view('templates/customer_order_details',$data);  
        // echo view('templates/footer',$data);  
    }

    public function customerOrderConfirmationByID($id){
        $siteinfoModel = new SiteinfoModel();
        $socialModel = new SocialModel();   
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        $userModel = new UserModel(); 
        $orderModel = new OrderModel(); 

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'proCatArray' => $productCategoryModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(),              
            'userArray' => $userModel->where('id',session('id'))->first(),  
            'orderArrayByID' => $orderModel->where('id', $id)->first(),
        ); 

        echo view('templates/header',$data); 
        echo view('templates/customer_order_confirmation',$data);  
        echo view('templates/footer',$data);  
    }

    public function changePassword(){

        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'current_password'=> 'required',
                'password'=> 'required',
                'c_password'=> 'matches[password]',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('customer-dashboard');
            }else{

                $newData = [
                    'password' => $this->request->getVar('password'),
                ]; 

                if($userModel->where('email', session('email'))->set($newData)->update()){                    
                    return redirect()->to('customer-dashboard');
                }                
            }
        } 
    }

    public function cusDashboardProfile(){
        $siteinfoModel = new SiteinfoModel();
        $socialModel = new SocialModel();   
        $menuModel = new MenuModel(); 
        //$sliderModel = new SliderModel();   
        $landingModel = new LandingModel(); 
        $productCategoryModel = new ProductCategoryModel(); 
        $productModel = new ProductModel(); 
        $tickerModel = new TickerModel(); 

        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('customer-profile');
            }else{

                $newData = [
                    'firstname'  => $this->request->getVar('firstname'),
                    'lastname'     => $this->request->getVar('lastname'),
                    'username'   => $this->request->getVar('username'),
                    'email'  => $this->request->getVar('email'),
                    'phone'  => $this->request->getVar('phone'),
                ]; 

                if($userModel->where('id', session('id'))->set($newData)->update()){
                    return redirect()->to('customer-profile');
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'proCatArray' => $productCategoryModel->findAll(), 
            'tickerArray' => $tickerModel->findAll(),              
            'userArray' => $userModel->where('id',session('id'))->first(),              
        ); 

        echo view('templates/header',$data); 
        echo view('templates/customer_profile',$data);  
        echo view('templates/footer',$data);  
    }

    public function CustomerLogoutMethod(){
        session()->destroy(); 
        return redirect()->to(base_url('customer-login'));
    }    

}

