<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $adminModel = new AdminModel();
    }

    public function index()
    {
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

        return view('admin/login', $data);
    }
}
