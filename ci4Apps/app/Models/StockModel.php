<?php 
namespace App\Models;
use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table = 'tbl_stock';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'product_id', 'stock_key', 'product_size', 'quantity', 'buy_price', 'details', 'status','created_at','updated_at','created_by'
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
