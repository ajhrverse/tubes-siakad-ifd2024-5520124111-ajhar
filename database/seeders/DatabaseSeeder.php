<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Role;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

    public function run(): void
    {

    $adminRole = Role::firstOrCreate([
    'name' => 'admin',
    'guard_name' => 'web'
    ]);

    $mahasiswaRole = Role::firstOrCreate([
    'name' => 'mahasiswa',
    'guard_name' => 'web'
    ]);

    // $adminRole = Role::create([
    //     'name' => 'admin'
    // ]);

    // $mahasiswaRole = Role::create([
    //     'name' => 'mahasiswa'
    // ]);

    $admin = User::create([
        'name' => 'Administrator',
        'email' => 'admin@siakad.com',
        'password' => Hash::make('password')
    ]);

    $admin->assignRole('admin');

    Dosen::insert([
        [
            'nidn'=>'D001',
            'nama'=>'Dr. Budi'
        ],
        [
            'nidn'=>'D002',
            'nama'=>'Dr. Andi'
        ]
    ]);

    $mhs1User = User::create([
        'name'=>'Ahmad',
        'email'=>'ahmad@mail.com',
        'password'=>Hash::make('password')
    ]);

    $mhs1User->assignRole('mahasiswa');

    $mhs2User = User::create([
        'name'=>'Budi',
        'email'=>'budi@mail.com',
        'password'=>Hash::make('password')
    ]);

    $mhs2User->assignRole('mahasiswa');

    $mhs3User = User::create([
        'name'=>'Siti',
        'email'=>'siti@mail.com',
        'password'=>Hash::make('password')
    ]);

    $mhs3User->assignRole('mahasiswa');


    Mahasiswa::insert([
        [
            'npm'=>'22001',
            'user_id'=>$mhs1User->id,
            'nidn_dosen'=>'D001',
            'nama'=>'Ahmad',
            'angkatan'=>2022
        ],
        [
            'npm'=>'22002',
            'user_id'=>$mhs2User->id,
            'nidn_dosen'=>'D002',
            'nama'=>'Budi',
            'angkatan'=>2022
        ],
        [
            'npm'=>'22003',
            'nidn_dosen'=>'D001',
             'user_id'=>$mhs3User->id,
            'nama'=>'Siti',
            'angkatan'=>2023
        ]
    ]);

    MataKuliah::insert([
        [
            'kode_mk'=>'IF001',
            'nama_mk'=>'Algoritma',
            'sks'=>3,
            'semester'=>1
        ],
        [
            'kode_mk'=>'IF002',
            'nama_mk'=>'Basis Data',
            'sks'=>3,
            'semester'=>3
        ],
        [
            'kode_mk'=>'IF003',
            'nama_mk'=>'Pemrograman Web',
            'sks'=>3,
            'semester'=>4
        ],
        [
            'kode_mk'=>'IF004',
            'nama_mk'=>'Jaringan Komputer',
            'sks'=>3,
            'semester'=>4
        ],
        [
            'kode_mk'=>'IF005',
            'nama_mk'=>'AI',
            'sks'=>3,
            'semester'=>6
        ]
    ]);

    Jadwal::insert([
        [
            'kode_mk'=>'IF001',
            'nidn_dosen'=>'D001',
            'kelas'=>'A',
            'hari'=>'Senin',
            'jam'=>'08:00:00'
        ],
        [
            'kode_mk'=>'IF002',
            'nidn_dosen'=>'D002',
            'kelas'=>'B',
            'hari'=>'Selasa',
            'jam'=>'10:00:00'
        ],
        [
            'kode_mk'=>'IF003',
            'nidn_dosen'=>'D001',
            'kelas'=>'A',
            'hari'=>'Rabu',
            'jam'=>'13:00:00'
        ]
    ]);
}
}
