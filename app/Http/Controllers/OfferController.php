<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Dish;
use App\Models\Offer;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class OfferController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Offers/Index', [
            'offers' => Offer::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Offers/CreateEdit', [
            'dishes' => Dish::all()
        ]);
    }

    public function store(StoreOfferRequest $request)
    {
        $offer = Offer::create($request->all());
        $offer->dishes()->attach($request['dishIds'] ?? []);

        return Redirect::to('/kassa/admin/aanbiedingen');
    }

    public function edit(Offer $offer)
    {
        $offer->setAttribute('dishIds', $offer->dishes()->pluck('id'));

        return Inertia::render('Admin/Offers/CreateEdit', [
            'offer' => $offer,
            'dishes' => Dish::all()
        ]);
    }

    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        $id = $offer->id;
        $offer->setRawAttributes($request->except(['dishIds']))
            ->save();
        Offer::find($id)->dishes()->sync($request['dishIds'] ?? []);

        return Redirect::to('/kassa/admin/aanbiedingen');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();

        return Redirect::to('/kassa/admin/aanbiedingen');
    }
}
