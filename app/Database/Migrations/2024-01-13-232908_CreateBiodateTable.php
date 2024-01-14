<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBiodateTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_biodata' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'pendidikan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'pelatihan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'pekerjaan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'posisi_lamar' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'ktp' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'ttl' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'jk' => [
                'type' => 'ENUM',
                'constraint' => ['L', 'P'],
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'gol_darah' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'alamat_ktp' => [
                'type' => 'TEXT',
            ],
            'alamat_tinggal' => [
                'type' => 'TEXT',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'telepon' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'telepon_two' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'skill' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'question' => [
                'type' => 'ENUM',
                'constraint' => ['Ya', 'Tidak'],
            ],
            'salary' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id_biodata', true);
        $this->forge->addForeignKey('pendidikan_id', 'tb_pendidikan', 'id_pendidikan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('pelatihan_id', 'tb_pelatihan', 'id_pelatihan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('pekerjaan_id', 'tb_pekerjaan', 'id_pekerjaan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'tb_user', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tb_biodata');
    }

    public function down()
    {
        $this->forge->dropTable('tb_biodata');
    }
}
