<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_product';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id','cat_id', 'product_code', 'product_color', 'product_size','title', 'description','short_description', 'return_policy', 'size_description', 'shipping_details', 'thumb', 'product_gallery', 'tags', 'media_html', 'buy_price', 'sell_price', 'offer_price', 'unit', 'shipping_inside_city', 'shipping_outside_city', 'shipping_outside_country', 'meta_key', 'meta_des', 'meta_schema', 'status','created_at','updated_at','trend'
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
