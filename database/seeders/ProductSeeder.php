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
            [
            'name' => 'Cadillac',
            'price' => '15000000000',
            'commission' => '2',
            ],
            [
            'name' => 'Rolls Royce',
            'price' => '4000000000',
            'commission' => '2',
            ],
            [
            'name' => 'Ferrari',
            'price' => '8000000000',
            'commission' => '2',
            ],
            [
            'name' => 'Mercedes – Benz',
            'price' => '5000000000',
            'commission' => '2',
            ],
        ]);
    }
}
