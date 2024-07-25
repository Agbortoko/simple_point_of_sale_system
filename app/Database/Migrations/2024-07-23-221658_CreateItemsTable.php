<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateItemsTable extends Migration
{
    public function up()
    {

        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'category_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'description' => [
                'type' => 'LONGTEXT',
                "null" => true
            ],

            "quantity" => [
                'type' => "INT",
                'constraint' => 11
            ],

            "price" => [
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ],

            'created_by' => [
                'type' => "VARCHAR",
                'constraint' => 50,
                'null' => true
            ],

            'date_created' => [
                'type' => 'TIMESTAMP'
            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('items');

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
