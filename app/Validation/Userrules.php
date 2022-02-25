<?php

namespace App\Validation;
use App\Models\User;
class Userrules
{
	// public function custom_rule(): bool
	// {
	// 	return true;
	// }

	public function validateUser(string $str, string $fields, array $data){
		$model = new User();
		$user = $model->where('user_name', $data['user_name'])
					  ->first();
	
		if(!$user)
		  return false;
	
		return password_verify($data['password'], $user['password']);
	  }
}
