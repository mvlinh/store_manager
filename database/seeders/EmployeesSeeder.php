<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
            'name' => 'Mai Van Linh',
            'position_id' => '1',
            'phone' => '0985734161',
            'DoB'   =>'2000/04/11',
            'address' => 'Ninh Binh',
            'email' => 'linhlinh'.'@gmail.com',
            'password' => bcrypt('123123'),
            'status' => '1',
            'avatar' => '1638891397-avatar.jpg'
            ],
            [
            'name' => 'Nguyen Van Quyến',
            'position_id' => '1',
            'phone' => '012345678',
            'DoB'   =>'2000/05/19',
            'address' => 'Ninh Binh',
            'email' => 'vanquyen'.'@gmail.com',
            'password' => bcrypt('123123'),
            'status' => '1',
            'avatar' => '1638891532-avatar.jpg'
            ],
             [
            'name' => 'Nguyen Thu Trang',
            'position_id' => '1',
            'phone' => '083923823',
            'DoB'   =>'2001/06/15',
            'address' => 'Ninh Binh',
            'email' => 'thutrang'.'@gmail.com',
            'password' => bcrypt('123123'),
            'status' => '1',
            'avatar' => '1638892149-avatar.jpg'
            ],
             
        ]);
    }
}
