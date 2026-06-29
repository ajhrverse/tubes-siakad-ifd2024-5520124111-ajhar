<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

<div class="bg-white p-6 rounded shadow">

<h2 class="text-xl font-bold mb-4">
Tambah Mata Kuliah
</h2>

<form
action="{{ route('matakuliah.store') }}"
method="POST">

@csrf

<div class="mb-4">
<label>Kode Mata Kuliah</label>
<input
type="text"
name="kode_mk"
class="w-full border rounded p-2">
                @error('kode_mk')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
</div>

<div class="mb-4">
<label>Nama Mata Kuliah</label>
<input
type="text"
name="nama_mk"
class="w-full border rounded p-2">
                @error('nama_mk')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
</div>

<div class="mb-4">
<label>SKS</label>
<input
type="number"
name="sks"
class="w-full border rounded p-2">
                @error('sks')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
</div>

<div class="mb-4">
<label>Semester</label>
<input
type="number"
name="semester"
class="w-full border rounded p-2">
                @error('semester')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror
</div>

<button
class="bg-blue-500 text-white px-4 py-2 rounded">

Simpan

</button>

</form>

</div>

</div>

</x-app-layout>