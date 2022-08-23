<?php

use App\Http\Controllers\CashRegisterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TabletController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'showOffers'])->name('home.offers');
Route::get('/aanbiedingen', [HomeController::class, 'showOffers'])->name('home.offers');
Route::get('/menukaart', [HomeController::class, 'showMenu'])->name('home.menu_pdf');
Route::get('/menukaart/download', [HomeController::class, 'fetchMenuPDF'])->name('home.menu_pdf.download');
Route::get('/nieuws', [HomeController::class, 'showNews'])->name('home.news');
Route::get('/contact', [HomeController::class, 'showContact'])->name('home.contact');

Route::get('/tablet', [TabletController::class, 'index'])->name('tablet');
Route::get('/tablet/cocktails', [TabletController::class, 'fetchCocktails'])->name('tablet.cocktails.fetch');

Route::get('/kassa/login', [AuthController::class, 'show'])->name('cash_register.login');
Route::post('/kassa/login', [AuthController::class, 'login'])->name('cash_register.auth.login');
Route::post('/kassa/logout', [AuthController::class, 'logout'])->name('cash_register.auth.logout')->middleware('authenticated');

Route::group(['middleware' => ['authenticated', 'isAuthorized:2']], function () {
    Route::get('/kassa',
        fn () => Auth::user()->role_id >= 3 ? Redirect::to('/kassa/order') : Redirect::to('/kassa/menukaart')
    )->name('cash_register');

    Route::get('/kassa/menukaart', [CashRegisterController::class, 'showMenu'])->name('cash_register.menu_pdf');

    Route::group(['middleware' => 'isAuthorized:3'], function () {
        Route::get('/kassa/order', [CashRegisterController::class, 'showOrder'])->name('cash_register.order');
        Route::post('/kassa/pay', [CashRegisterController::class, 'pay'])->name('cash_register.order.pay');

        Route::get('/kassa/sales', [CashRegisterController::class, 'showSales'])->name('cash_register.sales');
        Route::post('/kassa/sales', [CashRegisterController::class, 'fetchSales'])->name('cash_register.sales.fetch');
    });

    Route::group(['middleware' => 'isAuthorized:4'], function () {
        Route::get('/kassa/admin', [CashRegisterController::class, 'showAdmin'])->name('cash_register.admin');

        Route::get('/kassa/admin/werknemers', [EmployeeController::class, 'index'])->name('cash_register.admin.employees.index');
        Route::get('/kassa/admin/werknemers/aanmaken', [EmployeeController::class, 'create'])->name('cash_register.admin.employees.create');
        Route::post('/kassa/admin/werknemers', [EmployeeController::class, 'store'])->name('cash_register.admin.employees.store');
        Route::get('/kassa/admin/werknemers/{employee}/aanpassen', [EmployeeController::class, 'edit'])->name('cash_register.admin.employees.edit');
        Route::put('/kassa/admin/werknemers/{employee}', [EmployeeController::class, 'update'])->name('cash_register.admin.employees.update');
        Route::delete('/kassa/admin/werknemers/{employee}', [EmployeeController::class, 'destroy'])->name('cash_register.admin.employees.destroy');

        Route::get('/kassa/admin/gerechten', [DishController::class, 'index'])->name('cash_register.admin.dishes.index');
        Route::get('/kassa/admin/gerechten/aanmaken', [DishController::class, 'create'])->name('cash_register.admin.dishes.create');
        Route::post('/kassa/admin/gerechten', [DishController::class, 'store'])->name('cash_register.admin.dishes.store');
        Route::get('/kassa/admin/gerechten/{dish}/aanpassen', [DishController::class, 'edit'])->name('cash_register.admin.dishes.edit');
        Route::put('/kassa/admin/gerechten/{dish}', [DishController::class, 'update'])->name('cash_register.admin.dishes.update');
        Route::delete('/kassa/admin/gerechten/{dish}', [DishController::class, 'destroy'])->name('cash_register.admin.dishes.destroy');

        Route::get('/kassa/admin/aanbiedingen', [OfferController::class, 'index'])->name('cash_register.admin.offers.index');
        Route::get('/kassa/admin/aanbiedingen/aanmaken', [OfferController::class, 'create'])->name('cash_register.admin.offers.create');
        Route::post('/kassa/admin/aanbiedingen', [OfferController::class, 'store'])->name('cash_register.admin.offers.store');
        Route::get('/kassa/admin/aanbiedingen/{offer}/aanpassen', [OfferController::class, 'edit'])->name('cash_register.admin.offers.edit');
        Route::put('/kassa/admin/aanbiedingen/{offer}', [OfferController::class, 'update'])->name('cash_register.admin.offers.update');
        Route::delete('/kassa/admin/aanbiedingen/{offer}', [OfferController::class, 'destroy'])->name('cash_register.admin.offers.destroy');
    });
});
