<?php

namespace App\Controllers;

class Data extends BaseController
{

    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        // $data = [
        //     'siswa' => $this->dataModel->getAllData(),
        // ];

        return view('halaman/datatable',);
    }
}
