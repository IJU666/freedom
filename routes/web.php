<?php

use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengaduanController;


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
    return view('landing-page', [
        'title' => 'Beranda'
    ]);
});

Route::post('/pengaduan', [PengaduanController::class, 'store']);

Route::get('/login', [AuthController::class, 'masuk'])->middleware('nonauth');
Route::post('/masuk', [AuthController::class, 'login']);
Route::post('/keluar', [AuthController::class, 'keluar']);

Route::get('/daftar', function () {
    return view('auth.register', [
        'title' => 'Daftar'
    ]);
});

Route::get('/lupa-password', function () {
    return view('auth.forgot-password', [
        'title' => 'Lupa Kata Sandi'
    ]);
});

Route::post('/regis', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:masyarakat']], function () {
    Route::get('/rincian', function () {
        // return view('data.hasil-user', [
        //     'title' => 'Detail Pengaduan',
        //     'pengaduans' => Pengaduan::all()
        // ]);
        return view('data.hasil-user', [
            'title' => 'Detail Pengaduan',
            'pengaduans' => Pengaduan::where('masyarakat_id', Auth::guard('masyarakat')->user()->id)->get()
        ]);
    });
});

Route::group(['middleware' => ['auth:user,petugas,masyarakat']], function () {
    Route::get('/pengaduan', function () {
        return view('data.pengaduan', [
            "title" => "Pengaduan",
            'pengaduans' => Pengaduan::all()
        ]);
    });

    // Route::get('/rincian', [Authcontroller::class, 'detail']);

    Route::get('/pengguna', function () {
        return view('data.pengguna', [
            "title" => "Pengguna"
        ]);
    });

    Route::get('/hasil', function () {
        return view('data.hasil', [
            "title" => "Hasil Pengaduan",
            'pengaduans' => Pengaduan::all()
        ]);
    });

    Route::get('/tambah', function () {
        return view('data.create-pengguna', [
            "title" => "Pengguna"
        ]);
    });

    Route::get('/tanggapan', function () {
        return view('data.create-tanggapan', [
            "title" => "Pengaduan"
        ]);
    });
});
