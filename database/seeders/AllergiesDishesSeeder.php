<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class AllergiesDishesSeeder extends Seeder
{
    public function run()
    {
        $dishes = new Collection();

        // Gluten
        $dishes = $dishes->merge(Dish::where('name', 'LIKE', '%loempia%')->orWhere('description', 'LIKE', '%kroepoek%')->get());
        $dishes = $dishes->merge(Dish::where('description', 'LIKE', '%loempia%')->orWhere('description', 'LIKE', '%kroepoek%')->get());

        foreach ($dishes->unique() as $dish) {
            $dish->allergies()->attach(1);
        }

        // Lactose
        $dishes->splice(0);

        $dishes = $dishes->merge(Dish::where('name', 'LIKE', '%kaas%')->get());
        $dishes = $dishes->merge(Dish::where('description', 'LIKE', '%kaas%')->get());

        foreach ($dishes->unique() as $dish) {
            $dish->allergies()->attach(2);
        }

        // Varkensvlees
        $dishes->splice(0);

        $dishes = $dishes->merge(Dish::where('name', 'LIKE', '%varkensvlees%')->orWhere('name', 'LIKE', '%chia sieuw%')->get());
        $dishes = $dishes->merge(Dish::where('description', 'LIKE', '%varkensvlees%')->orWhere('description', 'LIKE', '%chia sieuw%')->get());

        foreach ($dishes->unique() as $dish) {
            $dish->allergies()->attach(3);
        }
    }
}
