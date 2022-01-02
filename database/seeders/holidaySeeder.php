<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class holidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('holiday')->insert([
            [
            'name' => 'Nghỉ lễ hội',
            'detail' => 'Phòng ban tổ chức',
            'date' => '2021-11-10',
            'type' => 'warning',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'văn phòng nghỉ',
                'detail' => 'Chủ nhật',
                'date' => '2022-1-9',
                'type' => 'orange',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
                
            
        ]);
    }
}
