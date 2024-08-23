<?php

namespace App\Models;

use CodeIgniter\Model;

class TbLinkFounderModel extends Model
{
    protected $table = 'tb_link_founder';
    protected $primaryKey = 'id_link_founder';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['id_founder', 'nama_link_founder', 'icon_link_founder', 'link_founder', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}