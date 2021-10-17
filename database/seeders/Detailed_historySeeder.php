<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Detailed_historySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailed_history')->insert([
            [
            'emp_send_id' => '1',
            'emp_receive_id' => '2',
            'customer_id' => '1',
            'status' => '1'
            ],
            [
            'emp_send_id' => '2',
            'emp_receive_id' => '3',
            'customer_id' => '2',
            'status' => '1'
            ],
            
        ]);
    }
}
