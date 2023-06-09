<?php

use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Models\Masyarakat;
use App\Models\Petugas;

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
        'title' => 'Beranda',
        'pengaduans' => Pengaduan::count()
    ]);
});

Route::get('/hasil-pengaduan', function () {
    return view('data.seluruh', [
        'title' => 'Hasil Pengaduan',
        'pengaduans' => Pengaduan::all()
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
    // Route::get('/pengaduan', function () {
    //     // $pengaduans = Pengaduan::all();
    //     return view('data.pengaduan', compact('pengaduans','title1'), [
    //         "title" => "Pengaduan",
    //         'pengaduans' => Pengaduan::all()
    //     ]);
    // });
    Route::resource('/pengaduan', PengaduanController::class);

    Route::get('/petugas', [PetugasController::class, 'index']);
    Route::post('/daftarkeun', [PetugasController::class, 'store']);

    Route::get('/cetak/{tglAwal}/{tglAkhir}', [AuthController::class, 'cetakPertanggal']);

    // Route::get('/rincian', [Authcontroller::class, 'detail']);

    Route::get('/masyarakat', function () {
        return view('data.pengguna', [
            "title" => "Pengguna",
            // "judul" => "Masyarakat",
            'rakyats' => Masyarakat::all()
        ]);
    });

    Route::get('/cetak-laporan', [PengaduanController::class, 'periodecetak']);

    Route::get('/hasil', function () {
        return view('data.hasil', [
            "title" => "Hasil Pengaduan",
            // "judul" => "Hasil ",
            'pengaduans' => Pengaduan::all()
        ]);
    });

    Route::get('/tambah', function () {
        return view('data.create-pengguna', [
            "title" => "Pengguna"
        ]);
    });

    Route::get('/tanggapan{id}', [PengaduanController::class, 'edit']);
    Route::post('/create-tanggapan{id}', [PengaduanController::class, 'update']);

    // Route::get('/tanggapan', function () {
    //     return view('data.create-tanggapan', [
    //         "title" => "Pengaduan"
    //     ]);
    // });
});
