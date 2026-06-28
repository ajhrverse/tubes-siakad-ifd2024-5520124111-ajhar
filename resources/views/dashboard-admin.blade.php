<x-app-layout>

    <x-slot name="header">
        Dashboard Admin
    </x-slot>

    <div class="p-6">

        <div class="grid grid-cols-4 gap-4">

            <div class="bg-blue-500 text-white p-4 rounded">
                Dosen
                <h1>{{ $dosen }}</h1>
            </div>

            <div class="bg-green-500 text-white p-4 rounded">
                Mahasiswa
                <h1>{{ $mahasiswa }}</h1>
            </div>

            <div class="bg-yellow-500 text-white p-4 rounded">
                Mata Kuliah
                <h1>{{ $matakuliah }}</h1>
            </div>

            <div class="bg-red-500 text-white p-4 rounded">
                Jadwal
                <h1>{{ $jadwal }}</h1>
            </div>

        </div>

    </div>

</x-app-layout>