<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk</title>
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

        <nav class="flex-1 py-6">
            <ul class="space-y-2 px-4">
                <li>
                    <a href="{{ url('/admin/dashboard') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/penduduk') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors bg-green-700">
                        Penduduk
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/berita') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">Berita</a>
                </li>
                <li>
                    <a href="{{ url('/admin/umkm') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">UMKM</a>
                </li>
                <li>
                    <a href="{{ url('/admin/galeri') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">Galeri</a>
                </li>
            </ul>
        </nav>

        <div class="p-4">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded transition-colors">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b px-6 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Data Kependudukan</h1>
                    <p class="text-gray-600">Daftar penduduk Jarah III</p>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                        <span class="text-white text-sm font-bold">{{ strtoupper(substr($admin->nama, 0, 2)) }}</span>
                    </div>
                    <span class="text-gray-700 font-medium">{{ $admin->nama }}</span>
                </div>
            </div>
        </header>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table & Button -->
        <main class="flex-1 p-6">
            <div class="bg-white shadow-md rounded-lg p-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">List Daftar Penduduk Jarah III</h2>
                    <button onclick="toggleModal(true)" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Tambah Data
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-600">
                        <thead class="text-xs uppercase bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Jenis Kelamin</th>
                            <th class="px-4 py-2">Usia</th>
                            <th class="px-4 py-2">Alamat</th>
                            <th class="px-4 py-2">No Telepon</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($penduduks as $index => $penduduk)
                            <tr class="bg-white border-b">
                                <td class="px-4 py-2">{{ $index + 1 }}</td>
                                <!-- <td class="px-4 py-2">{{ $penduduk->id }}</td> -->
                                <td class="px-4 py-2">{{ $penduduk->nama_penduduk }}</td>
                                <td class="px-4 py-2">{{ $penduduk->jenis_kelamin_penduduk }}</td>
                                <td class="px-4 py-2">{{ $penduduk->umur_penduduk }}</td>
                                <td class="px-4 py-2">{{ $penduduk->alamat_penduduk }}</td>
                                <td class="px-4 py-2">{{ $penduduk->no_telp_penduduk }}</td>
                                <td class="px-4 py-2 flex gap-2">
                                    <button
                                        onclick="openUpdateModal({
                                            id: {{ $penduduk->id }},
                                            nama_penduduk: '{{ $penduduk->nama_penduduk }}',
                                            jenis_kelamin_penduduk: '{{ $penduduk->jenis_kelamin_penduduk }}',
                                            umur_penduduk: '{{ $penduduk->umur_penduduk }}',
                                            alamat_penduduk: `{{ $penduduk->alamat_penduduk }}`,
                                            no_telp_penduduk: `{{ $penduduk->no_telp_penduduk }}`
                                        })"
                                        class="text-green-600 hover:text-green-800"
                                    >
                                        <!-- Icon Edit -->
                                        <img width="30" height="30" src="https://img.icons8.com/plasticine/100/create-new.png" alt="create-new" class="w-[30px] h-[30px] min-w-[30px] min-h-[30px]"/>
                                    </button>
                                    <form action="{{ route('admin.penduduk.destroy', $penduduk->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">
                                            <!-- Icon Hapus -->
                                            <img src="https://img.icons8.com/stickers/100/trash.png" alt="trash" class="w-[30px] h-[30px] min-w-[30px] min-h-[30px]" />
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-gray-500">Tidak ada data.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                        <!-- Pagination -->
                        <div class="mt-8">
                            {{ $penduduks->links() }}
                        </div>
                </div>
            </div>
        </main>
    </div>
</div>

    <!-- Modal Tambah Data -->
    <div id="modalTambah" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl">
            <!-- Modal Header -->
            <div class="bg-green-700 text-white px-6 py-4 flex justify-between items-center rounded-t-lg">
                <h3 class="text-lg font-bold">TAMBAH DATA PENDUDUK</h3>
                <button onclick="toggleModal(false)" class="text-xl">&times;</button>
            </div>

            <!-- Modal Form -->
            <form action="{{ route('admin.penduduk.store') }}" method="POST" class="px-6 py-4 space-y-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Nama Penduduk</label>
                        <input type="text" name="nama_penduduk" required class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Jenis Kelamin</label>
                        <select name="jenis_kelamin_penduduk" required class="w-full border rounded px-3 py-2">
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">No Telepon</label>
                        <input type="text" name="no_telp_penduduk" class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Usia</label>
                        <input type="number" name="umur_penduduk" required class="w-full border rounded px-3 py-2" />
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium">Alamat</label>
                    <textarea name="alamat_penduduk" required class="w-full border rounded px-3 py-2"></textarea>
                </div>
                <div class="text-sm text-gray-600 italic">*Klik tombol Simpan untuk menyimpan data Penduduk</div>
                <div class="text-right">
                    <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Update Data -->
    <div id="modalUpdate" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl">
            <!-- Modal Header -->
            <div class="bg-green-700 text-white px-6 py-4 flex justify-between items-center rounded-t-lg">
                <h3 class="text-lg font-bold">UBAH DATA PENDUDUK</h3>
                <button onclick="toggleModalUpdate(false)" class="text-xl">&times;</button>
            </div>

            <!-- Modal Form -->
            <form method="POST" class="px-6 py-4 space-y-4" id="formUpdatePenduduk">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Nama Penduduk</label>
                        <input type="text" name="nama_penduduk" id="edit_nama_penduduk" required class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Jenis Kelamin</label>
                        <select name="jenis_kelamin_penduduk" id="edit_jenis_kelamin_penduduk" required class="w-full border rounded px-3 py-2">
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">No Telepon</label>
                        <input type="text" name="no_telp_penduduk" id="edit_no_telp_penduduk" class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Usia</label>
                        <input type="number" name="umur_penduduk" id="edit_umur_penduduk" required class="w-full border rounded px-3 py-2" />
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium">Alamat</label>
                    <textarea name="alamat_penduduk" id="edit_alamat_penduduk" required class="w-full border rounded px-3 py-2"></textarea>
                </div>
                <div class="text-sm text-gray-600 italic">*Klik tombol Simpan untuk menyimpan perubahan data</div>
                <div class="text-right">
                    <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">SIMPAN PERUBAHAN</button>
                </div>
            </form>
        </div>
    </div>

<!-- Script Modal Create -->
<script>
    function toggleModal(show = true) {
        const modal = document.getElementById('modalTambah');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }
</script>

<!-- Script Modal Update -->
<script>
    function toggleModalUpdate(show = true) {
        const modal = document.getElementById('modalUpdate');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }

    function openUpdateModal(data) {
        // Isi data ke dalam form
        document.getElementById('edit_nama_penduduk').value = data.nama_penduduk;
        document.getElementById('edit_jenis_kelamin_penduduk').value = data.jenis_kelamin_penduduk;
        document.getElementById('edit_no_telp_penduduk').value = data.no_telp_penduduk ?? '';
        document.getElementById('edit_umur_penduduk').value = data.umur_penduduk;
        document.getElementById('edit_alamat_penduduk').value = data.alamat_penduduk;

        // Ubah action form sesuai id
        const form = document.getElementById('formUpdatePenduduk');
        form.action = `/admin/penduduk/${data.id}`;

        toggleModalUpdate(true);
    }
</script>
</body>
</html>
