<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
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
Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'authLogin'])->name('auth-login');

    Route::get('/home', function () {
        return view('home');
    }); 
    // prefix : awalan (mengelompokkan url path sesuai fiturnya)
    // name prefix :awalan name route pada kelompok url path 
    // group : mengelompokkan url path
    // ::get -> menampilkan halaman, ::post -> menambah data ke db, ::patch -> mengubah data ke db, ::delete -> menghapus data ke db
    // NamaController::class, 'namafunction'
    // name() -> nama route yg dipanggil di href/action
   


    // Metode prefix dapat digunakan untuk mengawali setiap rute dalam grup dengan URL tertentu dan digunakan untuk yang lebih dari satu fitur.
    Route::prefix('/user')->name('user.')->group(function(){
        Route::get('/data', [UserController::class, 'index'])->name('data');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        //mengubah data db
        Route::patch('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
    });

