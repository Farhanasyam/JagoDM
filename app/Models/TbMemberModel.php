<?php

namespace App\Models;

use CodeIgniter\Model;

class TbMemberModel extends Model
{
    protected $table = 'tb_member';
    protected $primaryKey = 'id_member';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['role', 'username', 'password', 'nama', 'status_kepengurusan', 'alamat', 'no_hp', 'email', 'ig', 'fb', 'pendidikan', 'pekerjaan', 'sertifikasi', 'jenis_kelamin', 'cv_member', 'slug', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}