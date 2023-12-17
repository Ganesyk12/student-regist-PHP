<?php

namespace App\Controllers;

use App\Models\ModelSiswa;

class Home extends BaseController
{
    protected $modelSiswa;
    public function __construct()
    {
        $this->modelSiswa = new ModelSiswa();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        echo view('layouts/components/navigation');
        return view('pages/dashboard', $data);
    }
    public function home()
    {
        $data = [
            'title' => 'Home'
        ];
        echo view('layouts/components/homenav');
        return view('pages/home', $data);
    }
    public function pengumuman()
    {
        $siswa = $this->modelSiswa->findAll();
        $data = [
            'title' => 'Pengumuman',
            'siswa' => $siswa
        ];
        echo view('layouts/components/navigation');
        return view('pages/pengumuman', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Me'
        ];
        echo view('layouts/components/navigation');
        return view('pages/contact', $data);
    }
    public function info()
    {
        $data = [
            'title' => 'How To'
        ];
        echo view('layouts/components/navigation');
        return view('pages/howto', $data);
    }
    public function success()
    {
        $data = [
            'title' => 'Successfuly'
        ];
        return view('pages/successfuly', $data);
    }
    public function coba()
    {

        return view('panduan');
    }
}
