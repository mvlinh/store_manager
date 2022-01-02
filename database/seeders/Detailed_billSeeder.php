<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
Use Carbon\Carbon;
class Detailed_billSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailed_bill')->insert([
            [
            'bill_id' => '1',
            'product_id' => '2',
            'quantity' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'bill_id' => '1',
            'product_id' => '1',
            'quantity' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'bill_id' => '2',
            'product_id' => '3',
            'quantity' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bill_id' => '2',
                'product_id' => '1',
                'quantity' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
