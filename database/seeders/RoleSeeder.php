<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'role' => 'Gast'
        ]);

        Role::create([
            'role' => 'Serveerster'
        ]);

        Role::create([
            'role' => 'Kassamedewerker'
        ]);

        Role::create([
            'role' => 'Admin'
        ]);
    }
}
