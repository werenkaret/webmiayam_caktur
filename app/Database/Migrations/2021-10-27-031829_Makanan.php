<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Makanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'makanan_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'makanan_title'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '100',
            ],
            'makanan_description' => [
                    'type' => 'TEXT',
                    'null' => true,
            ],
            'makanan_harga' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
    ]);
    $this->forge->addKey('makanan_id', true);
    $this->forge->createTable('makanan');
    }

    public function down()
    {
        $this->forge->dropTable('makanan');
    }
}
