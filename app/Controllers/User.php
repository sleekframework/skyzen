<?php

namespace App\Controllers;

use App\Models\UserModel;
use \CodeIgniter\HTTP\RequestInterface;

class User extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->userModel = new UserModel();
    }

    public function login()
    {
        $data = [];
        $data['validation'] = null;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required',
                'password' => 'required'
            ];

            if ($this->validate($rules)) {
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('users/login', $data);
    }

    public function signup()
    {
        $data = [];
        $data['validation'] = null;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'mobile' => 'required',
                'password' => 'required|matches[password]',
                'cpassword' => 'required'
            ];

            if ($this->validate($rules)) {
                $formdata = [
                    'name' => $this->request->getVar('name', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getVar('email', FILTER_SANITIZE_EMAIL),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'mobile' => $this->request->getVar('mobile')
                ];

                if ($this->userModel->save($formdata)) {
                } else {
                    $this->session->setTempdata('error', 'Unable to create an account, Try again', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('users/signup', $data);
    }
}
