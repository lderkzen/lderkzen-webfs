<?php

namespace Database\Seeders;

use App\Models\Allergy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergiesSeeder extends Seeder
{
    public function run()
    {
        Allergy::create([
            'allergy' => 'Gluten'
        ]);

        Allergy::create([
            'allergy' => 'Lactose'
        ]);

        Allergy::create([
            'allergy' => 'Varkensvlees'
        ]);
    }
}
