<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use DB;
Use Carbon\Carbon;
class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follow')->insert([
            [
            'emp_id' => '1',
            'customer_id' => '2',
            'care_info' => 'khách hàng còn đang phân vân. cần được tư vấn nhiều hơn',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'emp_id' => '1',
            'customer_id' => '2',
            'care_info' => 'Khách hàng khó tính nhất từng gặp',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ]);
    }
}
