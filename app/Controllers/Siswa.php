<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSiswa;

class Siswa extends BaseController
{
    protected $modelSiswa;

    public function __construct()
    {
        $this->modelSiswa = new ModelSiswa();
    }

    public function index()
    {
        $siswa = $this->modelSiswa->findAll();
        $data = [
            'title' => 'Daftar Regist',
            'siswa' => $siswa
        ];
        return view('datasiswa/dataview', $data);
    }

    public function regist()
    {
        $data = [
            'title' => 'Regist | Web'
        ];
        return view('pages/form', $data);
    }

    public function saveFormData()
    {
        $this->modelSiswa->insert([
            'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tgl_lahir'     => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama'         => $this->request->getPost('agama'),
            'anak'          => $this->request->getPost('anak'),
            'jum_sdr'       => $this->request->getPost('jum_sdr'),
            'alamat'        => $this->request->getPost('alamat'),
            'telp'          => $this->request->getPost('telp'),
            'nama_ortu'     => $this->request->getPost('nama_ortu'),
            'pekerjaan'     => $this->request->getPost('pekerjaan'),
            'alamat_ortu'   => $this->request->getPost('alamat_ortu')
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);
        return redirect('success')->with('success', 'Data Added Successfully');
    }

    public function edit($idSiswa)
    {
        $getData = $this->modelSiswa->select()->where('id', $idSiswa)->first();
        $data =
            [
                'siswa' => $getData,
                'title' => 'Edit Siswa'
            ];
        return view('pages/formEditSiswa', $data);
    }

    public function submitedit()
    {
        $this->modelSiswa->update([
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tgl_lahir'     => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama'         => $this->request->getPost('agama'),
            'anak'          => $this->request->getPost('anak'),
            'jum_sdr'       => $this->request->getPost('jum_sdr'),
            'alamat'        => $this->request->getPost('alamat'),
            'telp'          => $this->request->getPost('telp'),
            'nama_ortu'     => $this->request->getPost('nama_ortu'),
            'pekerjaan'     => $this->request->getPost('pekerjaan'),
            'alamat_ortu'   => $this->request->getPost('alamat_ortu')
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);
        return redirect('datasiswa');
    }

    public function submitEditSiswa()
    {
        $id = $this->request->getPost('id');
        $data =
            [
                'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
                'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
                'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
                'tgl_lahir'     => $this->request->getPost('tgl_lahir'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'agama'         => $this->request->getPost('agama'),
                'anak'          => $this->request->getPost('anak'),
                'jum_sdr'       => $this->request->getPost('jum_sdr'),
                'alamat'        => $this->request->getPost('alamat'),
                'telp'          => $this->request->getPost('telp'),
                'nama_ortu'     => $this->request->getPost('nama_ortu'),
                'pekerjaan'     => $this->request->getPost('pekerjaan'),
                'alamat_ortu'   => $this->request->getPost('alamat_ortu')
            ];

        $this->modelSiswa->where('id', $id)->set($data)->update();
        return redirect('datasiswa');
    }

    public function delete($id)
    {
        $this->modelSiswa->where('id', $id)->delete();
        return redirect('datasiswa')->with('success', 'Data Deleted Successfully');
    }
}
