<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Moch Syarif Hidayat',
                'email' => 'mochsyarifhidayat24@gmail.com',
                'status' => 'Active',
                'role' => 'Admin',
                'password' => password_hash('Admin.123', PASSWORD_DEFAULT)
            ],
            [
                'nama' => 'Syarif',
                'email' => 'syarif@gmail.com',
                'status' => 'Inactive',
                'role' => 'User',
                'password' => password_hash('User.123', PASSWORD_DEFAULT)
            ],
            [
                'nama' => 'Hidayat',
                'email' => 'hidayat@gmail.com',
                'status' => 'Inactive',
                'role' => 'User',
                'password' => password_hash('User.123', PASSWORD_DEFAULT)
            ],
            [
                'nama' => 'Moch Syarif',
                'email' => 'mochsyarif@gmail.com',
                'status' => 'Inactive',
                'role' => 'User',
                'password' => password_hash('User.123', PASSWORD_DEFAULT)
            ],

        ];

        $this->db->table('tb_user')->insertBatch($data);
    }
}
