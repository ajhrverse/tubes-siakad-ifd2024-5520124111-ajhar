<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\MataKuliah;
use Illuminate\Http\Request;


class KrsController extends Controller
{
    public function index()
    {
        $mahasiswa = auth()
            ->user()
            ->mahasiswa;

       $matakuliah = MataKuliah::all();

        $krs = Krs::with('matakuliah')
            ->where(
                'npm_mahasiswa',
                $mahasiswa->npm
            )
            ->get();

        return view(
            'mahasiswa.krs.index',
            compact(
                'matakuliah',
                'krs'
            )
        );
    }

    public function store(Request $request)
    {
        $mahasiswa = auth()
            ->user()
            ->mahasiswa;

        Krs::firstOrCreate([
            'npm_mahasiswa' => $mahasiswa->npm,
            'kode_mk' => $request->kode_mk,
            'tahun_akademik' => '2025/2026'
        ]);

        return back();
    }

    public function destroy(Krs $krs)
    {
        $krs->delete();

        return back();
    }
}
