<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model{
     protected $table = 'mahasiswa';

    protected $primaryKey = 'npm';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'npm',
        'user_id',
        'nidn_dosen',
        'nama',
        'angkatan'
    ];
    public function dosen()
    {
    return $this->belongsTo(
        Dosen::class,
        'nidn_dosen',
        'nidn'
        );
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function krs()
    {
    return $this->hasMany(
        Krs::class,
        'npm_mahasiswa',
        'npm'
        );
    }

    public function getRouteKeyName()
    {
        return 'npm';
    }
}
