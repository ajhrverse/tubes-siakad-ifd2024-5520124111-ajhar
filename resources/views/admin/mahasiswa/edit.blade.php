<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

<div class="bg-white p-6 rounded shadow">

<h2 class="font-bold text-xl mb-4">
Edit Mahasiswa
</h2>

<form
action="{{ route('mahasiswa.update',$mahasiswa) }}"
method="POST">

@csrf
@method('PUT')

<div class="mb-4">

<label>NPM</label>

<input
value="{{ $mahasiswa->npm }}"
disabled
class="w-full border rounded p-2">

</div>

<div class="mb-4">

<label>Nama</label>

<input
type="text"
name="nama"
value="{{ $mahasiswa->nama }}"
class="w-full border rounded p-2">
                @error('nama')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

</div>

<div class="mb-4">

<label>Dosen PA</label>

<select
name="nidn_dosen"
class="w-full border rounded p-2">
                @error('nidn_dosen')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

@foreach($dosen as $item)

<option
value="{{ $item->nidn }}"
{{ $item->nidn == $mahasiswa->nidn_dosen ? 'selected' : '' }}>

{{ $item->nama }}

</option>

@endforeach

</select>

</div>

<div class="mb-4">

<label>Angkatan</label>

<input
type="number"
name="angkatan"
value="{{ $mahasiswa->angkatan }}"
class="w-full border rounded p-2">
                @error('angkatan')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

</div>

<button
class="bg-blue-500 text-white px-4 py-2 rounded">

Update

</button>

</form>

</div>

</div>

</x-app-layout>