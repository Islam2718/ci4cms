<?php 
namespace App\Models;
use CodeIgniter\Model;

class SocialModel extends Model
{
    protected $table = 'tbl_social';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id', 'title', 'ux_type', 'ux_html', 'link_url', 'status','created_at','updated_at'
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
