<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DetailedProductCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailed_product_care')->insert([
           [
            'customer_id' => '1',
            'product_id' => '2',
            ],
            [
                'customer_id' => '1',
                'product_id' => '3',
            ],
            [
                'customer_id' => '2',
                'product_id' => '3',
            ],
            [
                'customer_id' => '3',
                'product_id' => '1',
            ],
            
        ]);
    }
}
