<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
Use Carbon\Carbon;
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'name' => 'Audi',
            'price' => '3000000000',
            'commission' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'name' => 'BMW',
            'price' => '2000000000',
            'commission' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'name' => 'Cadillac',
            'price' => '15000000000',
            'commission' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'name' => 'Rolls Royce',
            'price' => '4000000000',
            'commission' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'name' => 'Ferrari',
            'price' => '8000000000',
            'commission' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'name' => 'Mercedes – Benz',
            'price' => '5000000000',
            'commission' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
