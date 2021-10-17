<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill')->insert([
            [
            'emp_care_id' => '1',
            'emp_seller_id' => '1',
            'customer_id' => '2',
            ],
            [
            'emp_care_id' => '2',
            'emp_seller_id' => '1',
            'customer_id' => '1',
            ],
            [
            'emp_care_id' => '1',
            'emp_seller_id' => '3',
            'customer_id' => '3',
            ],
            
        ]);
    }
}
