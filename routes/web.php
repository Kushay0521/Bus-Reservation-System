<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactquery;
use App\Http\Controllers\userregister;
use App\Http\Controllers\findbus;
use App\Http\Controllers\bookings;
use Illuminate\Http\RedirectResponse;
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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contactus', function () {
    $fill = session('fill');
    $res = session('res');
    session()->pull('fill');
    session()->pull('res');
    return view('contactus', ["fill" => $fill, "res" => $res]);
});
Route::get('/loginpage', function () {
    $err = session('err');
    session()->pull('err');
    return view('loginpage', ["err" => $err]);
})->middleware('LoggedCheck');

Route::get('/registrationpage', function () {
    $fill = session('fill'); 
    $res = session('res');
    session()->pull('fill');
    session()->pull('res');
    return view('registrationpage', ["fill" => $fill, "res" => $res]);
});

Route::get('/showbuses', function () {
    $buses = session('buses');
    $num = session('numofbus');
    return view('showbuses', ["buses" => $buses, "num" => $num]);
})->middleware('Showbuses');;

Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});
Route::post('submitquery', [contactquery::class, 'SubmitQuery']);
Route::post('register', [userregister::class, 'Register']);
Route::post('login', [userregister::class, 'Login']);
Route::post('change', [userregister::class, 'ChangePassword']);
Route::post('showbus', [findbus::class, 'BusData']);
Route::post('book', [findbus::class, 'BookBus']);
Route::get('showbooking', [bookings::class, 'Show']);
Route::post('go', [bookings::class, 'ShowTicket']);
Route::get('cancel', [bookings::class, 'CancelTicket']);
Route::group(['middleware' => ['ProtectedPages']], function () {
    Route::get('/userpage', function () {
        $change = session('change');
        $res = session('res');
        session()->pull('change');
        session()->pull('res');
        return view('userpage', ["change" => $change, "res" => $res]);
    });
    Route::get('/cancellation', function () {
        $goaction = session('goaction');
        $cancel = session('cancel');
        $cancelled = session('cancelled');
        $ticket = session('ticket');
        session()->pull('goaction');
        session()->pull('cancel');
        session()->pull('cancelled');
        session()->pull('ticket'); 
        return view('cancellation', ["goaction" => $goaction, "cancel" => $cancel, "cancelled" => $cancelled, "ticket" => $ticket]);
    });
    Route::get('/showbookings', function () {
        $num = session('num');
        $bookings = session('bookings');
        session()->pull('num');
        session()->pull('bookings');
        return view('showbookings', ["num" => $num, "bookings" => $bookings]);
    })->middleware('Showbookings');
    Route::get('/showticket', function () {
        $book = session('book');
        $booked = session('booked');
        $ticket = session('ticket');
        session()->pull('book');
        session()->pull('booked');
        session()->pull('ticket');
        return view('showticket', ["book" => $book, "booked" => $booked, "ticket" => $ticket]);
    })->middleware('Showticket');
});
