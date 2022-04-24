<?php 
namespace App\Models;
use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'tbl_menu';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'location', 'type', 'title', 'menu_html', 'link_url','status','created_at', 'updated_at'
    ];
    
    // protected $beforeInsert = ['beforeInsert'];
    // protected $beforeUpdate = ['beforeUpdate']; 

    // protected function beforeInsert(array $data){    
    //  $data['data']['access'] = 1; 
    //  return $data; 
    // }

    // protected function beforeUpdate(array $data){
    //  return $data; 
    // }
}
