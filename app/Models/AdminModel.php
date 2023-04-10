<?php 
namespace App\Model;
use CodeIgniter\Model;
//
class AdminModel extends Model 
{
	protected $table = 'admin';
	protected $allowedFields = ['id','Username','Name','firstname','lastname','email','password','created_at','updated_at'];
	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];
	protected $primarykey = 'id';

	protected function beforeInsert(array $date)
	{
		$date = $this->passwordHash($data);
		$data['data']['create_at'] = date('y-m-d H:i:s');
		return $data;
	}
	protected function beforeUpdate(array $data)
	{
		$data = $this->passwordHash($data);
		$data['data']['update_at'] =date('y-m-d H:i:s');
		return $data;
	}
	protected function passwordHash(array $data)
	{
		if (isset($data['data']['password'])) 
			$data['data']['password']= password_hash($data['data']['password'],PASSWORD_DEFAULT);
		return $data;
		
	} 
}


