<?php 
namespace App\Models;
use CodeIgniter\Model;

class ContactreplayModel extends Model
{
    protected $table = 'tbl_contact_replay';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'contact_id','email',  'subject', 'message', 'status','created_at'
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
