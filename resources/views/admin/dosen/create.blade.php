<x-app-layout>
    <div class="max-w-3xl mx-auto py-6">
        <div class="bg-white rounded shadow p-6">

```
        <h2 class="text-xl font-bold mb-4">
            Tambah Dosen
        </h2>

        <form action="{{ route('dosen.store') }}" method="POST">
            @csrf

            <!-- NIDN -->
            <div class="mb-4">
                <label
                    for="nidn"
                    class="block text-sm font-medium text-gray-700 mb-1">
                    NIDN
                </label>

                <input
                    id="nidn"
                    type="text"
                    name="nidn"
                    value="{{ old('nidn') }}"
                    class="w-full border rounded p-2">

                @error('nidn')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Nama -->
            <div class="mb-4">
                <label
                    for="nama"
                    class="block text-sm font-medium text-gray-700 mb-1">
                    Nama
                </label>

                <input
                    id="nama"
                    type="text"
                    name="nama"
                    value="{{ old('nama') }}"
                    class="w-full border rounded p-2">

                @error('nama')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button
                type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded  transition duration-200 hover:bg-blue-600 ">
                Simpan
            </button>

        </form>

    </div>
</div>
```

</x-app-layout>
