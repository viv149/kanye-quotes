<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KanyeQuoteController;
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

Route::get('/', [AuthController::class, 'Index'])->name('registerView');
Route::post('register', [AuthController::class, 'RegisterStore'])->name('registerStore');
Route::get('login-page', [AuthController::class, 'loginView'])->name('loginPage');
Route::post('login', [AuthController::class, 'Store'])->name('login');


Route::group(['middleware' => 'auth'], function(){

    Route::get('quotes', [KanyeQuoteController::class, 'index'])->name('quotes');
});

