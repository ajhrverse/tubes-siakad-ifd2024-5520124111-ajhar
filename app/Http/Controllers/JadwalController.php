<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $jadwals = Jadwal::with(['dosen', 'matakuliah'])->get();

    if (auth()->user()->hasRole('mahasiswa')) {
        return view(
            'admin.mahasiswa.jadwal.index',
            compact('jadwals')
        );
    }

    return view('admin.jadwal.index', compact('jadwals'));
}

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $dosens = Dosen::all();
    $matakuliahs = MataKuliah::all();

    return view(
        'admin.jadwal.create',
        compact('dosens', 'matakuliahs')
    );
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kode_mk' => 'required',
        'nidn_dosen' => 'required',
        'kelas' => 'required',
        'hari' => 'required',
        'jam' => 'required',
    ]);

    Jadwal::create([
        'kode_mk' => $request->kode_mk,
        'nidn_dosen' => $request->nidn_dosen,
        'kelas' => $request->kelas,
        'hari' => $request->hari,
        'jam' => $request->jam,
    ]);

    return redirect()
        ->route('jadwal.index')
        ->with('success', 'Jadwal berhasil ditambahkan.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Jadwal $jadwal)
{
    // $jadwal = Jadwal::findOrFail();

    $dosens = Dosen::all();
    $matakuliahs = MataKuliah::all();

    return view(
        'admin.jadwal.edit',
        compact(
            'jadwal',
            'dosens',
            'matakuliahs'
        )
    );
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
{
    $request->validate([
        'kode_mk' => 'required',
        'nidn_dosen' => 'required',
        'kelas' => 'required',
        'hari' => 'required',
        'jam' => 'required',
    ]);

    // $jadwal = Jadwal::findOrFail($id);

    $jadwal->update([
        'kode_mk' => $request->kode_mk,
        'nidn_dosen' => $request->nidn_dosen,
        'kelas' => $request->kelas,
        'hari' => $request->hari,
        'jam' => $request->jam,
    ]);

    return redirect()
        ->route('jadwal.index')
        ->with('success', 'Jadwal berhasil diubah.');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Jadwal $jadwal)
{
    // $jadwal = Jadwal::findOrFail($id);

    $jadwal->delete();

    return redirect()
        ->route('jadwal.index')
        ->with('success', 'Jadwal berhasil dihapus.');
}
}
