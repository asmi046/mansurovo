<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/work', [WorkController::class, 'index'])->name('work');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/about', [AboutController::class, 'index'])->name('about');
