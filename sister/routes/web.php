<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KuliahController;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('mhs')->group(function () {
    Route::get('/', [KuliahController::class, 'indexMahasiswa'])->name('mahasiswa.index');
    Route::get('/create', [KuliahController::class, 'createMahasiswa'])->name('mahasiswa.create');
    Route::post('/', [KuliahController::class, 'storeMahasiswa'])->name('mahasiswa.store');
    Route::get('/{nim}/edit', [KuliahController::class, 'editMahasiswa'])->name('mahasiswa.edit');
    Route::put('/{nim}', [KuliahController::class, 'updateMahasiswa'])->name('mahasiswa.update');
    Route::delete('/{nim}', [KuliahController::class, 'destroyMahasiswa'])->name('mahasiswa.delete');
});

Route::prefix('dosen')->group(function () {
    Route::get('/', [KuliahController::class, 'indexDosen'])->name('dosen.index');
    Route::get('/create', [KuliahController::class, 'createDosen'])->name('dosen.create');
    Route::post('/', [KuliahController::class, 'storeDosen'])->name('dosen.store');
    Route::get('/{nip}/edit', [KuliahController::class, 'editDosen'])->name('dosen.edit');
    Route::put('/{nip}', [KuliahController::class, 'updateDosen'])->name('dosen.update');
    Route::delete('/{nip}', [KuliahController::class, 'destroyDosen'])->name('dosen.delete');
});

Route::prefix('mata_kuliah')->group(function () {
    Route::get('/', [KuliahController::class, 'indexMataKuliah'])->name('mata_kuliah.index');
    Route::get('/create', [KuliahController::class, 'createMataKuliah'])->name('mata_kuliah.create');
    Route::post('/', [KuliahController::class, 'storeMataKuliah'])->name('mata_kuliah.store');
    Route::get('/{kode_mk}/edit', [KuliahController::class, 'editMataKuliah'])->name('mata_kuliah.edit');
    Route::put('/{kode_mk}', [KuliahController::class, 'updateMataKuliah'])->name('mata_kuliah.update');
    Route::delete('/{kode_mk}', [KuliahController::class, 'destroyMataKuliah'])->name('mata_kuliah.delete');
});

Route::get('/perkuliahan', [KuliahController::class, 'indexPerkuliahan'])->name('perkuliahan.index');

