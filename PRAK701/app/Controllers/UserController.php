<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $user = new UserModel();
        $username = $this->request->getPost('username');
        $pw = $this->request->getPost('password');
        $dataUser = $user->where(['username' => $username])->orWhere(['email' => $username])->first();
        if ($dataUser) {
            if (password_verify($pw, $dataUser['password'])) {
                session()->set([
                    'username' => $dataUser['username'],
                    'email' => $dataUser['email'],
                    'logged_in' => true
                ]);
                
                return redirect()->to(base_url('buku'));
            } else {
                session()->setFlashdata('pesan', 'Password salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('pesan', 'Username atau email tidak ditemukan');
            return redirect()->to(base_url('login'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}