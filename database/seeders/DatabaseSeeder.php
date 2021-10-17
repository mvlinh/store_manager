<?php

namespace Database\Seeders;

use Aws\History;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmployeesSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(Detailed_billSeeder::class);
        $this->call(DetailedProductCareSeeder::class);
        $this->call(FollowSeeder::class);
        $this->call(Detailed_historySeeder::class);
    }
}
