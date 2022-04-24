<?php 
namespace App\Models;
use CodeIgniter\Model;

class LandingModel extends Model
{
    protected $table = 'tbl_landing';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'field1', 'field2', 'field3', 'field4',  'field5', 'field6','status'
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
