<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePendidikanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pendidikan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pendidikan' => [
                'type' => 'TEXT',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id_pendidikan', true);
        $this->forge->createTable('tb_pendidikan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pendidikan');
    }
}
