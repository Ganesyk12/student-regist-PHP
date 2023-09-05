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
            'title' => 'Dashboard | Kel 2'
        ];
        echo view('layouts/components/navigation');
        return view('pages/dashboard', $data);
    }
    public function home()
    {
        $data = [
            'title' => 'Home | Kel 2'
        ];
        echo view('layouts/components/homenav');
        return view('pages/home', $data);
    }
    public function pengumuman()
    {
        $siswa = $this->modelSiswa->findAll();
        $data = [
            'title' => 'Pengumuman | Kel 2',
            'siswa' => $siswa
        ];
        echo view('layouts/components/navigation');
        return view('pages/pengumuman', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Me | Kel 2'
        ];
        echo view('layouts/components/navigation');
        return view('pages/contact', $data);
    }
    public function info()
    {
        $data = [
            'title' => 'How To | Kel 2'
        ];
        echo view('layouts/components/navigation');
        return view('pages/howto', $data);
    }
    public function success()
    {
        $data = [
            'title' => 'Successfuly | Kel 2'
        ];
        return view('pages/successfuly', $data);
    }
    public function coba()
    {

        return view('panduan');
    }
}
