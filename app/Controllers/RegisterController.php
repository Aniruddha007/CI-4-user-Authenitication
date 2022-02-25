<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\User;
use App\Services\UserService;
class RegisterController extends BaseController
{

    public function __construct(){
        $this->userService =new UserService;
    }
	public function index()
	{
        helper(['form']);
        $title = "Register";
		return view('pages/auth/register',compact('title'));
	}
    public function register()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'first_name' => 'required',
                'last_name' => 'required',
                'birthday' => 'required',
                'address' => 'required',
                'phone_number' => 'required|min_length[10]|max_length[10]|is_unique[users.phone_number]',
                'user_name' => 'required|min_length[4]|max_length[100]|is_unique[users.user_name]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
              
            ];
            if (!$this->validate($rules)) {

                return view('pages/auth/register', [
                    "validation" => $this->validator,
                ]);
            } else {
                $session = session();

                try {
                    $newData = [
                        'first_name' => $this->request->getVar('first_name'),
                        'last_name' => $this->request->getVar('last_name'),
                        'birthday' => $this->request->getVar('birthday'),
                        'address' => $this->request->getVar('address'),
                        'phone_number' => $this->request->getVar('phone_number'),
                        'user_name' => $this->request->getVar('user_name'),
                        'password' => $this->request->getVar('password'),
                    ];
                    $user = $this->userService->registerUser($newData);
                    //AutoLogged in
                    $this->userService->setUserSession($user);
                    // Redirecting to dashboard after login
                    return redirect()->to(base_url('dashboard'));    
                } catch (\Throwable $th) {
                    dd($th);
                    $session->setFlashdata('failed', 'Something went wrong. Please try again');
                    return redirect()->back();   
                }
            }
        }
        return view('pages/auth/register');
    }
}