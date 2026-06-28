<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::latest()->paginate(10);

        return view(
            'admin.dosen.index',
            compact('data')
        );
    }
    public function create(){
        return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
        // Dosen::create(
        //     $request->validate([
        //         'nidn'=>'required',
        //         'nama'=>'required'
        //     ])
        // );

        // return back();
                $request->validate([
            'nidn' => 'required|unique:dosen,nidn',
            'nama' => 'required'
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
        ]);

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Dosen berhasil ditambahkan');

    }

    public function edit(Dosen $dosen){
    return view('admin.dosen.edit',compact('dosen'));
    }

    public function update(Request $request,Dosen $dosen)
    {
        // $dosen->update(
        //     $request->validate([
        //         'nama'=>'required'
        //     ])
        // );

        // return back();

        $request->validate([
            'nama' => 'required'
        ]);

        $dosen->update([
            'nama' => $request->nama
        ]);

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Dosen $dosen)
    {

        $dosen->delete();

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data berhasil dihapus');
    }
}