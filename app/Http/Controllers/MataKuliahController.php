<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MataKuliah::latest()
            ->paginate(10);

        return view(
            'admin.matakuliah.index',
            compact('data')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliah,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
            'semester' => 'required|numeric'
        ]);

        MataKuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect()
            ->route('matakuliah.index')
            ->with(
                'success',
                'Mata Kuliah berhasil ditambahkan'
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
    public function edit(MataKuliah $matakuliah)
    {
        return view(
            'admin.matakuliah.edit',
            compact('matakuliah')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        MataKuliah $matakuliah
    )
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
            'semester' => 'required|numeric'
        ]);

        $matakuliah->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect()
            ->route('matakuliah.index')
            ->with(
                'success',
                'Data berhasil diupdate'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        MataKuliah $matakuliah
    )
    {
        $matakuliah->delete();

        return redirect()
            ->route('matakuliah.index')
            ->with(
                'success',
                'Data berhasil dihapus'
            );
    }
}
