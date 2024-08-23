<?php

namespace App\Models;

use CodeIgniter\Model;

class TbBeritaModel extends Model
{
    protected $table = 'tb_berita';
    protected $primaryKey = 'id_berita';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['judul_berita', 'foto_berita', 'deskripsi_berita', 'tags_berita', 'datetime_berita', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}