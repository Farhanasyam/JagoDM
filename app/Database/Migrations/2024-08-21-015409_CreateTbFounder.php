<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbFounder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_founder' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_founder' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'foto_founder' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'deskripsi_founder' => [
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

        $this->forge->addKey('id_founder', true);
        $this->forge->createTable('tb_founder');
    }

    public function down()
    {
        $this->forge->dropTable('tb_founder');
    }
}
