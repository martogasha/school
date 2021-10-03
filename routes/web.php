<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\ParentController;
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
    return view('welcome');
});
//driver routes
Route::get('driver', [DriverController::class, 'index']);
Route::get('listing', [DriverController::class, 'listing']);
//parent routes
Route::get('parent', [ParentController::class, 'index']);
