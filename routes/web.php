<?php

use App\Http\Controllers\TankController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', [TankController::class, 'edit'])->name('index');
//
//Route::get('/update-bazki', [TankController::class, 'index']);composer require laravel/ui

Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');
