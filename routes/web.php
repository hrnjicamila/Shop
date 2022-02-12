<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ReservationController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/products', function () {
    return view('products.index');
})->name('products');


Route::middleware(['auth:sanctum', 'verified'])->get('products',[ProductController::class,'index'])->name('products');
Route::middleware(['auth:sanctum', 'verified'])->get('add_product',[ProductController::class,'create'])->name('add_product');
Route::middleware(['auth:sanctum', 'verified'])->post('store_product',[ProductController::class,'store'])->name('store_product');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_product',[ProductController::class,'delete'])->name('delete_product');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_product',[ProductController::class,'edit'])->name('edit_product');
Route::middleware(['auth:sanctum', 'verified'])->post('update_product',[ProductController::class,'update'])->name('update_product');



Route::middleware(['auth:sanctum', 'verified'])->get('categories',[CategoryController::class,'index'])->name('categories');
Route::middleware(['auth:sanctum', 'verified'])->get('brands',[BrandController::class,'index'])->name('brands');


Route::middleware(['auth:sanctum', 'verified'])->get('reservations',[ReservationController::class,'index'])->name('reservations') ;
Route::middleware(['auth:sanctum', 'verified'])->get('reservation_product',[ReservationController::class,'create'])->name('reservation_product') ;
Route::middleware(['auth:sanctum', 'verified'])->post('store_reservation',[ReservationController::class,'store'])->name('store_reservation') ;