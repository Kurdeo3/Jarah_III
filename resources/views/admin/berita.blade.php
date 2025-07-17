<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-green-600 text-white flex flex-col">
        <div class="p-6 border-b border-green-500">
            <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                <span class="text-gray-600 font-bold">LOGO</span>
            </div>
        </div>
        <nav class="flex-1 py-6 px-4 space-y-2">
            <a href="{{ url('/admin/dashboard') }}" class="block py-2 px-4 rounded hover:bg-green-700">Dashboard</a>
            <a href="{{ url('/admin/penduduk') }}" class="block py-2 px-4 rounded hover:bg-green-700">Penduduk</a>
            <a href="{{ url('/admin/berita') }}" class="block py-2 px-4 rounded bg-green-700">Berita</a>
            <a href="{{ url('/admin/umkm') }}" class="block py-2 px-4 rounded hover:bg-green-700">UMKM</a>
            <a href="{{ url('/admin/galeri') }}" class="block py-2 px-4 rounded hover:bg-green-700">Galeri</a>
        </nav>
        <div class="p-4">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Main -->
    <div class="flex-1">
        <header class="bg-white shadow px-6 py-4 border-b">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Data Berita</h1>
                    <p class="text-gray-600">Daftar berita terkini</p>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-sm">{{ strtoupper(substr($admin->nama, 0, 2)) }}</span>
                    </div>
                    <span class="text-gray-700 font-medium">{{ $admin->nama }}</span>
                </div>
            </div>
        </header>

        @if (session('success'))
            <div class="m-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <main class="p-6">
            <div class="bg-white shadow-md rounded-lg p-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">Daftar Berita</h2>
                    <button onclick="toggleModal(true)" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Tambah Berita
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-600">
                        <thead class="text-xs uppercase bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Judul</th>
                            <th class="px-4 py-2">Deskripsi</th>
                            <th class="px-4 py-2">Tanggal</th>
                            <th class="px-4 py-2">Foto</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($beritas as $index => $berita)
                            <tr class="bg-white border-b">
                                <td class="px-4 py-2">{{ $index + 1 }}</td>
                                <td class="px-4 py-2">{{ $berita->judul_berita }}</td>
                                <td class="px-4 py-2">{{ Str::limit($berita->deskripsi_berita, 50) }}</td>
                                <td class="px-4 py-2">{{ $berita->tanggal_berita }}</td>
                                <td class="px-4 py-2">
                                    @if($berita->foto_berita)
                                        <img src="{{ asset('storage/' . $berita->foto_berita) }}" class="w-16 h-16 object-cover rounded" />
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-4 py-2 flex gap-2">
                                    <button onclick='openUpdateModal(@json($berita))' class="text-green-600 hover:text-green-800">
                                        <img src="https://img.icons8.com/plasticine/100/create-new.png" class="w-[30px] h-[30px] min-w-[30px] min-h-[30px]" alt="edit">
                                    </button>
                                    <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">
                                            <img src="https://img.icons8.com/stickers/100/trash.png" class="w-[30px] h-[30px] min-w-[30px] min-h-[30px]" alt="hapus" />
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="6" class="text-center py-4 text-gray-500">Tidak ada berita.</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

    <!-- Modal Tambah Berita -->
    <div id="modalTambah" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl">
            <!-- Modal Header -->
            <div class="bg-green-700 text-white px-6 py-4 flex justify-between items-center rounded-t-lg">
                <h3 class="text-lg font-bold">TAMBAH DATA BERITA</h3>
                <button onclick="toggleModal(false)" class="text-xl">&times;</button>
            </div>

            <!-- Modal Form -->
            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="px-6 py-4 space-y-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Judul Berita</label>
                        <input type="text" name="judul_berita" required class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Tanggal Berita</label>
                        <input type="date" name="tanggal_berita" required class="w-full border rounded px-3 py-2" />
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium">Deskripsi</label>
                    <textarea name="deskripsi_berita" required class="w-full border rounded px-3 py-2"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium">Foto (Opsional)</label>
                    <input type="file" name="foto_berita" accept="image/*" class="w-full border rounded px-3 py-2" />
                </div>
                <div class="text-sm text-gray-600 italic">*Klik tombol Simpan untuk menyimpan data Berita</div>
                <div class="text-right">
                    <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">SIMPAN</button>
                </div>
            </form>
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded my-2">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <!-- Modal Update Berita -->
    <div id="modalUpdate" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl">
            <!-- Modal Header -->
            <div class="bg-green-700 text-white px-6 py-4 flex justify-between items-center rounded-t-lg">
                <h3 class="text-lg font-bold">UBAH DATA BERITA</h3>
                <button onclick="toggleModalUpdate(false)" class="text-xl">&times;</button>
            </div>

            <!-- Modal Form -->
            <form method="POST" id="formUpdateBerita" enctype="multipart/form-data" class="px-6 py-4 space-y-4">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Judul Berita</label>
                        <input type="text" name="judul_berita" id="edit_judul" required class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Tanggal Berita</label>
                        <input type="date" name="tanggal_berita" id="edit_tanggal" required class="w-full border rounded px-3 py-2" />
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium">Deskripsi</label>
                    <textarea name="deskripsi_berita" id="edit_deskripsi" required class="w-full border rounded px-3 py-2"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium">Ganti Foto (Opsional)</label>
                    <input type="file" name="foto_berita" accept="image/*" class="w-full border rounded px-3 py-2" />
                    <div class="mt-2" id="previewFotoUpdate"></div>
                </div>
                <div class="text-sm text-gray-600 italic">*Klik tombol Simpan untuk menyimpan perubahan data</div>
                <div class="text-right">
                    <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">SIMPAN PERUBAHAN</button>
                </div>
            </form>
        </div>
    </div>

<!-- Script Modal -->
<script>
    function toggleModal(show = true) {
        document.getElementById('modalTambah').classList.toggle('hidden', !show);
    }

    function toggleModalUpdate(show = true) {
        document.getElementById('modalUpdate').classList.toggle('hidden', !show);
    }

    function openUpdateModal(data) {
        document.getElementById('edit_judul').value = data.judul_berita;
        document.getElementById('edit_deskripsi').value = data.deskripsi_berita;
        document.getElementById('edit_tanggal').value = data.tanggal_berita;

        const form = document.getElementById('formUpdateBerita');
        form.action = `/admin/berita/${data.id}`;

        // Preview foto lama
        const preview = document.getElementById('previewFotoUpdate');
        if (data.foto_berita) {
            preview.innerHTML = `
                <div class="mt-2">
                    <p class="text-sm text-gray-600 mb-1 italic">Foto Sebelumnya:</p>
                    <img src="/storage/${data.foto_berita}" class="w-24 h-24 object-cover rounded border" alt="Foto Berita">
                </div>
            `;
        } else {
            preview.innerHTML = `<p class="text-sm text-gray-500 italic mt-2">Tidak ada foto sebelumnya</p>`;
        }

        toggleModalUpdate(true);
    }
</script>

</body>
</html>
