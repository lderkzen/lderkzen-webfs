<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\SalesRequest;
use App\Models\Dish;
use App\Models\DishType;
use App\Models\Offer;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;

class CashRegisterController extends Controller
{
    public function showOrder()
    {
        return Inertia::render('Index', [
            'dishes' => Dish::all(),
            'dishTypes' => DishType::all()
        ]);
    }

    public function showMenu()
    {
        return Inertia::render('Menu', [
            'menu' => View::make('menu_pdf.pdf', [
                'dishTypes' => DishType::all(),
                'offers' => Offer::all(),
                'now' => Carbon::now()->format('Y-m-d')
            ])->render()
        ]);
    }

    public function showSales()
    {
        return Inertia::render('Sales');
    }

    public function showAdmin()
    {
        return Inertia::render('Admin/Index');
    }

    public function fetchSales(SalesRequest $request)
    {
        $sales = Sale::whereBetween('created_at', [$request['startdate'] . ' 00:00:00', $request['enddate'] . ' 23:59:59'])->get();

        $dishes = [];
        foreach ($sales as $sale) {
            $dishes_temp = $sale->dishes()->get();
            foreach ($dishes_temp as $dish) {
                $dish->date = date('y-m-d', strtotime($sale->created_at));
                array_push($dishes, $dish);
            }
        }

        return Response::json($dishes);
    }

    public function pay(OrderRequest $request)
    {
        $sale = Sale::create();

        foreach ($request['order'] as $entry) {
            $dish = Dish::find($entry['id']);
            $sale->dishes()->attach($dish->id, [
                'amount' => $entry['amount'],
                'price' => $entry['amount'] * $dish->price,
                'comment' => $entry['comment'] ?: null
            ]);
        }
    }
}
