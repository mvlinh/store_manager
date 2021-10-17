<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
            'name' => 'Lamborghini',
            'price' => '5000000000',
            'commission' => '2',
            ],
            [
            'name' => 'Audi',
            'price' => '3000000000',
            'commission' => '2',
            ],
            [
            'name' => 'BMW',
            'price' => '2000000000',
            'commission' => '2',
            ],
            
        ]);
    }
}
