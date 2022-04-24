<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user';
    //protected $primaryKey = 'id'; 
    protected $allowedFields = ['id','username','phone','email','password','firstname','lastname','address','profile', 'role', 'access', 'active_functions', 'status','created_at', 'updated_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate']; 

    protected function beforeInsert(array $data){
    	$data = $this->passwordHash($data); //password convert to md5 
    	return $data; 
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data); //password convert to md5 
    	return $data; 
    }

    protected function passwordHash(array $data){
    	if(isset($data['data']['password'])){
    		$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);  
    	}
    	return $data;   	
    }
}
