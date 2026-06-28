<x-app-layout>

<div class="max-w-7xl mx-auto py-6">

@if(session('success'))
<div class="bg-green-200 p-3 rounded mb-4">
{{ session('success') }}
</div>
@endif

<div class="bg-white rounded shadow">

<div class="p-4 flex justify-between">

<h2 class="text-xl font-bold">
Data Mata Kuliah
</h2>

<a href="{{ route('matakuliah.create') }}"
class="bg-blue-500 text-white px-4 py-2 rounded">

Tambah Mata Kuliah

</a>

</div>

<table class="w-full">

<thead class="bg-gray-100">

<tr>
<th class="p-3">Kode</th>
<th class="p-3">Nama</th>
<th class="p-3">SKS</th>
<th class="p-3">Semester</th>
<th class="p-3">Aksi</th>
</tr>

</thead>

<tbody>

@foreach($data as $row)

<tr class="border-b">

<td class="p-3">
{{ $row->kode_mk }}
</td>

<td class="p-3">
{{ $row->nama_mk }}
</td>

<td class="p-3">
{{ $row->sks }}
</td>

<td class="p-3">
{{ $row->semester }}
</td>

<td class="p-3 flex gap-2">

<a href="{{ route('matakuliah.edit',$row) }}"
class="bg-yellow-500 text-white px-3 py-1 rounded">

Edit

</a>

<form
action="{{ route('matakuliah.destroy',$row) }}"
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