<?php

namespace App\Models;

use CodeIgniter\Model;

class TbVideoModel extends Model
{
    protected $table = 'tb_video';
    protected $primaryKey = 'id_video';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['id_kategori_video', 'judul_video', 'video_url', 'thumbnail', 'deskripsi_video', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}