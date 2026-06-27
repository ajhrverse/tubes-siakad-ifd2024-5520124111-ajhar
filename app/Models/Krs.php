<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model{

 protected $table = 'krs';

    protected $fillable = [
        'npm_mahasiswa',
        'kode_mk',
        'tahun_akademik'
    ];
    
    public function mahasiswa()
    {
    return $this->belongsTo(
        Mahasiswa::class,
        'npm_mahasiswa',
        'npm'
        );
    }

    public function matakuliah()
    {
    return $this->belongsTo(
        MataKuliah::class,
        'kode_mk',
        'kode_mk'
        );
    }
}
