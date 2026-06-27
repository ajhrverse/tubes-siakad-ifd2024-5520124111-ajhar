<x-app-layout>

    <div class="max-w-7xl mx-auto py-6">

        <div class="bg-white shadow rounded">

            <div class="p-4 flex justify-between">

                <h2 class="font-bold text-xl">
                    Data Dosen
                </h2>

                <a href="{{ route('dosen.create') }}"
                   class="bg-blue-500 text-white px-4 py-2 rounded">
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

                            <a href="{{ route('dosen.edit',$row->nidn) }}"
                               class="bg-yellow-500 text-white px-3 py-1 rounded">
                                Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('dosen.destroy',$row->nidn) }}">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</x-app-layout>