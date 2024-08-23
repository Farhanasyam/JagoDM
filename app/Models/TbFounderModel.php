<?php

namespace App\Models;

use CodeIgniter\Model;

class TbFounderModel extends Model
{
    protected $table = 'tb_founder';
    protected $primaryKey = 'id_founder';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['nama_founder', 'foto_founder', 'deskripsi_founder', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}