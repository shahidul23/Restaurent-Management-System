<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/user',[AdminController::class,'user']);

Route::get('/deletemanu/{id}',[AdminController::class,'deletemanu']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/updatemanu/{id}',[AdminController::class,'updatemanu']);

Route::post('/update/{id}',[AdminController::class,'updatefood']);

Route::get('/food',[AdminController::class,'food']);

Route::post('/uplodefood',[AdminController::class,'uplode']);

Route::get('/chefs',[AdminController::class,'chefs']);

Route::post('/tablereservation',[AdminController::class,'talbereservations']);

Route::get('/reservations',[AdminController::class,'reservations']);

Route::get('/deleteorder/{id}',[AdminController::class,'deleteorder']);

Route::get('/chefdelete/{id}',[AdminController::class,'chefdelete']);

Route::get('/redirect',[HomeController::class,'redirect']);

Route::post('/uplodechef',[AdminController::class,'uplodechef']);

Route::post('/updatechef/{id}',[AdminController::class,'updatechef']);

Route::get('/chefpudate/{id}',[AdminController::class,'chefpudate']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);

Route::get('/showcart/{id}',[HomeController::class,'showcart']);

Route::get('/remove/{id}',[HomeController::class,'remove']);

Route::post('/orderconfirm',[HomeController::class,'orderconfirm']);

Route::get('/orders',[AdminController::class,'orders']);

Route::get('/search',[AdminController::class,'search']);

Route::get('/deletefoodorder/{id}',[AdminController::class,'deletefoodorder']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
