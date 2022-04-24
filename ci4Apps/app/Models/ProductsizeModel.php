<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProductsizeModel extends Model
{
    protected $table = 'tbl_product_size';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'title', 'size',  'status','created_at'
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
