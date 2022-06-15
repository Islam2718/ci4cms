<?php
namespace App\Controllers;
use CodeIgniter\Controller; 

use App\Models\SiteinfoModel; 
use App\Models\SocialModel; 
use App\Models\SliderModel; 
use App\Models\MenuModel; 
use App\Models\ProductCategoryModel; 
use App\Models\ProductModel; 
use App\Models\CategoryModel; 
use App\Models\PostModel; 

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

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function index()
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'sliderArray' => $sliderModel->findAll(), 

            'menuArray' => $menuModel->findAll(),  
        ); 

        echo view('templates/header',$data); 
        echo view('templates/home',$data);  
        echo view('templates/footer',$data); 
    }

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function shops()
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  
        $ProductCategoryModel = new ProductCategoryModel();  
        $productModel = new ProductModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(), 
            'menuArray' => $menuModel->findAll(),  

            'proCategoryArray' => $ProductCategoryModel->findAll(),        
            'productArray' => $productModel->paginate(10),
            'pager' => $productModel->pager,        
        ); 

        echo view('templates/header',$data); 
        echo view('templates/shops',$data);  
        echo view('templates/footer',$data); 
    }
/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function product_details($id)
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  
        $ProductCategoryModel = new ProductCategoryModel();  
        $productModel = new ProductModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(), 
            'menuArray' => $menuModel->findAll(),  

            'proCategoryArray' => $ProductCategoryModel->findAll(),        
            'productArrayById' => $productModel->where('id', $id)->first(),
        ); 

        echo view('templates/header',$data); 
        echo view('templates/product_details',$data);  
        echo view('templates/footer',$data); 
    }

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function blogs()
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  
        $categoryModel = new CategoryModel();  
        $postModel = new PostModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'categoryrray' => $categoryModel->findAll(),  
            'postArray' => $postModel->paginate(10),
            'pager' => $postModel->pager, 

            'postArrayforSidebar' => $postModel->findAll(),
        ); 

        echo view('templates/header',$data); 
        echo view('templates/blogs',$data);  
        echo view('templates/footer',$data); 
    }

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function blogsDetails($id)
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  
        $categoryModel = new CategoryModel(); 
        $postModel = new PostModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(),  
            'menuArray' => $menuModel->findAll(),  

            'categoryrray' => $categoryModel->findAll(),  
            'postArrayById' => $postModel->where('id',$id)->first(),
            
            'postArrayforSidebar' => $postModel->findAll(),
        ); 

        echo view('templates/header',$data); 
        echo view('templates/blog_details',$data);  
        echo view('templates/footer',$data); 
    }

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    // public function rankings()
    // {
    //     $siteinfoModel = new SiteinfoModel();  
    //     $socialModel = new SocialModel();  
    //     $sliderModel = new SliderModel();  
    //     $menuModel = new MenuModel();  

    //     //page load...
    //     $data = array(
    //         'activeMenu' => 'Home',
    //         'siteInfo' => $siteinfoModel->where('id',1)->first(),  
    //         'socialArray' => $socialModel->where('status',0)->findAll(),  

    //         'menuArray' => $menuModel->findAll(),  
    //     ); 

    //     echo view('templates/header',$data); 
    //     echo view('templates/rankings',$data);  
    //     echo view('templates/footer',$data); 
    // }

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function teams()
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(),  

            'menuArray' => $menuModel->findAll(),  
        ); 

        echo view('templates/header',$data); 
        echo view('templates/teams',$data);  
        echo view('templates/footer',$data); 
    }

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function players()
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(),  

            'menuArray' => $menuModel->findAll(),  
        ); 

        echo view('templates/header',$data); 
        echo view('templates/players',$data);  
        echo view('templates/footer',$data); 
    }

/*
*********************************************************************************************
*********************************************************************************************
*/ 
    /* | Default Home page | */
    public function tournaments()
    {
        $siteinfoModel = new SiteinfoModel();  
        $socialModel = new SocialModel();  
        $sliderModel = new SliderModel();  
        $menuModel = new MenuModel();  

        //page load...
        $data = array(
            'activeMenu' => 'Home',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
            'socialArray' => $socialModel->where('status',0)->findAll(),  

            'menuArray' => $menuModel->findAll(),  
        ); 

        echo view('templates/header',$data); 
        echo view('templates/tournaments',$data);  
        echo view('templates/footer',$data); 
    }

/*
*********************************************************************************************
*********************************************************************************************
*/
    public function CustomerLogoutMethod(){
        session()->destroy(); 
        return redirect()->to(base_url('customer-login'));
    }    

}

