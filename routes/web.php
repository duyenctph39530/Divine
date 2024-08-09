<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProduct;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
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

Route::get('/w', function () {
    return view('welcome');
});
// Admin++++++++++++++
Route::middleware(['auth', 'admin'])->get('/admin', [DashboardController::class, 'index'])->name('dashboard');
// product
Route::middleware('auth')->prefix('admin/product')->group(function () {
    Route::get('/list', [AdminProduct::class, 'index'])->name('list-product');
    Route::get('/create', [AdminProduct::class, 'create'])->name('create-product');
    Route::post('/store', [AdminProduct::class, 'store'])->name('store-product');
    Route::get('/edit/{product}', [AdminProduct::class, 'edit'])->name('edit-product');
    Route::put('/update/{product}', [AdminProduct::class, 'update'])->name('update-product');
    Route::get('/delete/{product}', [AdminProduct::class, 'destroy'])->name('destroy-product');
});
//category
Route::middleware(['auth', 'admin'])->prefix('admin/category')->group(function () {
    Route::get('/list', [CategoryController::class, 'index'])->name('list-category');
    Route::get('/create', [CategoryController::class, 'create'])->name('create-category');
    Route::post('/store', [CategoryController::class, 'store'])->name('store-category');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('update-category');
    Route::get('/delete/{category}', [CategoryController::class, 'destroy'])->name('destroy-category');
});

//user admin

Route::middleware(['auth', 'admin'])->get('/admin/user', [UserController::class, 'index'])->name('list-user');
Route::middleware(['auth', 'admin'])->patch('/admin/toggle_active/{user}', [UserController::class, 'toggleActive'])->name('toggleActive');

//user client
Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/detail-user/{user}', [UserController::class, 'detail_user'])->name('detail-user');
    Route::put('/detail-user/{user}', [UserController::class, 'updateUser'])->name('updateUser');
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [UserController::class, 'updatePassword'])->name('updatePassword');


});




//đăng ký, đăng nhập
Route::get('/login', [UserController::class, 'login'])->name('login-user');
Route::post('/login', [UserController::class, 'postLogin'])->name('postLogin-user');

Route::post('/logout', [UserController::class, 'logout'])->name('logout-user');

Route::get('/register', [UserController::class, 'register'])->name('register-user');
Route::post('/register', [UserController::class, 'postRegister'])->name('postRegister-user');


// Client++++++++++++++
Route::get('/', [ProductController::class, 'index'])->name('home.product');
Route::get('/product', [ProductController::class, 'list'])->name('list.product');
Route::get('/study', [ProductController::class, 'studyProduct'])->name('study.product');
Route::get('/work', [ProductController::class, 'workProduct'])->name('work.product');
Route::get('/entertaiment', [ProductController::class, 'entertaimentProduct'])->name('entertaiment.product');
Route::get('/detail/{id}', [ProductController::class, 'detailProduct'])->name('detail.product');

Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/cart', [ProductController::class, 'cartProduct'])->name('cart.product');
    Route::get('/cart/{id}', [ProductController::class, 'addCart'])->name('add.cart');
    Route::patch('/cart/update/{id}', [ProductController::class, 'updateCart'])->name('update.cart');

    Route::delete('/cart/delete/{id}',[ProductController::class,'deleteCart'])->name('delete-cartProduct');
});
Route::get('/search', [ProductController::class, 'search'])->name('search');




Route::get('/deal', function () {
    return view('client.deal');
})->name('deal.product');
Route::get('/conduct', function () {
    return view('client.conduct');
})->name('conduct.product');

