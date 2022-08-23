<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(DishTypesSeeder::class);
        $this->call(DishesSeeder::class);
        $this->call(DishesSalesSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(AllergiesSeeder::class);
        $this->call(AllergiesDishesSeeder::class);
        $this->call(OffersSeeder::class);
        $this->call(DishesOffersSeeder::class);
    }
}
