<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Mahasiswa::with('dosen')
            ->latest()
            ->paginate(10);

        return view(
            'admin.mahasiswa.index',
            compact('data')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = Dosen::all();

        return view(
            'admin.mahasiswa.create',
            compact('dosen')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|unique:mahasiswa,npm',
            'nidn_dosen' => 'required',
            'nama' => 'required',
            'angkatan' => 'required'
        ]);

        Mahasiswa::create([
            'npm' => $request->npm,
            'nidn_dosen' => $request->nidn_dosen,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with(
                'success',
                'Mahasiswa berhasil ditambahkan'
            );
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
    public function edit(Mahasiswa $mahasiswa)
    {
         $dosen = Dosen::all();

        return view(
            'admin.mahasiswa.edit',
            compact(
                'mahasiswa',
                'dosen'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(
        Request $request,
        Mahasiswa $mahasiswa
    )
    {
        $request->validate([
            'nidn_dosen' => 'required',
            'nama' => 'required',
            'angkatan' => 'required'
        ]);

        $mahasiswa->update([
            'nidn_dosen' => $request->nidn_dosen,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with(
                'success',
                'Data berhasil diupdate'
            );
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Mahasiswa $mahasiswa
    )
    {
        $mahasiswa->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with(
                'success',
                'Data berhasil dihapus'
            );
    }
}
