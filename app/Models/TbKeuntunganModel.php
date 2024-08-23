<?php

namespace App\Models;

use CodeIgniter\Model;

class TbKeuntunganModel extends Model
{
    protected $table = 'tb_keuntungan';
    protected $primaryKey = 'id_keuntungan';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['judul_keuntungan', 'deskripsi_keuntungan', 'icon_keuntungan', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}