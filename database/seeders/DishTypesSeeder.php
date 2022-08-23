<?php

namespace Database\Seeders;

use App\Models\DishType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishTypesSeeder extends Seeder
{
    public function run()
    {
        DishType::create([
            'type' => 'SOEP'
        ]);
        DishType::create([
            'type' => 'VOORGERECHTEN'
        ]);
        DishType::create([
            'type' => 'BAMI EN NASI GERECHTEN'
        ]);
        DishType::create([
            'type' => 'COMBINATIE GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'MIHOEN GERECHTEN'
        ]);
        DishType::create([
            'type' => 'CHINESE BAMI GERECHTEN'
        ]);
        DishType::create([
            'type' => 'INDISCHE GERECHTEN'
        ]);
        DishType::create([
            'type' => 'EIERGERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'GROENTEN GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'VLEES GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'KIPGERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'GARNALEN GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'OSSENHAAS GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'VISSEN GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'PEKING EEND GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'TIEPAN GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'VEGETARISCHE GERECHTEN (met witte rijst)'
        ]);
        DishType::create([
            'type' => 'KINDERMENUS'
        ]);
        DishType::create([
            'type' => 'RIJSTTAFELS'
        ]);
        DishType::create([
            'type' => 'BUFFET'
        ]);
        DishType::create([
            'type' => 'DIVERSEN'
        ]);
    }
}
