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
            'admin.mahasiswa.krs.index',
            compact(
                'matakuliah',
                'krs'
            )
        );
    }

   public function store(Request $request)
{
    $request->validate([
        'kode_mk' => 'required|exists:matakuliah,kode_mk'
    ]);

    $mahasiswa = auth()->user()->mahasiswa;

    Krs::firstOrCreate([
        'npm_mahasiswa' => $mahasiswa->npm,
        'kode_mk' => $request->kode_mk,
        'tahun_akademik' => '2025/2026'
    ]);

    return back()->with(
        'success',
        'Mata kuliah berhasil diambil.'
    );
}

    public function destroy(Krs $krs)
{
//     dd(
//     $krs->npm_mahasiswa,
//     auth()->user()->mahasiswa->npm
// );
    if ($krs->npm_mahasiswa != auth()->user()->mahasiswa->npm) {
        abort(403);
    }

    $krs->delete();

    return back()->with(
        'success',
        'Mata kuliah berhasil dihapus.'
    );
}
}
