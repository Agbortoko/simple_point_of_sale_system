<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSalesTable extends Migration
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

            'item_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            
            "price" => [
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ],

            "quantity" => [
                'type' => "INT",
                'constraint' => 11
            ],

            "sub_total" => [
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ],

            'date' => [
                'type' => 'TIMESTAMP'
            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('item_id', 'id', 'items');
        $this->forge->createTable('sales');

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('sales');
    }
}
