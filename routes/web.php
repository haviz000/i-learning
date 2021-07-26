<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Lecturer\LecturerController; 
use Illuminate\Support\Facades\DB;
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
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.user.login')->name('login');
         Route::view('/register','dashboard.user.register')->name('register');
         Route::post('/create',[UserController::class,'create'])->name('create');
         Route::post('/check',[UserController::class,'check'])->name('check');
    });
    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::get('/home',[UserController::class,'getKelas'])->name('home');
          Route::view('/qr','dashboard.user.qr')->name('qr');
           Route::get('/printpdf',[UserController::class,'printPdf'])->name('printpdf');
          Route::get('/nilai',[UserController::class,'getNilai'])->name('nilai'); 
          Route::view('/iot','dashboard.user.kelas.iot')->name('iot');
          Route::view('/soaliot','dashboard.user.soal.soaliot')->name('soaliot');
          Route::view('/dw','dashboard.user.kelas.dw')->name('dw');
          Route::view('/network','dashboard.user.kelas.network')->name('network');
          Route::get('/kelas', [UserController::class,'getKelas'])->name('kelas');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::view('/datadosen','dashboard.admin.datadosen')->name('datadosen');
        Route::view('/datamahasiswa','dashboard.admin.datamahasiswa')->name('datamahasiswa');

        Route::get('/lecturer',[AdminController::class,'getLecturer'])->name('lecturer');
        Route::get('/kelas', [AdminController::class,'getKelas'])->name('kelas');
        Route::get('/create-dosen',[AdminController::class,'createDosen'])->name('create-dosen');

        //mahasiswa
        Route::get('/tambah-mahasiswa',[AdminController::class,'tambahMahasiswa'])->name('tambah-mahasiswa');
        Route::post('/create-mahasiswa',[AdminController::class,'createMahasiswa'])->name('create-mahasiswa');
        Route::get('/edit-mahasiswa/{id}',[AdminController::class,'showEditMahasiswa'])->name('edit-mahasiswa');
        Route::post('/editMahasiswa/{id}',[AdminController::class,'editMahasiswa'])->name('editMahasiswa');
        Route::get('/delete-mahasiswa/{id}',[AdminController::class,'destroyMahasiswa'])->name('delete-mahasiswa');

        //dosen
        Route::get('/tambah-dosen',[AdminController::class,'tambahDosen'])->name('tambah-dosen');
        Route::post('/create-dosen',[AdminController::class,'createDosen'])->name('create-dosen');
        Route::get('/edit-dosen/{id}',[AdminController::class,'showEditDosen'])->name('edit-dosen');
        Route::post('/editDosen/{id}',[AdminController::class,'editDosen'])->name('editDosen');
        Route::get('/delete-dosen/{id}',[AdminController::class,'destroyDosen'])->name('delete-dosen');

        //kelas
        Route::get('/tambah-kelas',[AdminController::class,'tambahKelas'])->name('tambah-kelas');
        Route::post('/create-kelas',[AdminController::class,'createKelas'])->name('create-kelas');
        Route::get('/edit-kelas/{id}',[AdminController::class,'showEditKelas'])->name('edit-kelas');
        Route::post('/editKelas/{id}',[AdminController::class,'editKelas'])->name('editKelas');
        Route::get('/delete-kelas/{id}',[AdminController::class,'destroyKelas'])->name('delete-kelas');

        Route::get('/student', [AdminController::class,'getStudent'])->name('student');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

    });

});


Route::prefix('lecturer')->name('lecturer.')->group(function(){
   
    Route::middleware(['guest:lecturer','PreventBackHistory'])->group(function(){
            Route::view('/login','dashboard.lecturer.login')->name('login');
            Route::post('/check',[LecturerController::class,'check'])->name('check');
       });

       Route::middleware(['auth:lecturer','PreventBackHistory'])->group(function(){
            Route::view('/home','dashboard.lecturer.home')->name('home');
            Route::get('/edit-nilai/{id}',[LecturerController::class,'showEditNilai'])->name('edit-nilai');
            Route::post('/editNilai/{id}',[LecturerController::class,'editNilai'])->name('editNilai');
            Route::get('/penilaian',[LecturerController::class,'getStudent'])->name('penilaian');
            Route::post('logout',[LecturerController::class,'logout'])->name('logout');
       });
});









