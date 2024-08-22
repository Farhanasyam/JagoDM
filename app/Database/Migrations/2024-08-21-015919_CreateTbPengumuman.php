<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbPengumuman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengumuman' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_pengumuman' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'deskripsi_pengumuman' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'tanggal_pengumuman' => [
                'type'       => 'DATETIME',
                'null'       => false,
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

        $this->forge->addKey('id_pengumuman', true);
        $this->forge->createTable('tb_pengumuman');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pengumuman');
    }
}
