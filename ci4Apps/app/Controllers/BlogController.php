<?php
namespace App\Controllers;

use App\Models\SiteinfoModel; 

use App\Models\PageModel;
use App\Models\CategoryModel;
use App\Models\PostModel;
// use App\Models\MenuModel;

class BlogController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    /* | PAGE LIST FORM | */
    public function pageMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();

        //page load...
        $data = array(
            'activeMenu' => 'Page',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'pageArray'=> $pageModel->orderBy('id','DESC')->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/blogs/page',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | PAGE ADD | */
    public function pageAddMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Page-add');
            }else{
                $namePageThumb = ''; 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'page_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $namePageThumb; }

                $newData = [
                    'template'  => $this->request->getVar('template'),
                    'title'     => $this->request->getVar('title'),
                    'content'   => $this->request->getVar('content'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    'meta_schema' => $this->request->getVar('meta_schema'),
                ]; 

                if($pageModel->save($newData)){
                    $ins_id = $pageModel->insertID;
                    return redirect()->to('Page-edit/'.$ins_id);
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Page',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),   
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/blogs/page_add',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | PAGE EDIT FORM | */
    public function pageEditMethod($id)
    {
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Page-edit/'.$id);
            }else{

                $old_thumb = $this->request->getVar('old_thumb'); 
                var_dump($old_thumb); 
                
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'page_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $this->request->getVar('old_thumb'); }

                $newData = [
                    'template'  => $this->request->getVar('template'),
                    'title'     => $this->request->getVar('title'),
                    'content'   => $this->request->getVar('content'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    'meta_schema' => $this->request->getVar('meta_schema'),
                ]; 

                if($pageModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('Page-edit/'.$id);
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Page',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'pageArrayById' => $pageModel->where('id',$id)->first(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/blogs/page_edit',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function pageDeleteMethod($id,$img){        
        $pageModel = new PageModel();
        $pageModel->where('id',$id)->delete();              
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);
        return redirect()->to(base_url('Page-settings'));
    }//end of page delete...


    /* | POST CATEGORY LIST FORM | */
    public function categoryMethod(){
        $siteinfoModel = new SiteinfoModel();
        $categoryModel = new CategoryModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Category-settings');
            }else{
                $thumb = ''; 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'cat_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = ''; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    //'meta_schema' => $this->request->getVar('meta_schema'),
                ]; 

                if($categoryModel->save($newData)){
                    return redirect()->to('Category-settings');
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Posts',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'categoryArray'=> $categoryModel->orderBy('id','DESC')->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/blogs/category',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function catDeleteMethod($id,$img){
        $categoryModel = new CategoryModel();
        $categoryModel->where('id',$id)->delete();              
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);
        return redirect()->to(base_url('Category-settings'));
    }//end of page delete...

    public function categoryEditMethod($id){
        $siteinfoModel = new SiteinfoModel();
        $categoryModel = new CategoryModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title' => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Category-settings');
            }else{                
                $thumb = ''; 
                $old_thumb = $this->request->getVar('old_thumb'); 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'cat_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $old_thumb; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($categoryModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('Category-settings');
                }
            }
        }
    }

    public function catNameById($id){
        $categoryModel = new CategoryModel();
        $catData = $categoryModel->where('id', $id)->first(); 
        if($catData){ echo $catData['title']; }else{ echo '--'; } 
    }

    public function postMethod(){
        $siteinfoModel = new SiteinfoModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        //page load...
        $data = array(
            'activeMenu' => 'Posts',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'categoryArray'=> $categoryModel->orderBy('id','DESC')->findAll(), 
            'postArray'=> $postModel->orderBy('id','DESC')->findAll(), 
            'getCatName'=> $this, //calling...  
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/blogs/post',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function postAddMethod(){
        $siteinfoModel = new SiteinfoModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Post-add');
            }else{    
                $thumb = ''; 
                //$old_thumb = $this->request->getVar('old_thumb'); 
                
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'post_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        //@unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $thumb; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'content'   => $this->request->getVar('content'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    'meta_schema' => $this->request->getVar('meta_schema'),

                    'tags' => $this->request->getVar('tags'),
                    'cat_id' => $this->request->getVar('cat_id'),
                ]; 

                if($postModel->save($newData)){
                    $ins_id = $postModel->insertID;
                    return redirect()->to('Post-edit/'.$ins_id);
                }
            }
        }
        
        //page load...
        $data = array(
            'activeMenu' => 'Posts',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'categoryArray'=> $categoryModel->orderBy('id','DESC')->findAll(), 
            'postArray'=> $postModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/blogs/post_add',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function postEditMethod($id){
        $siteinfoModel = new SiteinfoModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Post-add');
            }else{    
                $old_thumb = $this->request->getVar('old_thumb'); 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'post_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $old_thumb; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'content'   => $this->request->getVar('content'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    'meta_schema' => $this->request->getVar('meta_schema'),

                    'tags' => $this->request->getVar('tags'),
                    'cat_id' => $this->request->getVar('cat_id'),
                ]; 

                if($postModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('Post-edit/'.$id);
                }
            }
        }
        
        //page load...
        $data = array(
            'activeMenu' => 'Posts',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'categoryArray'=> $categoryModel->orderBy('id','DESC')->findAll(), 
            'postArrayById'=> $postModel->where('id',$id)->first(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/blogs/post_edit',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function postDeleteMethod($id,$img){
        $postModel = new PostModel();
        $postModel->where('id',$id)->delete();              
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);
        return redirect()->to(base_url('Post-options'));
    }//end of page delete...

}
