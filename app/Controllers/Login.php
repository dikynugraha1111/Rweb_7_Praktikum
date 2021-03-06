<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Login | Pages",
        ];

        return view('halaman/login', $data);
    }

    public function auth()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // $user = $this->dataUser->login($username);


        if ($username == "admin") {
            if ($password == "admin") {
                session()->set('username', $username);
                session()->set('password', $password);
                // session()->set('id_user_type', $user['id_user_type']);
                // session()->set('name', $user['name']);
                // session()->set('email', $user['email']);
                return redirect()->to('/AdminData');
            } else {
                session()->setFlashdata('pesan', 'Username atau Password SALAH');
                return redirect()->to('/Login');
            }
        } else {
            session()->setFlashdata('pesan', 'Username atau Password SALAH');
            return redirect()->to('/Login');
        }
    }

    public function logOut()
    {
        session()->remove('username');
        session()->remove('password');
        // session()->remove('id_user_type');
        // session()->remove('name');
        // session()->remove('email');
        session()->setFlashdata('success', 'Anda berhasil Log Out');
        return redirect()->to('/Login');
    }
}
