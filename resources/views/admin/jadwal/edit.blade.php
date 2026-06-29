<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

<div class="bg-white rounded shadow p-6">

<h2 class="text-xl font-bold mb-4">
Edit Jadwal
</h2>

<form
action="{{ route('jadwal.update',$jadwal) }}"
method="POST">

@csrf
@method('PUT')

<div class="mb-4">

<label>Mata Kuliah</label>

<select
name="kode_mk"
class="w-full border rounded p-2">

                @error('kode_mk')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

@foreach($matakuliahs as $mk)

<option
value="{{ $mk->kode_mk }}"
{{ $jadwal->kode_mk == $mk->kode_mk ? 'selected' : '' }}>

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
                @error('nidn_dosen')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

@foreach($dosens as $dosen)

<option
value="{{ $dosen->nidn }}"
{{ $jadwal->nidn_dosen == $dosen->nidn ? 'selected' : '' }}>

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
value="{{ $jadwal->kelas }}"
class="w-full border rounded p-2">
                @error('kelas')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

</div>

<div class="mb-4">

<label>Hari</label>

<select
name="hari"
class="w-full border rounded p-2">
                @error('hari')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

@foreach(['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] as $hari)

<option
value="{{ $hari }}"
{{ $jadwal->hari == $hari ? 'selected' : '' }}>

{{ $hari }}

</option>

@endforeach

</select>

</div>

<div class="mb-4">

<label>Jam</label>

<input
type="time"
name="jam"
value="{{ $jadwal->jam }}"
class="w-full border rounded p-2">
                @error('jam')
                    <div class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </div>
                @enderror

</div>

<button
class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">

Update

</button>

</form>

</div>

</div>

</x-app-layout>