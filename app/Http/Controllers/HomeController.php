<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use App\Models\Offer;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    public function showOffers()
    {
        return View::make('customer_section.pages.offers', [
            'offers' => Offer::all()
        ]);
    }

    public function showContact()
    {
        return View::make('customer_section.pages.contact');
    }

    public function showMenu()
    {
        return View::make('customer_section.pages.menu', [
            'dishTypes' => DishType::all(),
            'offers' => Offer::all(),
            'now' => Carbon::now()->format('Y-m-d')]);
    }

    public function showNews()
    {
        return View::make('customer_section.pages.news');
    }

    public function fetchMenuPDF()
    {
        $now = Carbon::now();

        $pdf = SnappyPdf::loadView('menu_pdf.layout', [
            'dishTypes' => DishType::all(),
            'offers' => Offer::all(),
            'now' => $now->format('Y-m-d')
        ]);

        return $pdf->download($now->format('Ymd') . '_dgd_menu.pdf');
    }
}
