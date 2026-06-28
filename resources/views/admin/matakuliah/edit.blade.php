<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

<div class="bg-white p-6 rounded shadow">

<h2 class="text-xl font-bold mb-4">
Edit Mata Kuliah
</h2>

<form
action="{{ route('matakuliah.update',$matakuliah) }}"
method="POST">

@csrf
@method('PUT')

<div class="mb-4">
<label>Kode MK</label>
<input
value="{{ $matakuliah->kode_mk }}"
disabled
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Nama MK</label>
<input
type="text"
name="nama_mk"
value="{{ $matakuliah->nama_mk }}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>SKS</label>
<input
type="number"
name="sks"
value="{{ $matakuliah->sks }}"
class="w-full border rounded p-2">
</div>

<div class="mb-4">
<label>Semester</label>
<input
type="number"
name="semester"
value="{{ $matakuliah->semester }}"
class="w-full border rounded p-2">
</div>

<button
class="bg-blue-500 text-white px-4 py-2 rounded">

Update

</button>

</form>

</div>

</div>

</x-app-layout>