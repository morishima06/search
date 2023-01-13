<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SimpleLoginController;

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

// メインページのroute
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/category/{category?}', [HomeController::class, 'category'])->name('category');
Route::get('/brands/{brand?}/{category?}', [HomeController::class, 'brands'])->name('brands');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
//contactページのroute
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/contact/confirm',[ContactController::class, 'confirm'])->name('contact_confirm');
Route::post('/thanks',[ContactController::class, 'send'])->name('send');

//ゲストログイン
Route::get('login/guest', [SimpleLoginController::class,'guestLogin'])->name('login.guest');

// Loginページのroute
Route::get('/dashboard',[AccountController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/product',[ProductController::class, 'index'] )->middleware(['auth'])->name('product');

Route::get('/add_product', function () { return view('/add_product');})->middleware(['auth'])->name('add_product');
Route::post('/add_product_check', [ProductController::class, 'add_check'])->name('add_check');
Route::get('/edit_product/{id}',[ProductController::class, 'edit'] )->middleware(['auth'])->name('edit_product');
Route::put('/edit_product_check',[ProductController::class, 'edit_check'] )->middleware(['auth'])->name('edit_product_check');
Route::get('/delete_product_confirm/{id}',[ProductController::class, 'delete_confirm'] )->middleware(['auth'])->name('delete_product_confirm');
Route::delete('/delete_product_check/{id}',[ProductController::class, 'delete_check'] )->middleware(['auth'])->name('delete_product_check');

Route::get('/profile',[ProfileController::class, 'index'] )->middleware(['auth'])->name('profile');
Route::put('/edit_profile',[ProfileController::class, 'edit'] )->middleware(['auth'])->name('edit_profile');







require __DIR__.'/auth.php';
