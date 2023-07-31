<?php

use App\Http\Controllers\BahanBakarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LaporanPPHController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/',function() {
    return Redirect('/dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::prefix('/pegawai')->group(function() {
        Route::resource('/driver',DriverController::class);
        Route::get('/drivers/export',[DriverController::class,'export']);
        Route::resource('/pengawas',PengawasController::class);
        Route::get('/pengawass/export',[PengawasController::class,'export']);
    });
    Route::resource('/kendaraan',KendaraanController::class);
    Route::get('/kendaraans/export',[KendaraanController::class,'export']);
    Route::resource('/bbm',BahanBakarController::class);
    Route::get('/bbms/export',[BahanBakarController::class,'export']);
    Route::resource('/laporan',LaporanPPHController::class);
    Route::get('/laporanpph/export',[LaporanPPHController::class,'export']);
});



require __DIR__.'/auth.php';
