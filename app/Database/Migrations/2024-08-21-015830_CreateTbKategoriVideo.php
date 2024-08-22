<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbKategoriVideo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori_video' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kategori_video' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_kategori_video', true);
        $this->forge->createTable('tb_kategori_video');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kategori_video');
    }
}
