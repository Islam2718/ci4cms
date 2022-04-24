<?php 
namespace App\Models;
use CodeIgniter\Model;

class ShippingchargeModel extends Model
{
    protected $table = 'tbl_shipping_charge';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'district', 'charge', 'status','created_at'
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
