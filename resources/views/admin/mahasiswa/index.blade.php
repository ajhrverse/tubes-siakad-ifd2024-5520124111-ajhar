<x-app-layout>

<div class="max-w-7xl mx-auto py-6">

    @if(session('success'))
        <div class="bg-green-200 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded shadow">

        <div class="p-4 flex justify-between">

            <h2 class="font-bold text-xl">
                Data Mahasiswa
            </h2>

            <a href="{{ route('mahasiswa.create') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded">

                Tambah Mahasiswa

            </a>

        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>
                    <th class="p-3">NPM</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Dosen PA</th>
                    <th class="p-3">Angkatan</th>
                    <th class="p-3">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach($data as $row)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $row->npm }}
                    </td>

                    <td class="p-3">
                        {{ $row->nama }}
                    </td>

                    <td class="p-3">
                        {{ $row->dosen->nama ?? '-' }}
                    </td>

                    <td class="p-3">
                        {{ $row->angkatan }}
                    </td>

                    <td class="p-3 flex gap-2">

                        <a href="{{ route('mahasiswa.edit',$row) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded">

                            Edit

                        </a>

                        <form
                            action="{{ route('mahasiswa.destroy',$row) }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin hapus?')"
                                class="bg-red-500 text-white px-3 py-1 rounded">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        <div class="p-4">
            {{ $data->links() }}
        </div>

    </div>

</div>

</x-app-layout>