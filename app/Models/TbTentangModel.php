<?php

namespace App\Models;

use CodeIgniter\Model;

class TbTentangModel extends Model
{
    protected $table = 'tb_tentang';
    protected $primaryKey = 'id_tentang';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['nama_tentang', 'visi', 'misi', 'deskripsi_tentang', 'video_tentang', 'logo', 'favicon', 'copyright', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}