<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProduct;

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
// Admin++++++++++++++

Route::get('/admin',[DashboardController::class ,'index'])->name('dashboard');
// product
Route::prefix('admin/product')->group(function(){
    Route::get('/list',[AdminProduct::class ,'index'])->name('list-product');
    Route::get('/create',[AdminProduct::class ,'create'])->name('create-product');
    Route::post('/store',[AdminProduct::class ,'store'])->name('store-product');
    Route::get('/edit/{product}',[AdminProduct::class ,'edit'])->name('edit-product');
    Route::put('/update/{product}',[AdminProduct::class ,'update'])->name('update-product');
    Route::get('/delete/{product}',[AdminProduct::class ,'destroy'])->name('destroy-product');
});
//category
Route::prefix('admin/category')->group(function(){
    Route::get('/list',[CategoryController::class ,'index'])->name('list-category');
    Route::get('/create',[CategoryController::class ,'create'])->name('create-category');
    Route::post('/store',[CategoryController::class ,'store'])->name('store-category');
    Route::get('/edit/{category}',[CategoryController::class ,'edit'])->name('edit-category');
    Route::put('/update/{category}',[CategoryController::class ,'update'])->name('update-category');
    Route::get('/delete/{category}',[CategoryController::class ,'destroy'])->name('destroy-category');
});


// Client++++++++++++++
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

