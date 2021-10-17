<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
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
            ],
            [
            'bill_id' => '1',
            'product_id' => '1',
            'quantity' => '1',
            ],
            [
            'bill_id' => '2',
            'product_id' => '3',
            'quantity' => '1',
            ],
            [
                'bill_id' => '2',
                'product_id' => '1',
                'quantity' => '1',
            ],
        ]);
    }
}
