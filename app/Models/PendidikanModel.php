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

    protected $validationRules = [
        'id_pendidikan' => 'required',
        'pendidikan' => 'required',
    ];

    public function insertPendidikan($pendidikanData)
    {
        // Validate data
        if ($this->validate($this->validationRules)) {
            // Data valid, proceed with insertion
            $this->insert($pendidikanData);
            return $this->getInsertID();
        } else {
            // Data not valid, return validation errors
            return $this->validator->getErrors();
        }
    }
}
