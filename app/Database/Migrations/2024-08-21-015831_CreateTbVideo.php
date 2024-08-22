<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbVideo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_video' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_kategori_video' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'judul_video' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'video_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'thumbnail' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'deskripsi_video' => [
                'type'       => 'TEXT',
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

        $this->forge->addKey('id_video', true);
        $this->forge->addForeignKey('id_kategori_video', 'tb_kategori_video', 'id_kategori_video', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tb_video');
    }

    public function down()
    {
        $this->forge->dropTable('tb_video');
    }
}
