<?php 
namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'tbl_post';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'title', 'content', 'thumb', 'meta_key','cat_id', 'tags', 'meta_des', 'meta_schema', 'status','created_at'
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
