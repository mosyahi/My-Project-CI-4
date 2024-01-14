<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'email', 'status', 'role', 'password'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
