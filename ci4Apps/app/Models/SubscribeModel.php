<?php 
namespace App\Models;
use CodeIgniter\Model;

class SubscribeModel extends Model
{
    protected $table = 'tbl_subscribe';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'name', 'email', 'phone', 'description', 'status','created_at'
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
