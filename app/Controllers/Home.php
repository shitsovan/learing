<?php

namespace App\Controllers;
use App\Models\AdminModel;
class Home extends BaseController
{
    public function index()
    {
        return view('login.php');
    }
    public function sign up();
    {
        $data=[];
        helper('form');
        if($this->request->getMethod()=='post')
        {
          //echo 222;exit;  
            $rules=[
              'firstname'=>'required|min_length[3]|max_length[20]',
              'lastname'=>'required|min_length[3]|max_length[20]',
              'email'=>'required|min_length[8]|max_length[50]|valid_email|is_unique[admin.email]',
              'password'=>'required|min_length[8]|max_length[255]',
              'confirm_password'=>'matches[password]',
            ];
            if(!$this->validate($rules))
            {
              $date['validation'] =$this->validator; 
            }else{
                //echo 1111;exit;
                $model new AdminModel();
                $newData=array (
                    'firstname'=>$this->request->getvar('firstname'),
                    'lastname'=>$this->request->getvar('lastname'),
                    'email'=>$this->request->getvar('email'),
                    'password'=>$this->request->getvar('password'),
                );
                if($model->save($newData))
                {
                    $data['Flash_message'] =TRUE;
                }
            }

            
        }

        return view('signup');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
