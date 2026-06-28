<x-app-layout>

<div class="max-w-7xl mx-auto py-6">

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded shadow">

        <div class="p-4 flex justify-between">

            <h2 class="text-xl font-bold">
                Data Jadwal
            </h2>

            <!-- <a href="{{ route('jadwal.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">

                Tambah Jadwal

            </a> -->

        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-3">Mata Kuliah</th>
                    <th class="p-3">Dosen</th>
                    <th class="p-3">Kelas</th>
                    <th class="p-3">Hari</th>
                    <th class="p-3">Jam</th>
                    <!-- <th class="p-3">Aksi</th> -->

                </tr>

            </thead>

            <tbody>

                @foreach($jadwals as $jadwal)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $jadwal->matakuliah->nama_mk }}
                    </td>

                    <td class="p-3">
                        {{ $jadwal->dosen->nama }}
                    </td>

                    <td class="p-3">
                        {{ $jadwal->kelas }}
                    </td>

                    <td class="p-3">
                        {{ $jadwal->hari }}
                    </td>

                    <td class="p-3">
                        {{ $jadwal->jam }}
                    </td>

                    <!-- <td class="p-3 flex gap-2">

                        <a href="{{ route('jadwal.edit',$jadwal) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">

                            Edit

                        </a> -->

                        <!-- <form
                            action="{{ route('jadwal.destroy',$jadwal) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin hapus?')"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">

                                Hapus

                            </button>

                        </form> -->

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>