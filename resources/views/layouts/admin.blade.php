<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>SIAKAD</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('components.admin-sidebar')

    {{-- Content --}}
    <div class="flex-1">

        {{-- Header --}}
        <header class="bg-white shadow">

            <div class="flex justify-between items-center px-8 py-5">

                <div>

                    <h1 class="text-2xl font-bold text-gray-800">

                        Sistem Informasi Akademik

                    </h1>

                    <p class="text-sm text-gray-500">

                        Dashboard Administrator

                    </p>

                </div>

                <div class="text-right">

                    <h3 class="font-semibold">

                        {{ Auth::user()->name }}

                    </h3>

                    <span
                        class="text-sm text-blue-600">

                        Administrator

                    </span>

                </div>

            </div>

        </header>

        <main class="p-8">

            {{ $slot }}

        </main>

    </div>

</div>

</body>
</html>