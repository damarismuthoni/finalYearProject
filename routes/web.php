<?php

use App\Http\Controllers\ArrestsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CitizensController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PoliceStationController;
use App\Http\Controllers\PoliceUserController;
use App\Models\PoliceStation;
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

Route::get('/police-users', [PoliceUserController::class, 'getPoliceUsers']);


Route::get('/abstracts', [
   App\Http\Controllers\AbstractsController::class, 'getAbstracts'
]);

Route::get('/arrests' , [ArrestsController::class, 'getArrests']);

Route::get('/categories' , [CategoriesController::class, 'getCategories']);

Route::get('/citizens' , [CitizensController::class, 'getCitizens']);

Route::get('/payment' , [PaymentController::class, 'getPayment']);

Route::get('/police-station' , [PoliceStationController::class, 'getPoliceStation']);

