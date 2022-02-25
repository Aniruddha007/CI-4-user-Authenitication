<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\User;
use App\Services\UserService;

class LoginController extends BaseController
{
    
    public function __construct(){
        $this->userService =new UserService;
    }

	public function index()
	{
        $title = "Login";
		return view('pages/auth/login',compact('title'));
	}

    public function auth()
    {
       
            if ($this->request->getMethod() == 'post') {
    
                $rules = [
                    'user_name' => 'required|min_length[6]|max_length[50]',
                    'password' => 'required|min_length[8]|max_length[255]|validateUser[user_name,password]',
                ];
                $errors = [
                    'password' => [
                        'validateUser' => "User name or Password don't match",
                    ],
                ];
                
                // check user authentication
                if (!$this->validate($rules, $errors)) {
                   return view('pages/auth/login', [
                    "validation" => $this->validator,
                ]);
                } else {
                    // Check user name is exist and valid
                    $user_name = $this->request->getVar('user_name');
                    $user = $this->userService->getUser($user_name); 
                    if($user){
                            // Stroing session values
                            $this->userService->setUserSession($user);
                            // Redirecting to dashboard after login
                            return redirect()->to(base_url('dashboard'));
                    }else{
                        return view('pages/auth/login', [
                            "validation" => "user name not found",
                        ]);
                    }
                }
            }
            return redirect()->to(base_url('login')); 
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
