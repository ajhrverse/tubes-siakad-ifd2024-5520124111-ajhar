<x-app-layout>

    <x-slot name="header">
        Dashboard Mahasiswa
    </x-slot>

    <div class="max-w-7xl mx-auto py-6">

        <!-- Header -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <p class="text-gray-600 mt-2">
                Selamat datang,
                <span class="font-semibold">
                    {{ $mahasiswa->nama }}
                </span>
            </p>

            <div class="mt-4 text-gray-700">

                <p>
                    <strong>NPM :</strong>
                    {{ $mahasiswa->npm }}
                </p>

                <p>
                    <strong>Email :</strong>
                    {{ auth()->user()->email }}
                </p>

            </div>

        </div>

        <!-- Card Statistik -->

       <div class="grid grid-cols-2 gap-5 mb-8">

    <div class="bg-blue-600 rounded-lg text-white p-6 shadow">

        <p class="text-lg">
            Mata Kuliah Diambil
        </p>

        <h2 class="text-4xl font-bold mt-2">
            {{ $jumlahKrs }}
        </h2>

    </div>

    <div class="bg-green-600 rounded-lg text-white p-6 shadow">

        <p class="text-lg">
            Jadwal
        </p>

        <h2 class="text-4xl font-bold mt-2">
            {{ $jumlahJadwal }}
        </h2>

    </div>

</div>

        <!-- Jadwal Hari Ini -->

            <div class="p-4">
                <h2 class="text-xl font-bold">

                    Jadwal Hari Ini

                </h2>

                @forelse($jadwalHariIni as $jadwal)

                    <div class="border rounded-lg p-4 mb-4">

                        <h3 class="font-bold text-lg">

                            {{ $jadwal->matakuliah->nama_mk }}

                        </h3>

                        <p>

                            <strong>Kode :</strong>

                            {{ $jadwal->kode_mk }}

                        </p>

                        <p>

                            <strong>Dosen :</strong>

                            {{ $jadwal->dosen->nama }}

                        </p>

                        <p>

                            <strong>Kelas :</strong>

                            {{ $jadwal->kelas }}

                        </p>

                        <p>

                            <strong>Jam :</strong>

                            {{ \Carbon\Carbon::parse($jadwal->jam)->format('H:i') }}

                        </p>

                    </div>

                @empty

                    <div class="text-center text-gray-500 py-8">

                        Tidak ada jadwal hari ini.

                    </div>

                @endforelse

            </div>

        </div>

        <!-- Menu Cepat -->

        <div class="mt-6 flex gap-4">

            <a href="{{ route('krs.index') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">

                Ambil KRS

            </a>

            <a href="{{ route('mahasiswa.jadwal') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-lg">

                Lihat Jadwal

            </a>

        </div>

    </div>

</x-app-layout>