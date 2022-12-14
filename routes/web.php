<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Product;
use App\Http\Controllers\User;


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

Route::get('/dashboard', function () {
   return view('welcome');
})->name('dashboard');

//Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::resource('category', CategoryController::class)->name('GET', 'category');
Route::resource('product', Product::class)->name('GET', 'product');
Route::resource('user', User::class)->name('GET', 'user');

