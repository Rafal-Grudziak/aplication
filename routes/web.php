<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('item/{product}', [WelcomeController::class, 'show'])->name('item');
Route::post('item/', [WelcomeController::class, 'addToBasket'])->name('item.add_to_basket')->middleware('auth');
Route::get('basket', [WelcomeController::class, 'showBasket'])->name('basket')->middleware('auth');
Route::delete('basket/{basket}', [WelcomeController::class, 'destroy'])->name('basket.destroy')->middleware('auth');


Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('products', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('products/{product}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::post('products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');
Route::get('products/show/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');

Route::get('/users/list', [UsersController::class, 'index'])->middleware('auth');
Route::delete('users/{user}', [UsersController::class, 'destroy'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');