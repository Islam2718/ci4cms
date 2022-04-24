<?php 
namespace App\Models;
use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'tbl_page';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id','template', 'title', 'content', 'thumb', 'meta_key', 'meta_des', 'meta_schema','status','created_at','updated_at'
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
