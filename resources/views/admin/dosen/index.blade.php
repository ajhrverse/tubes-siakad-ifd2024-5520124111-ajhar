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
                Data Dosen
            </h2>

            <a href="{{ route('dosen.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Tambah Dosen
            </a>

        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>
                    <th class="p-3">NIDN</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach($data as $row)

                <tr class="border-b">

                    <td class="p-3">
                        {{ $row->nidn }}
                    </td>

                    <td class="p-3">
                        {{ $row->nama }}
                    </td>

                    <td class="p-3 flex gap-2">

                        <a href="{{ route('dosen.edit',$row) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('dosen.destroy',$row) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin hapus?')"
                                class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded">

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