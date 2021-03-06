<?php

use App\Http\Controllers\LDXPS\CustomersController;
use App\Http\Controllers\LDXPS\VendorsController;
use Illuminate\Support\Facades\Route;

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
    return view('start');
});
Route::get('/home', function () {
    return view('LDXPS.home.index');
})->name('home');

Route::resource('/customers', CustomersController::class);
Route::resource('/vendors', VendorsController::class);
