<?php

namespace App\Models;

use CodeIgniter\Model;

class TbKontakModel extends Model
{
    protected $table = 'tb_kontak';
    protected $primaryKey = 'id_kontak';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['deskripsi', 'kontak', 'email', 'no_hp', 'alamat', 'embed_code', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}