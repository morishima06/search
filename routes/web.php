<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
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

Route::get('login/guest', [SimpleLoginController::class,'guestLogin'])->name('login.guest');

// Loginページのroute
Route::get('/dashboard',[AccountController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/upload', function () { return view('/upload');})->middleware(['auth'])->name('upload');
Route::post('/upload/check', [AccountController::class, 'upload_check'])->name('upload_check');
Route::get('/show',[AccountController::class, 'show'] )->middleware(['auth'])->name('show');
Route::get('/show_edit/{id}',[AccountController::class, 'show_edit'] )->middleware(['auth'])->name('show_edit');
Route::post('/show_edit_check',[AccountController::class, 'show_edit_check'] )->middleware(['auth'])->name('show_edit_check');
Route::get('/show_delete_confirm/{id}',[AccountController::class, 'show_delete_confirm'] )->middleware(['auth'])->name('show_delete_confirm');
Route::post('/delete/{id}',[AccountController::class, 'show_delete'] )->middleware(['auth'])->name('show_delete');
Route::get('/edit',[AccountController::class, 'edit'] )->middleware(['auth'])->name('edit');
Route::post('/edit',[AccountController::class, 'edit_check'] )->middleware(['auth'])->name('edit_check');







require __DIR__.'/auth.php';
