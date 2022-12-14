<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    // erase the session
    Session::forget('user');
    return redirect('login');
});
Route::view("/register",[UserController::class,'register']);
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [UserController::class, 'fetchUser']);
Route::get('/add-user', [UserController::class, 'create']);
Route::post('store-user', [UserController::class, 'store']);
Route::get('/edit-user/{id}', [UserController::class, 'edit']);
Route::put('/update-user/{id}', [UserController::class, 'update']);
Route::get('/delete-user/{id}', [UserController::class, 'delete']);
