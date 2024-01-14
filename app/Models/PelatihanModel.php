<?php

namespace App\Models;

use CodeIgniter\Model;

class PelatihanModel extends Model
{
    protected $table = 'tb_pelatihan';
    protected $primaryKey = 'id_pelatihan';
    protected $allowedFields = [
        'pelatihan',
    ];

    protected $validationRules = [
        'id_pelatihan' => 'required',
        'pelatihan' => 'required',
    ];
}
