<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
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
            'name' => 'Hoang Nghiên',
            'employee_id' => '1',
            'phone' => '038454522',
            'address' => 'Ninh Binh',
            'status'    => '1',
            'email' => 'nghienhoang'.'@gmail.com',
            ],
            [
                'name' => 'Đỗ Phủ',
                'employee_id' => '2',
                'phone' => '03300033',
                'address' => 'QuangNgai',
                'status'    => '2',
                'email' => 'phuca'.'@gmail.com',
            ],
            [
                'name' => 'LongDan',
                'employee_id' => '1',
                'phone' => '092844884',
                'address' => 'Bac Ninh',
                'status'    => '1',
                'email' => 'Longac'.'@gmail.com',
            ],
             
        ]);
    }
}
