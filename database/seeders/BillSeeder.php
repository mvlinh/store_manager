<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
Use Carbon\Carbon;
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'emp_care_id' => '2',
            'emp_seller_id' => '1',
            'customer_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'emp_care_id' => '2',
            'emp_seller_id' => '3',
            'customer_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
