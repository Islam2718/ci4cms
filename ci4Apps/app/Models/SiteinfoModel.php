<?php 
namespace App\Models;
use CodeIgniter\Model;

class SiteinfoModel extends Model
{
    protected $table = 'tbl_siteinfo';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'title', 'name', 'email', 'phone', 'address','description', 'logo_header','logo_footer', 'icon', 'size_guide','copyright', 'web_link', 'map_html', 'meta_key','meta_des', 'meta_schema','license', 'status','created_at','updated_at'
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
