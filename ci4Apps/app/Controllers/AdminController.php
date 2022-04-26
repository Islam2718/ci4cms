<?php
namespace App\Controllers;

use App\Models\SiteinfoModel; 
use App\Models\SocialModel;
use App\Models\SliderModel;
use App\Models\ContactModel;
use App\Models\ContactreplayModel;
use App\Models\PageModel;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\MenuModel;
use App\Models\LandingModel;

use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
use App\Models\UserModel;

class AdminController extends BaseController
{

    public function __construct(){
        //parent::__construct();
        helper(['form', 'url']);
    }

    /* | Default Admin Login | */
    public function index()
    {
        return view('welcome_message');
    }

    /* | Dashboard METHOD | */
    public function dashboardMethod(){
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        $productCategoryModel = new ProductCategoryModel();
        $productModel = new ProductModel();

        $orderModel = new OrderModel();
        $userModel = new userModel();
        $contactModel = new ContactModel();
        
        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'totalProductCat' => $productCategoryModel->countAll(), 
            'totalProduct' => $productModel->countAll(),

            'totalOrder' => $orderModel->countAll(), 
            'totalCustomer' => $userModel->where('role','CUSTOMER')->countAll(), 
            'totalMessage' => $contactModel->countAll(), 

            'activeMenu' => 'Dashboard',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/system/dashboard',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    } 


    /* | CONTACT US / MESSAGE| */
    public function menusMethod(){
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $menuModel = new MenuModel();

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Menu',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'getPageArray' => $pageModel->findAll(), 
            'getCategoryArray' => $categoryModel->findAll(), 
            'getPostArray' => $postModel->findAll(), 

            'getMenusArray' => $menuModel->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/menu_settings',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function menuToLocationMethod(){
        $menuModel = new MenuModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'type'=> 'required',
                'location'=> 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Menu-settings');
            }else{
                $location = $this->request->getVar('location'); 
                $max = count($location);
 
                for($i=0; $i<=$max; $i++){
                    $loc = $location[$i];
                    $newData = [
                        'location'  => $loc,
                        'type'  => $this->request->getVar('type'),
                        'title'  => $this->request->getVar('title'),
                        'menu_html'  => $this->request->getVar('menu_html'),
                        'link_url'     => $this->request->getVar('link_url'),
                    ]; 
                    $menuModel->save($newData);   
                    if($i=$max){
                        return redirect()->to('Menu-settings');
                    }              
                }
                
            }
        }
    }

    public function menuLocationMethodDel($id){
        $menuModel = new MenuModel(); 
        $menuModel->where('id',$id)->delete();              
        return redirect()->to(base_url('Menu-settings'));
    }

    /* | MENU SETTINGS | */
    public function contactusMethod(){
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $socialModel = new SocialModel();
        $contactModel = new ContactModel();
        $contactreplayModel = new ContactreplayModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'to_email'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Contact-us-options');
            }else{
                $newData = [
                    'contact_id'  => $this->request->getVar('contact_id'),
                    'email'  => $this->request->getVar('to_email'),
                    'first_name'    => $this->request->getVar('first_name'),
                    'last_name'   => $this->request->getVar('last_name'),
                    'subject'  => $this->request->getVar('to_subject'),
                    'message'  => $this->request->getVar('to_message'),
                ]; 

                if($contactreplayModel->save($newData)){
                    /*Replay Email to Sender*/                    
                    $email = \Config\Services::email();

                    $email->setFrom('support@islamhossain.info', 'System Email');
                    $email->setTo($newData['email']);
                    // $email->setCC('another@another-example.com');
                    // $email->setBCC('them@their-example.com');

                    $email->setSubject($newData['subject']);
                    $email->setMessage($newData['message']);

                    $email->send();
                    /*---------*/
                    return redirect()->to('Contact-us-options');
                }
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Message',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'contactArray' => $contactModel->orderBy('id','DESC')->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/message_option',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function contactusMethodDel($id){        
        $contactModel = new ContactModel();
        $contactModel->where('id',$id)->delete();              
        return redirect()->to(base_url('Contact-us-options'));
    }//end of withdraw request...

}
