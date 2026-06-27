<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model{
     protected $table = 'matakuliah';

    protected $primaryKey = 'kode_mk';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'semester'
    ];

    public function jadwal()    
    {
    return $this->hasMany(
        Jadwal::class,
        'kode_mk',
        'kode_mk'
        );
    }

    public function krs()
    {
    return $this->hasMany(
        Krs::class,
        'kode_mk',
        'kode_mk'
        );
    }

     public function getRouteKeyName()
    {
        return 'kode_mk';
    }
}
