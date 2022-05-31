<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\ThemesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\WhatYouGotController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('homeAdmin');
    //Route::resource('users',UserController::class);
    Route::resource('customers',CustomerController::class);
    Route::resource('feedbacks',FeedbackController::class);
    Route::resource('prices',PricesController::class);
    Route::resource('themes',ThemesController::class);
    Route::resource('aboutUs',AboutUsController::class);
    Route::resource('whatGot',WhatYouGotController::class);
   // Route::resource('category',CategoryController::class);
    //Route::resource('post',PostControlller::class);
});




