<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'tb_pendidikan';
    protected $primaryKey = 'id_pendidikan';
    protected $allowedFields = [
        'pendidikan',
    ];
}
