<?php

namespace App\Controllers;

use App\Models\Siswa_Model;
use App\Models\MahasiswaModel;

class Siswa extends BaseController
{
    //--------------------------------------------------------------------

    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        $datamhs = $mahasiswa->get()->getResultArray();

        $data = [
            'title' => "Orang | Pages",
            'siswa' => $datamhs,
        ];

        //dd($datamhs);
        return view('halaman/siswa', $data);
    }

    //--------------------------------------------------------------------

    public function getSiswa($id)
    {
        $data = [
            'title' => "Detail | Pages",
            'siswa' => $this->siswaModel->getSiswaId($id),
        ];
        return view('halaman/siswaDetail', $data);
    }
}
