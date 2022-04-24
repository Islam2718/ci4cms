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
use App\Models\UserModel;

class UserController extends BaseController
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

/*USER LOGIN FORM - METHOD*/
    public function UserLoginMethod(){
        $userModel = new UserModel(); 
        $siteinfoModel = new SiteinfoModel(); 

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
                return redirect()->to(base_url('admin-login'));
            }else{ 
                $user = $userModel->where('email',$this->request->getVar('email'))->first();
                $this->setUserSession($user); 
                return redirect()->to('Dashboard');              
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Login',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),
        ); 
        echo view('admin_dashboard/login',$data);  
    }


    public function SetNewPasswordMethod($email=''){
        $userModel = new UserModel(); 
        $siteinfoModel = new SiteinfoModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'password'=> 'required',
                'c_password'=> 'matches[password]',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('set-password/'.$email);
            }else{

                $newData = [
                    'password' => $this->request->getVar('password'),
                ]; 
                //var_dump($newData); die(); 

                if($userModel->where('email', $email)->set($newData)->update()){                    
                    return redirect()->to('login');
                }                
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'Login',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),
            'rec_mail' => $email, 
        ); 
        echo view('admin_dashboard/users/set_password',$data); 
    }


    public function ForgotPasswordMethod(){
        $userModel = new UserModel(); 
        $siteinfoModel = new SiteinfoModel(); 

        if($this->request->getMethod() == 'post'){                 
            $getEmail = $this->request->getVar('email'); 
            $getEmailServer = $userModel->where('email',$getEmail)->first(); 

            if($getEmailServer){
                //email-------------------------------------
                $to = $getEmail; 
                //var_dump(base_url('/uploads/'.$data['siteInfo']['logo'])); die(); 
                $subject = 'Account Confirmation';
                $message ='this is my message';

                $email = \config\Services::email(); 
                $email->setFrom('system@aveenirit.com', 'Test mail'); 
                $email->setTo($to); 
                $email->setSubject($subject); 
                $email->setMessage($message);
                $email->send(); 
                //email end----------------------------------
                $data = array('eStatus' => 'Email Send Successfully - Check Your Email Inbox'); 

                return redirect()->to('set-password/'.$to);
            } 
        }

        //page load...
        $data = array(
            'activeMenu' => 'Login',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),
        ); 
        echo view('admin_dashboard/users/forgot_password',$data); 
    }


    // Session settings <- Login method 
    private function setUserSession($user){
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],            
            'email' => $user['email'],
            'phone' => $user['phone'],
            'role' => $user['role'],
            'active_functions' => $user['active_functions'],
            'isLoggedIn' => true,
        ];
        session()->set($data); 
        return true; 
    } 


    public function UserLogoutMethod(){
        session()->destroy(); 
        return redirect()->to(base_url('admin-login'));
    }


    /* | ALL USER SHOW | */
    public function UsersMethod(){
        $siteinfoModel = new SiteinfoModel();         
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        
        $userModel = new UserModel(); 

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Users',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'userArray' => $userModel->orderBy('id', 'DESC')->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/users/users',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | USER ADD FORM- | */
    public function UserAddMethod()
    {
        $siteinfoModel = new SiteinfoModel();         
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'username'=> 'required',
                'role'=> 'required',
                'password'=> 'required',
                'c_password'=> 'matches[password]',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('user-add');
            }else{
                
                $profile = ''; 
                $fileProfile = $this->request->getFile('profile'); 
                if(!empty($fileProfile->getName())){
                    $nameUserProfile = 'profile_'.time().'_'.$fileProfile->getName();
                    if($fileProfile->move('uploads', $nameUserProfile)){  
                        //@unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $profile = $nameUserProfile;
                    }                  
                }else{ $profile = ''; }


                $func = $this->request->getVar('func'); 
                $max = count($func);
                $myFunc =''; 
                foreach($func as $f){ $myFunc .= $f.' - '; }

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'email'    => $this->request->getVar('email'),
                    'phone'    => $this->request->getVar('phone'),
                    'firstname'=> $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'address'  => $this->request->getVar('address'),
                    'role'     => $this->request->getVar('role'),
                    'active_functions' => $myFunc,
                    'profile' => $profile,
                    'password' => $this->request->getVar('password'),
                ]; 

                if($userModel->save($newData)){
                    $ins_id = $userModel->insertID;
                    return redirect()->to('user-edit/'.$ins_id);
                }                
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Users',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'userArray' => $userModel->orderBy('id', 'DESC')->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/users/user_add',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | USER ADD FORM- | */
    public function UserEditMethod($id)
    {
        $siteinfoModel = new SiteinfoModel();         
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'username'=> 'required',
                'role'=> 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('user-edit/'.$id);
            }else{
                 
                $profile = ''; 
                $old_thumb = $this->request->getFile('old_thumb'); 
                $fileProfile = $this->request->getFile('profile'); 
                if(!empty($fileProfile->getName())){
                    $nameUserProfile = 'profile_'.time().'_'.$fileProfile->getName();
                    if($fileProfile->move('uploads', $nameUserProfile)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $profile = $nameUserProfile;
                    }                  
                }else{ $profile = $old_thumb; }

                $func = $this->request->getVar('func'); 
                $max = count($func);
                $myFunc =''; 
                foreach($func as $f){ $myFunc .= $f.' - '; }

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'email'    => $this->request->getVar('email'),
                    'phone'    => $this->request->getVar('phone'),
                    'firstname'=> $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'address'  => $this->request->getVar('address'),
                    'role'     => $this->request->getVar('role'),
                    'active_functions' => $myFunc,
                    'profile' => $profile,
                    //'password' => $this->request->getVar('password'),
                ]; 

                if($userModel->where('id', $id)->set($newData)->update()){                    
                    return redirect()->to('user-edit/'.$id);
                }                
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Users',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'userArrayById' => $userModel->where('id', $id)->first(), 
            // 'getAllPageArray'=> $pageModel->findAll(), 
            // 'getAllProductArray'=> $productModel->findAll(), 
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/users/user_edit',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function UserRemoveById($id){
        $userModel = new UserModel();  
        $userModel->where('id',$id)->delete();              
        return redirect()->to(base_url('users'));    
    }

    public function AccessON($id){
        $userModel = new UserModel();
        $newData = ['access' => '0']; 
        if($userModel->where('id', $id)->set($newData)->update()){              
            return redirect()->to(base_url('users')); 
        }
    }
    public function AccessOFF($id){
        $userModel = new UserModel();
        $newData = ['access' => '1']; 
        if($userModel->where('id', $id)->set($newData)->update()){              
            return redirect()->to(base_url('users')); 
        }
    }


    public function profileMethod(){ 
        $siteinfoModel = new SiteinfoModel();         
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){

            $rules = [
                'username'=> 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('profile');
            }else{
                $old_profile = $this->request->getVar('old_profile'); 
                $fileProfile = $this->request->getFile('profile'); 
                if(!empty($fileProfile->getName())){
                    $nameUserProfile = 'profile_'.time().'_'.$fileProfile->getName();
                    if($fileProfile->move('uploads', $nameUserProfile)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_profile);    
                        $profile = $nameUserProfile;
                    }                  
                }else{ $profile = $old_profile; }

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'email'    => $this->request->getVar('email'),
                    'phone'    => $this->request->getVar('phone'),
                    'firstname'=> $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'address'  => $this->request->getVar('address'),
                    'profile' => $profile,
                ]; 


                if($userModel->where('id', session('id'))->set($newData)->update()){                    
                    return redirect()->to('profile');
                }                
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Users',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'profileArrayBySession' => $userModel->where('id', session('id'))->first(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/users/profile',$data);  
        echo view('admin_dashboard/common/footer',$data);         
    }
    
    public function profilePasswordMethod(){ 
        $siteinfoModel = new SiteinfoModel();         
        $pageModel = new PageModel();
        $categoryModel = new CategoryModel();
        $postModel = new PostModel();
        $userModel = new UserModel(); 

        if($this->request->getMethod() == 'post'){

            $rules = [
                'password'=> 'required',
                'c_password'=> 'matches[password]',                
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('profile');
            }else{
                $newData = [ 'password' => $this->request->getVar('password') ]; 

                if($userModel->where('id', session('id'))->set($newData)->update()){                    
                    return redirect()->to('profile-password');
                }                
            }
        }

        //page load...
        $data = array(
            'totalPage' => $pageModel->countAll(), 
            'totalCategory' => $categoryModel->countAll(), 
            'totalPost' => $postModel->countAll(), 

            'activeMenu' => 'Users',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'profileArrayBySession' => $userModel->where('id', session('id'))->first(), 
            // 'getAllPageArray'=> $pageModel->findAll(), 
            // 'getAllProductArray'=> $productModel->findAll(), 
        ); 
        // echo '<pre>';
        // var_dump($data['profileArrayBySession']); die(); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/users/profile_password',$data);  
        echo view('admin_dashboard/common/footer',$data);         
    }

}
