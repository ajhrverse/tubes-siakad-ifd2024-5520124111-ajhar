<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::latest()->get();

        return view(
            'admin.dosen.index',
            compact('data')
        );
    }

    public function store(Request $request)
    {
        Dosen::create(
            $request->validate([
                'nidn'=>'required',
                'nama'=>'required'
            ])
        );

        return back();
    }

    public function update(Request $request,Dosen $dosen)
    {
        $dosen->update(
            $request->validate([
                'nama'=>'required'
            ])
        );

        return back();
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return back();
    }
}