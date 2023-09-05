<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
    $this->forge->addField([
    'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
    'username' => ['type' => 'VARCHAR', 'constraint' => '255',],
    'password' => ['type' => 'VARCHAR', 'constraint' => '255',],
    ]);
    //primary key
    $this->forge->addKey('id', TRUE);
    //nama tabel
    $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
