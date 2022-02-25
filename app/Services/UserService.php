<?php

namespace App\Services;
use App\Models\User;
class UserService
{
    

    // User can register with success response
	public function registerUser($request)
	{
        $model = new User();
        $newData = [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'birthday' => $request['birthday'],
            'address' => $request['address'],
            'phone_number' => $request['phone_number'],
            'user_name' => $request['user_name'],
            'password' => $request['password'],
        ];
       $response =  $model->save($newData);
       $id = $model->insertID; 
       if($response){
           $newData['id']=$id;
           $newData['isLoggedIn']=1;
        return $newData;
       }else{
        return false;
       }

	}

    // User - user_name validate

    public function getUser($user_name)
    {
        $model = new User();
        $user = $model->where('user_name', $user_name)
            ->first();   
        if($user){
            return $user;
        }else{
            return false;
        }
    }

    public function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'birthday' => $user['birthday'],
            'phone_number' => $user['phone_number'],
            'address' => $user['address'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }
 
    
}
