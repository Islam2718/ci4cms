<?php 
namespace App\Models;
use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'tbl_contact';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'email', 'first_name', 'last_name','subject', 'message', 'status','created_at'
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
