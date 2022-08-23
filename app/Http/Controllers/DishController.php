<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use App\Models\Allergy;
use App\Models\Dish;
use App\Models\DishType;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class DishController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Dishes/Index', [
            'dishes' => Dish::orderBy('dish_type_id')->orderBy('dish_nr')->get()
                ->map(fn(Dish $dish)  => $dish->setAttribute('allergies', $dish->allergies()->pluck('id'))),
            'dishTypes' => DishType::all(),
            'allergies' => Allergy::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Dishes/CreateEdit', [
            'dishTypes' => DishType::all(),
            'allergies' => Allergy::all()
        ]);
    }

    public function store(StoreDishRequest $request)
    {
        $dish = Dish::create($request->except(['allergyIds']));
        $dish->allergies()->attach($request['allergyIds'] ?? []);

        return Redirect::to('/kassa/admin/gerechten');
    }

    public function edit(Dish $dish)
    {
        $dish->setAttribute('allergyIds', $dish->allergies()->pluck('id'));

        return Inertia::render('Admin/Dishes/CreateEdit', [
            'dish' => $dish,
            'dishTypes' => DishType::all(),
            'allergies' => Allergy::all()
        ]);
    }

    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $id = $dish->id;
        $dish->setRawAttributes($request->except(['allergyIds']))
            ->save();
        Dish::find($id)->allergies()->sync($request['allergyIds'] ?? []);

        return Redirect::to('/kassa/admin/gerechten');
    }

    public function destroy(Dish $dish)
    {
        $dish->delete();

        return Redirect::to('/kassa/admin/gerechten');
    }
}
