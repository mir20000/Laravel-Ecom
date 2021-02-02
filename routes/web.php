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
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("/product/{id}",[ProductController::class,'product_details']);
Route::get("/search",[ProductController::class,'search']);
Route::get("/cart",[ProductController::class,'cartList']);
Route::post("/addtocart",[ProductController::class,'addToCart']);
Route::get("/removecart/{id}",[ProductController::class,'removeCart']);