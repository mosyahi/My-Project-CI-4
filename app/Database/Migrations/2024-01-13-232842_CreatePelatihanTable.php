<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePelatihanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelatihan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pelatihan' => [
                'type' => 'TEXT',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id_pelatihan', true);
        $this->forge->createTable('tb_pelatihan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pelatihan');
    }
}
