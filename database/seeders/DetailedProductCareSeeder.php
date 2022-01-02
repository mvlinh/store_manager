<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
Use Carbon\Carbon;
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'customer_id' => '1',
                'product_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'customer_id' => '2',
                'product_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'customer_id' => '3',
                'product_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ]);
    }
}
