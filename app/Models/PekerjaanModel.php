<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{
    protected $table = 'tb_pekerjaan';
    protected $primaryKey = 'id_pekerjaan';
    protected $allowedFields = [
        'perusahaan', 
        'posisi', 
        'pendapatan', 
        'tahun'
    ];
}
