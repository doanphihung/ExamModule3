<?php

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
})->name('home');
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.getAll');
Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/product/create', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
Route::get('/product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
