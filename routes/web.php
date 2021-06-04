<?php

use App\Http\Controllers\UsersController;
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
});

Auth::routes();

Route::get('/users/list', [UsersController::class, 'index'])->middleware('auth');
Route::delete('users/{user}', [UsersController::class, 'destroy'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('products', [ProductsController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('products/create', [ProductsController::class, 'create'])->name('products.create')->middleware('auth');