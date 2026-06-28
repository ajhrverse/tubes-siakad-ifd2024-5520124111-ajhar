<x-app-layout>

<div class="max-w-7xl mx-auto py-6">

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Daftar Mata Kuliah -->
    <div class="bg-white rounded shadow mb-8">

        <div class="p-4">
            <h2 class="text-xl font-bold">
                Daftar Mata Kuliah
            </h2>
        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>
                    <th class="p-3">Kode</th>
                    <th class="p-3">Mata Kuliah</th>
                    <th class="p-3">SKS</th>
                    <th class="p-3">Semester</th>
                    <th class="p-3">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach($matakuliah as $mk)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $mk->kode_mk }}
                    </td>

                    <td class="p-3">
                        {{ $mk->nama_mk }}
                    </td>

                    <td class="p-3">
                        {{ $mk->sks }}
                    </td>

                    <td class="p-3">
                        {{ $mk->semester }}
                    </td>

                    <td class="p-3">

                        @if($krs->contains('kode_mk', $mk->kode_mk))

                            <span class="bg-green-500 text-white px-3 py-1 rounded">
                                Sudah Diambil
                            </span>

                        @else

                            <form
                                action="{{ route('krs.store') }}"
                                method="POST">

                                @csrf

                                <input
                                    type="hidden"
                                    name="kode_mk"
                                    value="{{ $mk->kode_mk }}">

                                <button
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded">

                                    Ambil

                                </button>

                            </form>

                        @endif

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <!-- KRS Saya -->

    <div class="bg-white rounded shadow">

        <div class="p-4">

            <h2 class="text-xl font-bold">
                KRS Saya
            </h2>

        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-3">Kode</th>
                    <th class="p-3">Mata Kuliah</th>
                    <th class="p-3">SKS</th>
                    <th class="p-3">Semester</th>
                    <th class="p-3">Tahun Akademik</th>
                    <th class="p-3">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($krs as $item)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $item->matakuliah->kode_mk }}
                    </td>

                    <td class="p-3">
                        {{ $item->matakuliah->nama_mk }}
                    </td>

                    <td class="p-3">
                        {{ $item->matakuliah->sks }}
                    </td>

                    <td class="p-3">
                        {{ $item->matakuliah->semester }}
                    </td>

                    <td class="p-3">
                        {{ $item->tahun_akademik }}
                    </td>

                    <td class="p-3">

                        <form
                            action="{{ route('krs.destroy', $item) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin ingin menghapus mata kuliah ini?')"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td
                        colspan="6"
                        class="text-center p-5 text-gray-500">

                        Belum ada mata kuliah yang diambil.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>