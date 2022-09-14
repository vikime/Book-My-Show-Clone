<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Foundation\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AutoAddressController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\SeatController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

//     return view('welcome');
// });

// Route::get('/', function () {

//     return view('seat_booking');
// });

Auth::routes();

// ->Type == 0
// return redirect()->action([HomeController::class, 'payment']);

Route::get('/home', function () {

    if(Auth::check() && Auth::user()->Type == 0){
        return view('seat_booking/{id}');
    }

    else{
        return view('seat_booking/{id}');

    }
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);

Route::get('/test', [App\Http\Controllers\HomeController::class, 'welcome']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ticket_booking', [App\Http\Controllers\HomeController::class, 'ticketregistration'])->name('ticket_booking');
Route::get('ticket_for_Partner', [App\Http\Controllers\HomeController::class, 'ticketregistrationforpartner'])->name('ticket_for_Partner');


// Route::get('auto-complete-address', [AutoAddressController::class, 'googleAutoAddress']);

Route::get('/seat_booking/{id}', [App\Http\Controllers\HomeController::class, 'seat_booking'])->name('seat_booking');
Route::post('/seat_booking', [App\Http\Controllers\SeatController::class, 'create'])->name('create');


//Pass what ever values you have to from seat booking page to this payment post page

Route::post('payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');

Route::get('store_booking_details', [App\Http\Controllers\HomeController::class, 'storeBookingDetails']);

//  Route::post('payment1', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment1');


//  Route::get('payment/{order_id}', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment_id');


Route::get('confirmation', [App\Http\Controllers\HomeController::class, 'payment_Con'])->name('confirmation');


Route::get('pay', [App\Http\Controllers\HomeController::class, 'generateBookingPaymentToken'])->name('generateBookingPaymentToken');


// Route::group(['middleware' => ['auth']], function() {
//     Route::get('watch', [App\Http\Controllers\HomeController::class, 'watch']);

//  });

// Route::get('pay_ment', [App\Http\Controllers\SeatController::class,'create'])->name('create');


// Route::get('abc', function()
// {
//     dd(App::make('SeatInterface'));
// });

// Route::get('abc', function()
// {
//     dd(App::make('SeatInterface'));
// // });
// });

