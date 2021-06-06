<?php

namespace App\Controllers;

class AdminData extends BaseController
{
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');

            return view('halaman/login');
        }

        $data = [
            'title' => 'ArsipKITA'
        ];

        return view('halaman/index', $data);
    }

    //--------------------------------------------------------------------

}
