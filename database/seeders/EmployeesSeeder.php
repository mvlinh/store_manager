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
            'name' => 'Mai Van Linh',
            'position_id' => '1',
            'phone' => '0985734161',
            'DoB'   =>'2000/04/11',
            'address' => 'Ninh Binh',
            'email' => 'linhlinh'.'@gmail.com',
            'password' => bcrypt('123123'),
        ]);
    }
}
