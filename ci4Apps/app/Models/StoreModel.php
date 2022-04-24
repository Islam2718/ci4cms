<?php 
namespace App\Models;
use CodeIgniter\Model;

class StoreModel extends Model
{
    protected $table = 'tbl_store';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'title', 'email','phone', 'address', 'status','created_at','updated_at'
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
