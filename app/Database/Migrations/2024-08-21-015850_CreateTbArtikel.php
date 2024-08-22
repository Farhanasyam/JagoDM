<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbArtikel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_artikel' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_artikel' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'foto_artikel' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'deskripsi_artikel' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'tags' => [
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

        $this->forge->addKey('id_artikel', true);
        $this->forge->createTable('tb_artikel');
    }

    public function down()
    {
        $this->forge->dropTable('tb_artikel');
    }
}
