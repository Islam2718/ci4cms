<?php
namespace App\Controllers;

class SummernoteController extends BaseController
{
    public function __construct(){
        //parent::__construct();
        helper(['form', 'url']);
    }

    public function uploadImage(){
        if($this->request->getFile('file')){
            $dataFile = $this->request->getFile('file');
            $fileName = 'm_'.time().'_'.$dataFile->getRandomName(); 
            $dataFile->move("uploads/",$fileName);
            echo base_url("/uploads/".$fileName);
        }
    }
    public function removeImage(){
        $src = $this->request->getVar('src'); 
        if($src){
            $file_name = str_replace(base_url()."/", "", $src); 
            if(unlink($file_name)){
                echo "File Deleted";
            }
        }
    }

    public function listImage(){
        $files = array_filter(glob('uploads/*'),'is_file');
        $response = []; 
        foreach ($files as $file) {
            if(strpos($file,"index.html")){
                continue; 
            }
            $response[]= basename($file); 
        }
        header("Content-Type:application/json"); 
        echo json_encode($response);
        die(); 
    }    

}
