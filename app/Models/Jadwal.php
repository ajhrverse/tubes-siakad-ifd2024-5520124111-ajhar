<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'kode_mk',
        'nidn_dosen',
        'kelas',
        'hari',
        'jam'
    ];

    public function dosen()
    {
        return $this->belongsTo(
            Dosen::class,
            'nidn_dosen',
            'nidn'
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
