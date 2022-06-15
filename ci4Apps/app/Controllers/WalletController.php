<?php
namespace App\Controllers;

use App\Models\SiteinfoModel; 

use App\Models\PageModel;
use App\Models\CategoryModel;
use App\Models\PostModel;
// use App\Models\MenuModel;

class WalletController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    /* | EXPENSE METHOD | */
    public function expenceMethod()
    {
        $siteinfoModel = new SiteinfoModel();

        //page load...
        $data = array(
            'activeMenu' => 'Page',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),             
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/wallet/expense',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    /* | INCOME METHOD | */
    public function incomeMethod()
    {
        $siteinfoModel = new SiteinfoModel();

        //page load...
        $data = array(
            'activeMenu' => 'Page',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),   
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/wallet/income',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }
    /* | REPORT METHOD | */
    public function walletReportMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $pageModel = new PageModel();

        //page load...
        $data = array(
            'activeMenu' => 'Page',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),   
        ); 
        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/wallet/report',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }
}
