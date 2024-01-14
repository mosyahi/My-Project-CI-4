<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
        $userData = [
            [
                'id_user' => 1,
                'email' => 'admin@gmail.com',
                'status' => 'Active',
                'role' => 'Admin',
                'password' => password_hash('Admin.123', PASSWORD_DEFAULT)
            ],
            [
                'id_user' => 2,
                'email' => 'syarif@gmail.com',
                'status' => 'Active',
                'role' => 'User',
                'password' => password_hash('User.123', PASSWORD_DEFAULT)
            ],
            [
                'id_user' => 3,
                'email' => 'user@gmail.com',
                'status' => 'Inactive',
                'role' => 'User',
                'password' => password_hash('User.123', PASSWORD_DEFAULT)
            ],
            [
                'id_user' => 4,
                'email' => 'user2@gmail.com',
                'status' => 'Active',
                'role' => 'User',
                'password' => password_hash('User.123', PASSWORD_DEFAULT)
            ],
        ];

        $pelatihanData = [
            [
                'id_pelatihan' => 1,
                'pelatihan' => json_encode([
                    'pelatihan' => ['Javascript Engineer Course Net', 'Codeigniter Blog App Mindluster', 'Junior Web Developer BNSP', 'SQL Dicoding Indonesia', 'SEO Mindluster', 'Dart Language Dicoding Indonesia', 'Python Language Dicoding Indonesia', 'Cyber Security Cisco Networking Academy', 'DevOps Dicoding Indonesia', 'AWS Cloud Dicoding Indonesia'],
                    'sertifikat' => ['Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya'],
                    'tahun' => ['2022', '2023', '2022', '2023', '2023', '2023', '2023', '2023', '2023', '2023'],
                ]),
            ],
            [
                'id_pelatihan' => 2,
                'pelatihan' => json_encode([
                    'pelatihan' => ['Seminar Nasional Pendidikan'],
                    'sertifikat' => ['Ya'],
                    'tahun' => ['2021'],
                ]),
            ],
            [
                'id_pelatihan' => 3,
                'pelatihan' => json_encode([
                    'pelatihan' => ['Seminar Nasional Ilmu Komunikasi'],
                    'sertifikat' => ['Ya'],
                    'tahun' => ['2020'],
                ]),
            ],
        ];

        $pekerjaanData = [
            [
                'id_pekerjaan' => 1,
                'pekerjaan' => json_encode([
                    'pekerjaan' => ['Indomaret Group', 'LPD Al Bahjah Sendang Cirebon', 'Web Crafter Service'],
                    'posisi' => ['Merchandiser', 'Internship Staff IT Programmer', 'Web Developer'],
                    'pendapatan' => ['Rp. 2.200.000', 'Rp. 0', 'Rp. 2.000.000'],
                    'tahun' => ['2018', '2022', '2023'],
                ]),
            ],
            [
                'id_pekerjaan' => 2,
                'pekerjaan' => json_encode([
                    'pekerjaan' => ['Alfamart', 'Dinas Pendidikan'],
                    'posisi' => ['Pramuniaga', 'Internship'],
                    'pendapatan' => ['Rp. 2.500.000', 'Rp. 0'],
                    'tahun' => ['2018', '2022'],
                ]),
            ],
            [
                'id_pekerjaan' => 3,
                'pekerjaan' => json_encode([
                    'pekerjaan' => ['Dinas Perikanan', 'Kementrian RI'],
                    'posisi' => ['Internship', 'Internship'],
                    'pendapatan' => ['Rp. 0', 'Rp. 0'],
                    'tahun' => ['2020', '2021'],
                ]),
            ],
        ];

        $pendidikanData = [
            [
                'id_pendidikan' => 1,
                'pendidikan' => json_encode([
                    'pendidikan' => ['Sekolah Menengah Kejuruan (SMK)', 'Sarjana S1'],
                    'institusi' => ['Smk Islamic Centre', 'Universitas Muhammadiyah Cirebon'],
                    'jurusan' => ['Teknik Kendaraan Ringan', 'Teknik Informatika'],
                    'ipk' => ['28.89', '3.54'],
                    'tahun' => ['2018', '2023'],
                ]),
            ],
            [
                'id_pendidikan' => 2,
                'pendidikan' => json_encode([
                    'pendidikan' => ['Sekolah Menengah Atas (SMA)', 'Sarjana S1'],
                    'institusi' => ['SMA 1 Subang', 'Universitas Padjajaran'],
                    'jurusan' => ['IPA', 'Ilmu Komunikasi'],
                    'ipk' => ['35.00', '3.80'],
                    'tahun' => ['2019', '2023'],
                ]),
            ],
            [
                'id_pendidikan' => 3,
                'pendidikan' => json_encode([
                    'pendidikan' => ['Sekolah Menengah Atas (SMA)', 'Sarjana S1'],
                    'institusi' => ['SMA 1 Subang', 'Universitas Gadjah Mada'],
                    'jurusan' => ['IPS', 'Ilmu Pemerintahan'],
                    'ipk' => ['37.00', '3.92'],
                    'tahun' => ['2018', '2022'],
                ]),
            ],
        ];

        $biodata = [
            [
                'user_id' => 2,
                'pelatihan_id' => 1,
                'pekerjaan_id' => 1,
                'pendidikan_id' => 1,
                'posisi_lamar' => 'Web Developer',
                'nama' => 'Moch Syarif Hidayat',
                'ktp' => '3274011306928376',
                'ttl' => 'Kota Cirebon, 13 Juny 2000',
                'jk' => 'L',
                'agama' => 'Islam',
                'gol_darah' => 'O',
                'status' => 'Belum Menikah',
                'alamat_ktp' => 'Jl. Diponegoro Kp. Baru RT 07 RW 01 Kelurahan Kesenden Kecamatan Kejaksan Kota Cirebon 45121',
                'alamat_tinggal' => 'Jl. Diponegoro Kp. Baru RT 07 RW 01 Kelurahan Kesenden Kecamatan Kejaksan Kota Cirebon 45121',
                'email' => 'mosyahi@gmail.com',
                'telepon' => '08988658838',
                'telepon_two' => '089684574245',
                'skill' => 'PHP, JavaScript, HTML, CSS, Laravel, Codeigniter, Tailwind, Wordpress',
                'question' => 'Ya',
                'salary' => 'Rp. 4.800.000',
            ],
            [
                'user_id' => 3,
                'pelatihan_id' => 2,
                'pekerjaan_id' => 2,
                'pendidikan_id' => 2,
                'posisi_lamar' => 'Mobile Developer',
                'nama' => 'User 2',
                'ktp' => '327401130637872',
                'ttl' => 'Kota Cirebon, 13 Desember 2000',
                'jk' => 'P',
                'agama' => 'Kristen',
                'gol_darah' => 'A',
                'status' => 'Sudah Menikah',
                'alamat_ktp' => 'Jl. Testing No.118 Rt 09 Rw 11 Jakarta',
                'alamat_tinggal' => 'Jl. Testing No.118 Rt 09 Rw 11 Jakarta',
                'email' => 'user@gmail.com',
                'telepon' => '08998989834',
                'telepon_two' => '08998989834',
                'skill' => 'Flutter, Kotlin, Java',
                'question' => 'Tidak',
                'salary' => 'Rp. 5.800.000',
            ],
            [
                'user_id' => 4,
                'pelatihan_id' => 3,
                'pekerjaan_id' => 3,
                'pendidikan_id' => 3,
                'posisi_lamar' => 'Fullstack Developer',
                'nama' => 'User 3',
                'ktp' => '3274011306928376',
                'ttl' => 'Kota Cirebon, 18 Januari 2000',
                'jk' => 'L',
                'agama' => 'Islam',
                'gol_darah' => 'AB',
                'status' => 'Cerai',
                'alamat_ktp' => 'Jl. Mencoba No.99 RT 09 RW 01 Bali',
                'alamat_tinggal' => 'Jl. Mencoba No.99 RT 09 RW 01 Bali',
                'email' => 'user2@gmail.com',
                'telepon' => '089993838383',
                'telepon_two' => '089993838383',
                'skill' => 'DevOps, Front End Mobile Apps, Vue JS, Angular',
                'question' => 'Ya',
                'salary' => 'Rp. 7.000.000',
            ],
        ];

        $this->db->table('tb_user')->insertBatch($userData);

        $pelatihanIDs = $this->db->table('tb_pelatihan')->insertBatch($pelatihanData, true);
        $pekerjaanIDs = $this->db->table('tb_pekerjaan')->insertBatch($pekerjaanData, true);
        $pendidikanIDs = $this->db->table('tb_pendidikan')->insertBatch($pendidikanData, true);
        $this->db->table('tb_biodata')->insertBatch($biodata);
    }
}
