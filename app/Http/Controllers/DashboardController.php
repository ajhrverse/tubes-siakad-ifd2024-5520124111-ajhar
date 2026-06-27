<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Matakuliah;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
 public function __invoke()
    {
        if(auth()->user()->hasRole('admin'))
        {
            return view(
                'dashboard-admin',
                [
                    'dosen' => Dosen::count(),
                    'mahasiswa' => Mahasiswa::count(),
                    'matakuliah' => Matakuliah::count(),
                    'jadwal' => Jadwal::count(),
                ]
            );
        }

        return view('dashboard-mahasiswa');
    }
}
