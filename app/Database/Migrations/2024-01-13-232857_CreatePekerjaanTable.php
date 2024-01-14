<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePekerjaanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pekerjaan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'perusahaan' => [
                'type' => 'TEXT',
            ],
            'posisi' => [
                'type' => 'TEXT',
            ],
            'pendapatan' => [
                'type' => 'TEXT',
            ],
            'tahun' => [
                'type' => 'TEXT',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id_pekerjaan', true);
        $this->forge->createTable('tb_pekerjaan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pekerjaan');
    }
}
