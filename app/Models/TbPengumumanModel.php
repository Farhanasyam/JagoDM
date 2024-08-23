<?php

namespace App\Models;

use CodeIgniter\Model;

class TbPengumumanModel extends Model
{
    protected $table = 'tb_pengumuman';
    protected $primaryKey = 'id_pengumuman';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['judul_pengumuman', 'deskripsi_pengumuman', 'tanggal_pengumuman', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}