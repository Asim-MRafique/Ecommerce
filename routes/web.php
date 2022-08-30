<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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

// Route::get('logout', function () {
//     Session::forget('user');
//     return redirect('/login');
// });
Route::view('login',"Login");
Route::post('login',[UserController::class,'Login']);
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'Details']);
Route::get('search',[ProductController::class,'Search']);
Route::post('Add_To_Cart',[ProductController::class,'AddToCart']);
Route::get('cartlist',[ProductController::class,'CartList']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'orderNow']);





