<?php

namespace App\Controllers;



class Contact extends BaseController
{


    public function index()
    {
        $data = [
            'title' => 'Contact | Page',
        ];
        return view('halaman/contact', $data);
    }

    public function create()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'messages' => $this->request->getPost('message'),
        ];
        $this->dataContact->create($data);

        session()->setFlashdata('success', 'Data berhasil dikirim');

        return redirect()->to(base_url('index.php') . '/contact');
    }

    //--------------------------------------------------------------------

}
