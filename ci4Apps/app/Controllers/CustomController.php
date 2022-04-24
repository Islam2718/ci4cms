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
// use App\Models\CareerModel;
use App\Models\PropertyModel;
use App\Models\TeamsModel;
use App\Models\ClientModel;
// use App\Models\GalleryModel;
use App\Models\VideoModel;
use App\Models\NewsModel;
use App\Models\TickerModel;
use App\Models\ThirdgridModel;
use App\Models\BannerModel;

class CustomController extends BaseController
{

    public function __construct(){
        //parent::__construct();
        helper(['form', 'url']);
    }

    
    /* | PROPERTY | */
    public function tickerMethod(){
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $menuModel = new MenuModel();

        $tickerModel = new TickerModel();

        if($this->request->getMethod() == 'post'){
            
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Ticker-settings');
            }else{
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'link_url'  => $this->request->getVar('link_url'),
                ]; 

                if($tickerModel->save($newData)){
                    return redirect()->to('Ticker-settings');
                }             
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 
            'activeMenu' => 'Business Settings',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'tickerArray' => $tickerModel->orderBy('id','DESC')->findAll(),
 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/custom/ticker',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function tickerDelMethod($id){
        $tickerModel = new TickerModel();
        $tickerModel->where('id',$id)->delete();              
        return redirect()->to(base_url('Ticker-settings'));
    }//end of page delete...

    public function tickerEditMethod($id){
        $tickerModel = new TickerModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Ticker-settings');
            }else{                
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'link_url'  => $this->request->getVar('link_url'),
                ]; 

                if($tickerModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('Ticker-settings');
                }
            }
        }
    }


    /* | GALLERY | */
    public function thirdgridMethod(){
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $menuModel = new MenuModel();

        $thirdgridModel = new ThirdgridModel();

        if($this->request->getMethod() == 'post'){
            
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('third-grid');
            }else{
                $thumb = ''; 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'client_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){      
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = ''; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'link_url'  => $this->request->getVar('link_url'),
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($thirdgridModel->save($newData)){
                    return redirect()->to('third-grid');
                }             
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 
            'activeMenu' => 'Business Settings',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'thirdgridArray' => $thirdgridModel->orderBy('id','DESC')->findAll(),
 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/custom/thrid_grid',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function thirdgridDeleteMethod($id,$img){
        $thirdgridModel = new ThirdgridModel();
        $thirdgridModel->where('id',$id)->delete();              
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);
        return redirect()->to(base_url('third-grid'));
    }//end of page delete...

    public function thirdgridEditMethod($id){
        $thirdgridModel = new ThirdgridModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('third-grid');
            }else{                
                $thumb = ''; 
                $old_thumb = $this->request->getVar('old_thumb'); 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'client_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $old_thumb; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'link_url'  => $this->request->getVar('link_url'),
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($thirdgridModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('third-grid');
                }
            }
        }
    }//end here..................................


    // /* | GALLERY | */
    public function bannerMethod(){ 

        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $menuModel = new MenuModel();

        $bannerModel = new BannerModel();

        if($this->request->getMethod() == 'post'){
            
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('banner-settings');
            }else{
                $thumb = ''; 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'client_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){      
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = ''; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'link_url'  => $this->request->getVar('link_url'),
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($bannerModel->save($newData)){
                    return redirect()->to('banner-settings');
                }             
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 
            'activeMenu' => 'Business Settings',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'bannerArray' => $bannerModel->orderBy('id','DESC')->findAll(),
 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/custom/banner',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function bannerDeleteMethod($id,$img){
        $bannerModel = new BannerModel();
        $bannerModel->where('id',$id)->delete();              
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);
        return redirect()->to(base_url('banner-settings'));
    }//end of page delete...

    public function bannerEditMethod($id){
        $bannerModel = new BannerModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('banner-settings');
            }else{                
                $thumb = ''; 
                $old_thumb = $this->request->getVar('old_thumb'); 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'client_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $old_thumb; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'link_url'  => $this->request->getVar('link_url'),
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($bannerModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('banner-settings');
                }
            }
        }
    }//end here..................................

 

}
