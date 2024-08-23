<?php

namespace App\Models;

use CodeIgniter\Model;

class TbKategoriVideoModel extends Model
{
    protected $table = 'tb_kategori_video';
    protected $primaryKey = 'id_kategori_video';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['nama_kategori_video', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}