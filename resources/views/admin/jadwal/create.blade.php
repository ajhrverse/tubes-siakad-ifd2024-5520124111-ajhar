<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

<div class="bg-white rounded shadow p-6">

<h2 class="text-xl font-bold mb-4">
Tambah Jadwal
</h2>

<form action="{{ route('jadwal.store') }}"
      method="POST">

@csrf

<div class="mb-4">

<label>Mata Kuliah</label>

<select
    name="kode_mk"
    class="w-full border rounded p-2">

@foreach($matakuliahs as $mk)

<option value="{{ $mk->kode_mk }}">
    {{ $mk->nama_mk }}
</option>

@endforeach

</select>

</div>

<div class="mb-4">

<label>Dosen</label>

<select
    name="nidn_dosen"
    class="w-full border rounded p-2">

@foreach($dosens as $dosen)

<option value="{{ $dosen->nidn }}">
    {{ $dosen->nama }}
</option>

@endforeach

</select>

</div>

<div class="mb-4">

<label>Kelas</label>

<input
type="text"
name="kelas"
class="w-full border rounded p-2">

</div>

<div class="mb-4">

<label>Hari</label>

<select
name="hari"
class="w-full border rounded p-2">

<option>Senin</option>
<option>Selasa</option>
<option>Rabu</option>
<option>Kamis</option>
<option>Jumat</option>
<option>Sabtu</option>

</select>

</div>

<div class="mb-4">

<label>Jam</label>

<input
type="time"
name="jam"
class="w-full border rounded p-2">

</div>

<button
class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">

Simpan

</button>

</form>

</div>

</div>

</x-app-layout>