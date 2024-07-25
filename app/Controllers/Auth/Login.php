<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\Account;

class Login extends BaseController
{
    private $accounts;
    private $session;

    public function __construct()
    {
        helper(['form']);    
        $this->accounts = new Account();
        $this->session = session();
    }

    public function index(): string
    {
        $data = [
            "page_title" => "Authentication"
        ];
        return view('auth/login', $data);
    }


    public function authenticate() {

        $data = [];


        if($this->request->getMethod() == "POST") {

            $rules = [
                "username" => "required",
                "password" => "required"
            ];

            if($this->validate($rules)) {

                $username = $this->request->getVar('username');
                $password  = $this->request->getVar('password');

                // Verify username
                $usernameCheck = $this->accounts->where('username', $username)->get();

                if(count($usernameCheck->getResult()) == 1) {

                   $account = $usernameCheck->getRow();
         
                    if(password_verify($password, $account->password)) {

                        if($account->account_type == "admin") {

                            $this->session->set(["logged_user" => $account->id, "logged_user_role" => $account->account_type]);
                            $this->session->setFlashdata('Loggin Successful');
                            return redirect()->to(route_to('admin.dashboard'));
                        }

                        elseif($account->account_type == "clerk") {
                            // TODO
                        }

                        elseif($account->account_type == "cashier") {
                            // TODO
                        }

                        else {
                            $this->session->delete();
                            $this->session->setFlashdata('error', "Unexpected Error! Invalid Login issues");
                            return redirect()->to(route_to('login'));
                        }

                    }
                    else {

                        $this->session->setFlashdata('error', "Invaid Account Username or Password");
                        return redirect()->to(route_to('login'));

                    }


                }else {
                    $this->session->setFlashdata('error', "Invalid Account Username or Password");
                    return redirect()->to(route_to('login'));
                }
               
                
            }
            else {
                $data['validation'] = $this->validator;
            }
        }
    }

    public function verifyEmail()
    {

    }
}
