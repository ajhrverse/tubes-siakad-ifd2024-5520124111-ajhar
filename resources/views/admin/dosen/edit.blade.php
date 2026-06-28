<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

    <div class="bg-white rounded shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            Edit Dosen
        </h2>

        <form
            action="{{ route('dosen.update',$dosen) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label>NIDN</label>

                <input
                    value="{{ $dosen->nidn }}"
                    disabled
                    class="w-full border rounded p-2">

            </div>

            <div class="mb-4">

                <label>Nama</label>

                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama', $dosen->nama) }}"
                    class="w-full border rounded p-2">

            </div>

            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition duration-200">

                Update

            </button>

        </form>

    </div>

</div>

</x-app-layout>