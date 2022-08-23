<?php

namespace App\Http\Controllers;

use App\Http\Requests\CocktailsRequest;
use App\Models\DishType;
use App\Models\Offer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class TabletController extends Controller
{
    public function index()
    {
        return View::make('tablet.index', [
            'dishTypes' => DishType::all(),
            'offers' => Offer::all(),
            'now' => Carbon::now()->format('Y-m-d')
        ]);
    }

    public function fetchCocktails(CocktailsRequest $request) {
        return Response::json(Http::get('http://www.thecocktaildb.com/api/json/v1/1/search.php?s=' . $request['s'])->json());
    }
}

