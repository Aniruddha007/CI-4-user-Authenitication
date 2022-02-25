<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class User extends Model{
    protected $table = 'users';
    protected $allowedFields        = [
		"last_name",
		"birthday",
		"address",
		"phone_number",
		"user_name",
		"password",
	];

	// Validation
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = ["beforeInsert"];
    

	protected function beforeInsert(array $data)
	{
		$data = $this->passwordHash($data);
		return $data;
	}

	protected function passwordHash(array $data)
	{
		if (isset($data['data']['password'])) {
			$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		}
		return $data;
	}

	
}