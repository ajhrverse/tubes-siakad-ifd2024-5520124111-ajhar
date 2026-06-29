<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\MataKuliah;
use App\Models\Mahasiswa;
use App\Models\Krs;

class DashboardController extends Controller
{
public function __invoke()
{
    if (auth()->user()->hasRole('admin')) {

        return view(
            'dashboard-admin',
            [
                'dosen' => Dosen::count(),
                'mahasiswa' => Mahasiswa::count(),
                'matakuliah' => MataKuliah::count(),
                'jadwal' => Jadwal::count(),
            ]
        );
    }

    // Dashboard Mahasiswa
    $mahasiswa = auth()->user()->mahasiswa;

    $jumlahKrs = Krs::where(
        'npm_mahasiswa',
        $mahasiswa->npm
    )->count();

    $jumlahJadwal = Jadwal::count();

    $hari = now()->locale('id')->translatedFormat('l');

    $jadwalHariIni = Jadwal::with([
            'matakuliah',
            'dosen'
        ])
        ->where('hari', $hari)
        ->get();

    return view(
        'dashboard-mahasiswa',
        compact(
            'mahasiswa',
            'jumlahKrs',
            'jumlahJadwal',
            'jadwalHariIni'
        )
    );
}
}
