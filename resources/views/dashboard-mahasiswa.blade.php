<x-app-layout>

    <x-slot name="header">
        Dashboard Mahasiswa
    </x-slot>

    <div class="p-6">

        <div class="bg-white p-4 rounded shadow">

            Selamat datang
            {{ auth()->user()->name }}

        </div>

    </div>

</x-app-layout>