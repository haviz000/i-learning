<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.user.login')->name('login');
         Route::view('/register','dashboard.user.register')->name('register');
         Route::post('/create',[UserController::class,'create'])->name('create');
         Route::post('/check',[UserController::class,'check'])->name('check');
    });
    Route::middleware(['auth','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          Route::view('/nilai','dashboard.user.nilai')->name('nilai');
          Route::view('/iot','dashboard.user.kelas.iot')->name('iot');
          Route::view('/dw','dashboard.user.kelas.dw')->name('dw');
          Route::view('/network','dashboard.user.kelas.network')->name('network');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });

});