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
                'password'    => password_hash('admin', PASSWORD_DEFAULT),
                'account_type' => 'admin',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],

            [
                'username' => 'clerk',
                'password'    => password_hash('clerk', PASSWORD_DEFAULT),
                'account_type' => 'clerk',
                'date_created' => Carbon::now(),
                'created_by' => 'admin'
            ],

            [
                'username' => 'cashier',
                'password'    =>  password_hash('cashier', PASSWORD_DEFAULT),
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
