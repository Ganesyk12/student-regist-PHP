<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_lengkap', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'agama', 'anak', 'jum_sdr', 'alamat', 'telp', 'nama_ortu', 'pekerjaan', 'alamat_ortu'
    ];
}
