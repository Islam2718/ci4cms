<?php
namespace App\Controllers;

use App\Models\SiteinfoModel; 
use App\Models\SocialModel;
use App\Models\SliderModel;
use App\Models\ContactModel;
use App\Models\PageModel;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\MenuModel;
use App\Models\SubscribeModel;

class SiteinfoController extends BaseController
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

    /* | SITE INFO | */
    public function siteinfoMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'   => 'required',
                'name'    => 'required',
                'email'  => 'required',
                'phone'   => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('Site-settings'));
            }else{

                //ICON DYNAMIC...
                $old_icon = $this->request->getVar('old_icon'); 
                $fileIcon = $this->request->getFile('icon'); 
                if(!empty($fileIcon->getName())){
                    $nameIcon = 'icon_'.time().'_'.$fileIcon->getName();
                    if($fileIcon->move('uploads', $nameIcon)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_icon);    
                        $icon = $nameIcon;
                    }                  
                }else{ $icon = $old_icon; }
                
                //LOGO HEADER DYNAMIC.. 
                $logo_header_old = $this->request->getVar('logo_header_old'); 
                $fileLogoHeader = $this->request->getFile('logo_header'); 
                if(!empty($fileLogoHeader->getName())){
                    $nameLogoHeader = 'logoh_'.time().'_'.$fileLogoHeader->getName();
                    if($fileLogoHeader->move('uploads', $nameLogoHeader)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$logo_header_old);    
                        $logo_header = $nameLogoHeader;
                    }                  
                }else{ $logo_header = $logo_header_old; }    

                //LOGO FOOTER DYNAMIC.. 
                $logo_footer_old = $this->request->getVar('logo_footer_old'); 
                $fileLogoHeader = $this->request->getFile('logo_footer'); 
                if(!empty($fileLogoHeader->getName())){
                    $nameLogoHeader = 'logof_'.time().'_'.$fileLogoHeader->getName();
                    if($fileLogoHeader->move('uploads', $nameLogoHeader)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$logo_footer_old);    
                        $logo_footer = $nameLogoHeader;
                    }                  
                }else{ $logo_footer = $logo_footer_old; }
                /* | DATA UPDATE |*/
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'name'      => $this->request->getVar('name'),
                    'email'     => $this->request->getVar('email'),
                    'phone'     => $this->request->getVar('phone'),
                    'address'   => $this->request->getVar('address'),
                    'description' => $this->request->getVar('description'),

                    'logo_header' => $logo_header,
                    'logo_footer' => $logo_footer,
                    'icon'  => $icon,

                    'copyright' => $this->request->getVar('copyright'),
                    'web_link'  => $this->request->getVar('web_link'),
                    'map_html'  => $this->request->getVar('map_html'),

                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    'meta_schema' => $this->request->getVar('meta_schema'),
                ]; 

                if($siteinfoModel->where('id', 1)->set($newData)->update()){
                    return redirect()->to('Site-settings');
                }
            }
        }
        
        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Siteinfo',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/site_settings',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | SITE INFO | */
    public function sizeGuideMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'size_guide_old'   => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('size-guide-settings'));
            }else{

                //ICON DYNAMIC...
                $size_guide_old = $this->request->getVar('size_guide_old'); 
                $fileIcon = $this->request->getFile('size_guide'); 
                if(!empty($fileIcon->getName())){
                    $nameIcon = 'size_guide_'.time().'_'.$fileIcon->getName();
                    if($fileIcon->move('uploads', $nameIcon)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$size_guide_old);    
                        $size_guide = $nameIcon;
                    }                  
                }else{ $size_guide = $size_guide_old; }


                
                /* | DATA UPDATE |*/
                $newData = [
                    'size_guide' => $size_guide,
                ]; 

                if($siteinfoModel->where('id', 1)->set($newData)->update()){
                    return redirect()->to('size-guide-settings');
                }
            }
        }
        
        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Guide',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),  
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/size_guide_settings',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | SLIDER LIST | */
    public function sliderMethod()
    {
        $siteinfoModel = new SiteinfoModel(); 
        $sliderModel = new SliderModel(); 
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Slider',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'sliderArray' => $sliderModel->orderBy('id','DESC')->findAll(), 
            // 'getAllPageArray'=> $pageModel->findAll(), 
            // 'getAllProductArray'=> $productModel->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/slider_settings',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | SLIDER ADD | */
    public function sliderAddMethod()
    {
        $siteinfoModel = new SiteinfoModel();         
        $sliderModel = new SliderModel();  
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'type'    => 'required',
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Slider-add');
            }else{
                //SLIDER IMAGE UPLOAD WITH COLABORATION OF DATABASE. 
                //$logo_footer_old = $this->request->getVar('logo_footer_old'); 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $nameSliderThumb = 'slider_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $nameSliderThumb)){  
                        //@unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$logo_footer_old);    
                        $thumb = $nameSliderThumb;
                    }                  
                }else{ $thumb = $logo_footer_old; }

                $newData = [
                    'type'      => $this->request->getVar('type'),
                    'title'     => $this->request->getVar('title'),
                    'content'   => $this->request->getVar('content'),
                    'thumb'     => $thumb,
                    'link_url'  => $this->request->getVar('link_url'),
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($sliderModel->save($newData)){
                    $ins_id = $sliderModel->insertID;
                    return redirect()->to('Slider-settings');
                }
            }
        }
        
        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Slider',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'sliderArray' => $sliderModel->findAll(), 
            // 'getAllPageArray'=> $pageModel->findAll(), 
            // 'getAllProductArray'=> $productModel->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/slider_add',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | SLIDER EDIT| */
    public function sliderEditMethod($id)
    {
        $siteinfoModel = new SiteinfoModel();         
        $sliderModel = new SliderModel();  
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'type'    => 'required',
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Slider-edit/'.$id);
            }else{
                
                //SLIDER IMAGE UPLOAD WITH COLABORATION OF DATABASE. 
                $old_thumb = $this->request->getVar('old_thumb'); 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $nameSliderThumb = 'slider_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $nameSliderThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $nameSliderThumb;
                    }                  
                }else{ $thumb = $old_thumb; }

                $newData = [
                    'type'      => $this->request->getVar('type'),
                    'title'     => $this->request->getVar('title'),
                    'content'   => $this->request->getVar('content'),
                    'thumb'     => $thumb,
                    'link_url'  => $this->request->getVar('link_url'),
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($sliderModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('Slider-edit/'.$id);
                }
            }
        }
        
        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Slider',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'sliderArrayById' => $sliderModel->where('id',$id)->first(), 
            // 'getAllPageArray'=> $pageModel->findAll(), 
            // 'getAllProductArray'=> $productModel->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/slider_edit',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | Subscribe METHOD & ADD SOCIAL | */
    public function subscribeMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $socialModel = new SocialModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $subscribeModel = new SubscribeModel();
        
        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 
            
            'activeMenu' => 'Subscribe',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'subscribeArray' => $subscribeModel->orderBy('id','DESC')->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/subscribe_settings',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }    

    public function subscribeDeleteMethod($id){
        $subscribeModel = new SubscribeModel();
        $subscribeModel->where('id',$id)->delete();              
        return redirect()->to(base_url('Subscribe-Settings'));
    }
    

    /* | SOCIAL METHOD & ADD SOCIAL | */
    public function socialMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $socialModel = new SocialModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
                'link_url'   => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Social-media-settings');
            }else{
                $newData = [
                    'title'  => $this->request->getVar('title'),
                    'ux_type'  => $this->request->getVar('ux_type'),
                    'ux_html'  => $this->request->getVar('ux_html'),
                    'link_url'  => $this->request->getVar('link_url'),
                ]; 

                if($socialModel->save($newData)){
                    return redirect()->to('Social-media-settings');
                }
            }
        }
        
        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 
            
            'activeMenu' => 'Social',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'socialArray' => $socialModel->findAll(), 
            // 'getAllPageArray'=> $pageModel->findAll(), 
            // 'getAllProductArray'=> $productModel->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/social_settings',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function SocAccessON($id){
        $socialModel = new SocialModel();
        $newData = ['status' => '0']; 
        if($socialModel->where('id', $id)->set($newData)->update()){              
            return redirect()->to(base_url('Social-media-settings')); 
        }
    }
    public function SocAccessOFF($id){
        $socialModel = new SocialModel();
        $newData = ['status' => '1']; 
        if($socialModel->where('id', $id)->set($newData)->update()){              
            return redirect()->to(base_url('Social-media-settings')); 
        }
    }    

    /* |slider delete| */
    public function sliderDeleteMethod($id,$image){        
        $sliderModel = new SliderModel();
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$image);
        $sliderModel->where('id',$id)->delete();              
        return redirect()->to(base_url('Slider-settings'));
    }//cat cat delete..


    /* | SOCIAL UPDATE METHOD | */
    public function socialEditMethod($id)
    {
        $socialModel = new SocialModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
                'link_url'   => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Social-media-settings');
            }else{                 
                $newData = [
                    'title'  => $this->request->getVar('title'),
                    'ux_type'  => $this->request->getVar('ux_type'),
                    'ux_html'  => $this->request->getVar('ux_html'),
                    'link_url'  => $this->request->getVar('link_url'),
                ]; 

                if($socialModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('Social-media-settings');
                }                
            }
        }
    }

    public function socialDelMethod($id){        
        $socialModel = new SocialModel();
        $socialModel->where('id',$id)->delete();              
        return redirect()->to(base_url('Social-media-settings'));
    }//end of withdraw request...

}
