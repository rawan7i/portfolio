<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Controllers\SignupModel;
class BaseC extends BaseController
{
    public function index()
    {
        $data =[];

        if ($this->request->getMethod() ==='POST'){
            $rules =[

            'user_name'=>'required',
            'user_email'=>'required',
            'password'=>'required|max_length[7]'
            ];

            if($this->validate($rules)){
                // $model = new SignupModel();
                $datatosave = [
                    'user_name'=>$this->request->getPost('user_name'),
                    'user_email'=>$this->request->getPost('user_email'),
                    'password'=>$this->request->getPost('password')
                ];
                    // $model->save($datatosave);
            }else{
                $data['validation']=$this->validator;
            }
        }
        // return view('contact', $data);
    }
}
