<?php

namespace App\Models;

use CodeIgniter\Model;

class TbSosmedModel extends Model
{
    protected $table = 'tb_sosmed';
    protected $primaryKey = 'id_sosmed';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['icon_sosmed', 'link_sosmed', 'nama_sosmed', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}