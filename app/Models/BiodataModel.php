<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'tb_biodata';
    protected $primaryKey = 'id_biodata';
    protected $allowedFields = [
        'pendidikan_id', 
        'pelatihan_id', 
        'pekerjaan_id', 
        'posisi_lamar', 
        'nama', 
        'ktp', 
        'ttl', 
        'jk', 
        'agama', 
        'gol_darah', 
        'status', 
        'alamat_ktp', 
        'alamat_tinggal', 
        'email', 
        'telepon', 
        'telepon_two', 
        'skill', 
        'question', 
        'salary'
    ];
}
