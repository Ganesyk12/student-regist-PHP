<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
   public function index()
   {
      $data = [
         'title' => 'Authorized | Kel 2'
      ];
      $UsersModel  = new UsersModel();
      $login = $this->request->getPost('login');
      if ($login) {
         $username = $this->request->getPost('username');
         $password = $this->request->getPost('password');

         if ($username == '' or $password == '') {
            $err  = "Username / Password Tidak ditemukan";
         }
         if (empty($err)) {
            $data = $UsersModel->where(
               "username",
               $username,
               $username
            )->first();
            if ($data['password'] != ($password)) {
               $err = "Password Tidak Sesuai";
            }
         }
         if (empty($err)) {
            $ses_data = [
               'username' => $data['username'],
               'password' => $data['password'],
            ];
            session()->set($ses_data);
            return redirect()->to('datasiswa');
         }
         if ($err) {
            session()->setFlashdata('username', $username);
            session()->setFlashdata('error', $err);
            return redirect()->to('login');
         }
      }
      return view('pages/login', $data);
   }

   public function logout()
   {
      session()->destroy();
      return redirect()->to('login');
   }
}
