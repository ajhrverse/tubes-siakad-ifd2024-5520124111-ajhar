<div class="w-72 bg-slate-900 text-white flex flex-col">

    <div class="text-center py-8 border-b border-slate-700">

        <div class="text-5xl">

            🎓

        </div>

        <h1 class="text-2xl font-bold mt-3">

            SIAKAD

        </h1>

        <p class="text-slate-300 text-sm">

            Sistem Informasi Akademik

        </p>

    </div>

    <div class="flex-1 px-5 py-6 space-y-2">

        <a href="{{ route('dashboard') }}"
           class="block rounded-lg px-4 py-3 hover:bg-blue-600">

            📊 Dashboard

        </a>

        <a href="{{ route('dosen.index') }}"
           class="block rounded-lg px-4 py-3 hover:bg-blue-600">

            👨‍🏫 Dosen

        </a>

        <a href="{{ route('mahasiswa.index') }}"
           class="block rounded-lg px-4 py-3 hover:bg-blue-600">

            👨‍🎓 Mahasiswa

        </a>

        <a href="{{ route('matakuliah.index') }}"
           class="block rounded-lg px-4 py-3 hover:bg-blue-600">

            📚 Mata Kuliah

        </a>

        <a href="{{ route('jadwal.index') }}"
           class="block rounded-lg px-4 py-3 hover:bg-blue-600">

            🗓 Jadwal

        </a>

    </div>

    <div class="border-t border-slate-700 p-5">

        <a href="{{ route('profile.edit') }}"
           class="block rounded-lg px-4 py-3 hover:bg-slate-700">

            👤 Profil

        </a>

        <form
            action="{{ route('logout') }}"
            method="POST">

            @csrf

            <button
                class="w-full mt-2 rounded-lg bg-red-500 hover:bg-red-600 py-3">

                Logout

            </button>

        </form>

                <div class="mt-8">

                <div class="bg-white rounded-xl shadow p-6">

                    <h3 class="text-xl font-semibold text-gray-800 mb-3">

                        Selamat Datang 👋

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Anda login sebagai
                        <span class="font-semibold text-blue-600">
                            Administrator
                        </span>.

                        Gunakan menu navigasi untuk mengelola data
                        <strong>Dosen</strong>,
                        <strong>Mahasiswa</strong>,
                        <strong>Mata Kuliah</strong>,
                        <strong>Jadwal</strong>,
                        serta memonitor aktivitas akademik.

                    </p>

                </div>

            </div>

    </div>

</div>