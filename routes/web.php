<?php

use App\Http\Controllers\AbstractsController;
use App\Http\Controllers\ArrestsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PoliceStationController;
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
    return redirect('/login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::group(['middleware' => []], function(){
    Route::get('/homepage', function () {
        return view('homepage');
    });
    
    Route::get('/profiles', function () {
        return view('profiles');
    });
    
   
    Route::get('abstracts/new', [AbstractsController::class,'new_abstract'])->name('abstract_form');
    Route::get('abstracts/edit/{id}', [AbstractsController::class,'edit_abstract'])->name('edit_abstract');

    Route::get('/abstractlist' , [AbstractsController::class, 'get_abstracts'])->name('abstractlist');

    Route::get('/arrests/new' , [ ArrestsController::class, 'new_arrests']);

    Route::get('/payments', function () {
        return view('paymentslist');
    });
    Route::get('/arrests', function () {
        return view('arrestslist');
    });

    Route::get('/payments/new', function () {
        return view('payments_form');
    });

    Route::get('/paymentslist' , [PaymentController::class, 'get_payments'])->name('paymentslist');

    
    Route::get('/arrestslist', function () {
        return view('arrestslist');
    });
    
  

    Route::get('/arrestslist' , [ArrestsController::class, 'get_arrests'])->name('arrestslist');
    
    Route::get('/police-station', [PoliceStationController::class, 'displayReport']);    

});


