<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DasboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about'
    ]);
});

Route::get('/product', function () {
    return view('product', [
        "title" => "Product",
        'active' => 'product'
    ]);
});

//login
Route::get('/login', [LoginController::class , 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class , 'authenticate']);

//logout
Route::post('/logout', [LoginController::class , 'logout']);

//register
Route::get('/register', [RegisterController::class , 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class , 'store']);

Route::get('/dashboard-user', [DasboardUserController::class, 'index']);

Route::prefix('/dashboard-admin')->middleware('auth')->group(function () {
    // dashboard admin
    Route::get('/', [DashboardAdminController::class, 'index']);
});

// category
Route::resource('/categories', CategoryController::class);
// product
Route::resource('/products', ProductController::class);