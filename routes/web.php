<?php

use App\Http\Controllers\DataPenilaianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wisata;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\SkalaController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KeamananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\ObjekAtraksiController;

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
Route::get('/tes', function () {
    return view('tes');
});

Route::get('/datawisata', function () {
    return view('datawisata');
});

Route::get('/KetNilai', function () {
    return view('KetNilai');
});

Route::get('/Siwisata', function () {
    return view('landing');
});

// Route::get('/login', function () {
//     return view('login');
// });

route::get('/login', [LoginController::class, 'login']);
route::get('/register', [LoginController::class, 'register']);

route::post('/registeruser', [LoginController::class, 'registeruser']);
route::post('/loginproses', [LoginController::class, 'loginproses']);
route::get('/logout', [LoginController::class, 'logout']);

route::get('/template', [wisata::class, 'coba']);
route::get('/profile-user', [wisata::class, 'Profil']);

route::get('/dashboard', [wisata::class, 'halo']);
route::get('/sidebar', [wisata::class, 'budrek']);
route::get('/login', [wisata::class, 'TampilanLogin']);

route::get('/arika', [EmployeeController::class, 'index'])->name('arika');
route::get('/tes', [EmployeeController::class, 'index']);
route::get('/tampinsert', [wisata::class, 'budrek']);

route::get('/datawisata', [EmployeeController::class, 'index']);
route::get('/datawisatainsert', [EmployeeController::class, 'create']);
route::post('/save', [EmployeeController::class, 'store']);
route::get('/edit/{id}', [EmployeeController::class, 'show']);
route::put('/update/{id}', [EmployeeController::class, 'update']);
route::get('/deletedatwisata/{id}', [EmployeeController::class, 'destroy']);
route::get('/reportdatwis', [EmployeeController::class, 'generatePDF']);

route::get('/KetNilai', [PenilaianController::class, 'index']);
route::get('/insertKetNilai', [PenilaianController::class, 'create']);
route::post('/saved', [PenilaianController::class, 'store']);
route::get('/editKetNilai/{id}', [PenilaianController::class, 'show']);
route::put('/updateKetNilai/{id}', [PenilaianController::class, 'update']);
route::get('/deleteketnilai/{id}', [PenilaianController::class, 'destroy']);
route::get('/reportket', [PenilaianController::class, 'generatePDF']);

route::get('/Skala', [SkalaController::class, 'index']);
route::get('/insertSkala', [SkalaController::class, 'create']);
route::post('/saveSkala', [SkalaController::class, 'store']);
route::get('/editSkala/{id}', [SkalaController::class, 'show']);
route::put('/updateSkala/{id}', [SkalaController::class, 'update']);
route::get('/deleteSkala/{id}', [SkalaController::class, 'destroy']);
route::get('/reportSkala', [SkalaController::class, 'generatePDF']);

route::get('/lokasi', [LokasiController::class, 'index']);
route::get('/insertlokasi', [LokasiController::class, 'create']);
route::post('/savelokasi', [LokasiController::class, 'store']);
route::get('/editLokasi/{id}', [LokasiController::class, 'show']);
route::put('/updateLokasi/{id}', [LokasiController::class, 'update']);
route::get('/deletelokasi/{id}', [LokasiController::class, 'destroy']);
route::get('/reportlokasi', [LokasiController::class, 'generatePDF']);

route::get('/fasilitas', [FasilitasController::class, 'index']);
route::get('/insertfasilitas', [FasilitasController::class, 'create']);
route::post('/savefasilitas', [FasilitasController::class, 'store']);
route::get('/editfasilitas/{id}', [FasilitasController::class, 'show']);
route::put('/updatefasilitas/{id}', [FasilitasController::class, 'update']);
route::get('/deletefasilitas/{id}', [FasilitasController::class, 'destroy']);
route::get('/reportfasilitas', [FasilitasController::class, 'generatePDF']);

route::get('/keamanan', [KeamananController::class, 'index']);
route::get('/insertkeamanan', [KeamananController::class, 'create']);
route::post('/savekeamanan', [KeamananController::class, 'store']);
route::get('/editkeamanan/{id}', [KeamananController::class, 'show']);
route::put('/updatekeamanan/{id}', [KeamananController::class, 'update']);
route::get('/deletekeamanan/{id}', [KeamananController::class, 'destroy']);
route::get('/reportkeamanan', [KeamananController::class, 'generatePDF']);

route::get('/objekatraksi', [ObjekAtraksiController::class, 'index']);
route::get('/insertobjekatraksi', [ObjekAtraksiController::class, 'create']);
route::post('/saveobjekatraksi', [ObjekAtraksiController::class, 'store']);
route::get('/editobjekatraksi/{id}', [ObjekAtraksiController::class, 'show']);
route::put('/updateobjekatraksi/{id}', [ObjekAtraksiController::class, 'update']);
route::get('/deleteobjekatraksi/{id}', [ObjekAtraksiController::class, 'destroy']);
route::get('/reportobjek', [ObjekAtraksiController::class, 'generatePDF']);

route::get('/data_penilaian', [DataPenilaianController::class, 'index']);
route::get('/insertdata_penilaian', [DataPenilaianController::class, 'create']);
route::post('/savedata_penilaian', [DataPenilaianController::class, 'store']);
route::get('/editdata_penilaian/{id}', [DataPenilaianController::class, 'show']);
route::put('/updatedata_penilaian/{id}', [DataPenilaianController::class, 'update']);
route::get('/deletedata_penilaian/{id}', [DataPenilaianController::class, 'destroy']);

Route::get('/metode', [MetodeController::class, 'index']);
Route::get('/hitung', [MetodeController::class, 'proses_hitung']);
Route::get('/reset', [MetodeController::class, 'reset']);
Route::get('/Perangkingan', [MetodeController::class, 'index']);

