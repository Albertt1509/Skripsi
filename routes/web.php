<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ViewProduct;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/view_category',[AdminController::class,'view_category']);

Route::post('/add_category',[AdminController::class,'add_category']);

Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

Route::post('/edit_product/{id}',[AdminController::class,'edit_product']);

Route::get('/view_product',[AdminController::class,'view_product']);

Route::post('/add_product',[AdminController::class,'add_product']);

Route::get('/show_product',[AdminController::class,'show_product']);

Route::get('/kirim/{id}',[AdminController::class,'kirim']);

Route::get('/order',[AdminController::class,'order']);

Route::get('/update_produk/{id}',[AdminController::class,'update_produk']);

Route::post('/update_produk_confirm/{id}',[AdminController::class,'update_produk_confirm']);





Route::get('/kompleks/{id}',[HomeController::class,'kompleks']);

Route::get('/show_order',[HomeController::class,'show_order']);

Route::post('/keranjang/{id}',[HomeController::class,'keranjang']);

Route::get('/show_keranjang',[HomeController::class,'show_keranjang']);

Route::get('/removeKeranjang/{id}',[HomeController::class,'removeKeranjang']);

Route::get('/cod',[HomeController::class,'cod']);

Route::get('/batal_order/{id}',[HomeController::class,'batal_order']);