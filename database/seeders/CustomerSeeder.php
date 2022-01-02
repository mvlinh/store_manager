<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
Use Carbon\Carbon;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
                'id' => '1',
            'name' => 'Hoang Nghiên',
            'employee_id' => '1',
            'phone' => '038454522',
            'address' => 'Ninh Binh',
            'status'    => '1',
            'email' => 'nghienhoang'.'@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '2',
                'name' => 'Đỗ Phủ',
                'employee_id' => '2',
                'phone' => '03300033',
                'address' => 'QuangNgai',
                'status'    => '2',
                'email' => 'phuca'.'@gmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '3',
                'name' => 'LongDan',
                'employee_id' => '1',
                'phone' => '092844884',
                'address' => 'Bac Ninh',
                'status'    => '1',
                'email' => 'Longac'.'@gmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '4',
                'name' => 'Hải Hậu',
                'employee_id' => '3',
                'phone' => '0357159648',
                'address' => 'Hải Phòng',
                'status'    => '1',
                'email' => 'Hhau'.'@gmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
             
        ]);
    }
}
