<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],

            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'NOT NULL'
            ],

            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'NOT NULL'
            ],

            'tgl_lahir' => [
                'type' => 'DATE',
                'NOT NULL'
            ],

            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'NOT NULL'
            ],

            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'NOT NULL'
            ],

            'anak' => [
                'type' => 'INT',
                'constraint' => '10',
                'NOT NULL'
            ],

            'jum_sdr' => [
                'type' => 'INT',
                'constraint' => '10',
                'NOT NULL'
            ],

            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'NOT NULL'
            ],

            'telp' => [
                'type' => 'INT',
                'constraint' => '15',
                'NOT NULL'
            ],

            'nama_ortu' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'NOT NULL'
            ],

            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'NOT NULL'
            ],

            'alamat_ortu' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'NOT NULL'
            ],
        ]);
        //primary key
        $this->forge->addKey('id', TRUE);
        //nama tabel
        $this->forge->createTable('siswa', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
