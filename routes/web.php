<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])
->group(function () {

    Route::get(
        '/dashboard',
        DashboardController::class
    )->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
     

    //role admin
    Route::middleware(['role:admin'])
    ->prefix('admin')
    ->group(function(){

        Route::resource(
            'dosen',
            DosenController::class
        );

        Route::resource(
            'mahasiswa',
            MahasiswaController::class
        );

       Route::resource(
        'matakuliah',
        MataKuliahController::class
        );

        Route::resource(
            'jadwal',
            JadwalController::class
        );
    });


    //role mahasiswa
    Route::middleware(['role:mahasiswa'])
    ->prefix('mahasiswa')
    ->group(function(){

       Route::get(
             'jadwal',
             [JadwalController::class,'index']
            )->name('mahasiswa.jadwal');

                    Route::resource(
                'krs',
                KrsController::class
            )
            ->parameters([
                'krs' => 'krs'
            ])
            ->except([
                'create',
                'edit',
                'update'
            ]);
     });
});

require __DIR__.'/auth.php';
