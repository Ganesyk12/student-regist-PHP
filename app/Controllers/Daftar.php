<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Daftar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Regist'
        ];
        echo view('layouts/components/navigation');
        return view('datasiswa/index', $data);
    }
}
