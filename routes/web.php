<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('client.product');
// });
Route::get('/', [ProductController::class, 'index'])->name('home.product');
Route::get('/product', [ProductController::class, 'list'])->name('list.product');
Route::get('/study', [ProductController::class, 'studyProduct'])->name('study.product');
Route::get('/work', [ProductController::class, 'workProduct'])->name('work.product');
Route::get('/entertaiment', [ProductController::class, 'entertaimentProduct'])->name('entertaiment.product');
Route::get('/detail/{id}', [ProductController::class, 'detailProduct'])->name('detail.product');
Route::get('/cart',  [ProductController::class, 'cartProduct'])->name('cart.product');

 

Route::get('/deal', function () {
    return view('client.deal');
})->name('deal.product');
Route::get('/conduct', function () {
    return view('client.conduct');
})->name('conduct.product');
Route::get('/login', function () {
    return view('client.login');
})->name('login.product');
Route::get('/logout', function () {
    return view('client.logout');
})->name('logout.product');

