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
        'user_id', 
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

    protected $validationRules = [
        'pendidikan_id' => 'required|numeric',
        'pelatihan_id' => 'required|numeric',
        'pekerjaan_id' => 'required|numeric',
        'user_id' => 'required|numeric',
        'posisi_lamar' => 'required|max_length[13]|min_length[10]',
        'nama' => 'required|max_length[255]',
        'ktp' => 'required|numeric',
        'ttl' => 'required|max_length[255]',
        'jk' => 'required|in_list[Laki-laki,Perempuan]',
        'agama' => 'required|max_length[50]',
        'gol_darah' => 'required|max_length[5]',
        'status' => 'required|max_length[20]',
        'alamat_ktp' => 'required|max_length[255]',
        'alamat_tinggal' => 'required|max_length[255]',
        'email' => 'required|valid_email',
        'telepon' => 'required|numeric',
        'telepon_two' => 'numeric',
        'skill' => 'max_length[255]',
        'question' => 'max_length[255]',
        'salary' => 'numeric',
    ];

    public function getBiodataByUserId($id_user)
    {
        return $this->where('user_id', $id_user)->first();
    }
}
