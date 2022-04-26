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


class CustomController extends BaseController
{

    public function __construct(){
        //parent::__construct();
        helper(['form', 'url']);
    }
 

}
