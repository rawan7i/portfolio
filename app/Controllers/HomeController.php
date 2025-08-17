<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\SignupModel;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        $data = [];

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'users_name' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Username is required',
                    ],
                ],
                'users_email' => [
                    'rules'  => 'required|valid_email',
                    'errors' => [
                        'valid_email' => 'Please check the Email field. It does not appear to be valid.',
                        'required' => 'You must choose an Email'
                    ]
                ],
                'text_area' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must write a massege'
                    ]
                ],
                'choose' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'you must agree with our privacy policy'
                    ]
                ]
            ];

            if ($this->validate($rules)) {
                $model = new ContactModel();

                $dataToSave = [
                    'users_name' => $this->request->getPost('users_name'),
                    'users_email' => $this->request->getPost('users_email'),
                    'text_area' => $this->request->getPost('text_area'),
                ];
                $model->save($dataToSave);
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('contact', $data);
    }

    public function signup()
    {
        $data = [];

        if ($this->request->getMethod() === 'POST') {
            $rules = [
                'user_name' => 'required',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[7]',
                'choose' => 'required',
            ];

            if ($this->validate($rules)) {
                $model = new SignupModel();


                $userName = $this->request->getPost('user_name');
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');


                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


                $dataToSave = [
                    'user_name' => $userName,
                    'email' => $email,
                    'password' => $hashedPassword,
                ];
                $model->save($dataToSave);

                return redirect()->to('/home');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('signup', $data);
    }
}
