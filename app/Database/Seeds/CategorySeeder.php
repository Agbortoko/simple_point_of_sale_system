<?php

namespace App\Database\Seeds;

use Carbon\Carbon;
use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Web Development',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],

            [
                'name' => 'Graphic Design',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],

            [
                'name' => 'Content Management System',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],

            [
                'name' => 'Structural Programming with C',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],
        ];

       
       foreach($categories as $category) {
            $this->db->table('category')->insert($category);
       }
    }
}
