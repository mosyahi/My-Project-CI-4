<?php

namespace App\Models;

use CodeIgniter\Model;

class PelatihanModel extends Model
{
    protected $table = 'tb_pelatihan';
    protected $primaryKey = 'id_pelatihan';
    protected $allowedFields = [
        'kursus', 
        'sertifikat', 
        'tahun'
    ];
}
