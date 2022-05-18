<?php

use App\Http\Controllers\Admin\BMIController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SeftyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.user.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(["as"=>'user.', "prefix"=>'user',  "middleware"=>['auth','user']],function(){
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
});

Route::group(["as"=>'admin.', "prefix"=>'admin', "middleware"=>['auth','admin']],function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout'])->name('logout');
    Route::resource('news', NewsController::class);
    Route::resource('seafty', SeftyController::class);
    Route::resource('bmi', BMIController::class);
    Route::get('profile', [App\Http\Controllers\Admin\AdminDashboardController::class, 'profile'])->name('profile');
});
