<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-green-600 text-white flex flex-col">
            <!-- Logo Section -->
            <div class="p-6 border-b border-green-500">
                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                    <span class="text-gray-600 font-bold">LOGO</span>
                </div>
            </div>
            
            <!-- Navigation Menu -->
            <nav class="flex-1 py-6">
                <ul class="space-y-2 px-4">
                    <li>
                        <a href="{{ url('/admin/dashboard') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors bg-green-700">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/penduduk') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">
                            Penduduk
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/berita') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/umkm') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">
                            UMKM
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/galeri') }}" class="block py-2 px-4 rounded hover:bg-green-700 transition-colors">
                            Galeri
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Logout Button -->
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
                        <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                        <p class="text-gray-600">Selamat Datang di halaman Dashboard</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-bold">--</span>
                        </div>
                        <span class="text-gray-700 font-medium">{{ $admin->nama }}</span>
                    </div>
                </div>
            </header>
            
            <!-- Dashboard Content -->
            <main class="flex-1 p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Total Penduduk Card -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-600 text-sm font-medium">Total</h3>
                                <h4 class="text-gray-800 font-semibold">Penduduk</h4>
                                <p class="text-3xl font-bold text-green-600">{{ $totalPenduduk }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Laki-laki Card -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-800 font-semibold">Laki-laki</h3>
                                <p class="text-3xl font-bold text-green-600">{{$lakiLaki}}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Perempuan Card -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-800 font-semibold">Perempuan</h3>
                                <p class="text-3xl font-bold text-green-600">{{$perempuan}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>