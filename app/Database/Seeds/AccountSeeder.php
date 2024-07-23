<?php

namespace App\Database\Seeds;

use Carbon\Carbon;
use CodeIgniter\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run()
    {
        $accounts = [
            [
                'username' => 'admin',
                'password'    => 'admin1234',
                'account_type' => 'admin',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],

            [
                'username' => 'clerk',
                'password'    => 'clerk1234',
                'account_type' => 'clerk',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],

            [
                'username' => 'cashier',
                'password'    => 'cashier1234',
                'account_type' => 'cashier',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ]
        ];

       
       foreach($accounts as $account) {
            $this->db->table('accounts')->insert($account);
       }

    }
}
