<?php 
namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'tbl_order';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'order_id', 'order_type', 'customer_id', 'customer_details', 'billing_address', 'order_details', 'delivery_cost', 'order_total', 'discount', 'total','notes', 'order_status', 'status','created_at'
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
