<?php 
namespace App\Models;
use CodeIgniter\Model;

class TickerModel extends Model
{
    protected $table = 'tbl_ticker';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'title', 'description', 'link_url', 'status','created_at'
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
