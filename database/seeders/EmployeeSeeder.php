<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::create([
            'employee_nr' => 1000,
            'password' => 'server',
            'role_id' => 2
        ]);

        Employee::create([
            'employee_nr' => 1001,
            'password' => 'cashier',
            'role_id' => 3
        ]);

        Employee::create([
            'employee_nr' => 1002,
            'password' => 'admin',
            'role_id' => 4
        ]);
    }
}
