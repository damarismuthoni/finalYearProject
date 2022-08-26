<?php

use App\Http\Controllers\AbstractsController;
use App\Http\Controllers\ArrestsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CitizensController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PoliceStationController;
use App\Http\Controllers\PoliceUserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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

Route::post('/register' , [PoliceUserController::class, 'register']);

Route::post('/arrests' , [ArrestsController::class, 'arrests']);

Route::post('/citizens' , [CitizensController::class, 'citizens']);

Route::post('/payment' , [PaymentController::class, 'payment']);

Route::post('/police-station' , [PoliceStationController::class, 'PoliceStation']);

Route::post('/abstracts' , [AbstractsController::class, 'saveAbstracts']);

Route::post('/categories' , [CategoriesController::class, 'categories']);

Route::post('/login' ,[PoliceUserController::class, 'login']);