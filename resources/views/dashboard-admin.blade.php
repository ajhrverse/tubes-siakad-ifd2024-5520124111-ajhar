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
         <!-- Informasi -->

            <div class="mt-8">

                <div class="bg-white rounded-xl shadow p-6">

                    <h3 class="text-xl font-semibold text-gray-800 mb-3">

                        Selamat Datang 👋

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Anda login sebagai
                        <span class="font-semibold text-blue-600">
                            Administrator
                        </span>.

                        Gunakan menu navigasi untuk mengelola data
                        <strong>Dosen</strong>,
                        <strong>Mahasiswa</strong>,
                        <strong>Mata Kuliah</strong>,
                        <strong>Jadwal</strong>,
                        serta memonitor aktivitas akademik.

                    </p>

                </div>

            </div>


    </div>

</x-app-layout>