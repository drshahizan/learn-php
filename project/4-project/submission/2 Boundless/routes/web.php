<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/reviews', [UserController::class, 'viewReviews'])->name('user.reviews');
Route::post('/user/reviews', [UserController::class, 'addReview'])->name('user.reviews.add');
Route::delete('/user/reviews/{id}', [UserController::class, 'deleteReview'])->name('user.reviews.delete');

Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');

Route::get('/admin/festivals', [AdminController::class, 'indexFestival'])->name('admin.festivals');
Route::post('/admin/festivals/add', [AdminController::class, 'addFestival'])->name('admin.festivals.add');
Route::delete('/admin/festivals/delete/{festival}', [AdminController::class, 'deleteFestival'])->name('admin.festivals.delete');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/culture', [App\Http\Controllers\AdminController::class, 'cultureList'])->name('admin.culture');
Route::post('/admin/culture/submit', [App\Http\Controllers\AdminController::class, 'cultureListSubmit']);
Route::delete('/admin/culture/delete', [App\Http\Controllers\AdminController::class, 'cultureListDelete']);
