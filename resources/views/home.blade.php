<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Padukuhan Jarah III</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <style>
        .left-card {
        transform: translateX(-160%) scale(0.75);
        opacity: 0.5;
        z-index: 10;
        }
        .center-card {
        transform: translateX(0%) scale(1);
        opacity: 1;
        z-index: 20;
        }
        .right-card {
        transform: translateX(160%) scale(0.75);
        opacity: 0.5;
        z-index: 10;
        }

        .transparent-header {
        background-color: transparent;
        color: white;
        }

        .solid-header {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            color: black;
        }
        .nav-link {
        transition: color 0.3s;
        }
        .solid-header .nav-link {
        color: black;
        }

        .login-btn:hover {
            background-color: #fcd34d;
        }

        .footer-gradient {
            background: linear-gradient(135deg, #006400 0%, #004d00 100%);
        }
        
        .footer-wave {
            position: relative;
            overflow: hidden;
        }
        
        .footer-wave::before {
            content: '';
            position: absolute;
            top: -2px;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        }
        
        .footer-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #fcd34d;
            transition: width 0.3s ease;
        }
        
        .footer-link:hover::after {
            width: 100%;
        }
        
        .footer-link:hover {
            color: #fcd34d;
            transform: translateY(-2px);
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateX(5px);
        }
        
        .contact-icon {
            width: 16px;
            height: 16px;
            margin-right: 8px;
            opacity: 0.8;
        }
        
        .logo-glow {
            box-shadow: 0 0 20px rgba(255,255,255,0.1);
            transition: box-shadow 0.3s ease;
        }
        
        .logo-glow:hover {
            box-shadow: 0 0 30px rgba(255,255,255,0.2);
        }
        
        .footer-section {
            position: relative;
            padding: 1.5rem;
            border-radius: 8px;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            margin-bottom: 1.5rem;
        }
        
        .footer-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #fcd34d, transparent);
        }
        
        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .social-icon:hover {
            background: #fcd34d;
            color: #006400;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(252,211,77,0.3);
        }
        
        .copyright-section {
            background: rgba(0,0,0,0.2);
            backdrop-filter: blur(5px);
        }
        
        .footer-title {
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 30px;
            height: 2px;
            background: #fcd34d;
        }
        
        @media (max-width: 768px) {
            .footer-section {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body class="font-sans bg-white text-gray-900">
    <!-- Header / Navbar -->
    <header id="mainHeader" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent text-white">
    <div class="flex justify-between items-center p-4 md:p-6 max-w-7xl mx-auto">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
        <!-- <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-sm font-bold">LOGO</div> -->
        <img src="{{ asset('storage/Assets/KKN 87.png') }}" alt="LOGO KKN" class="w-8">
        <div>
            <p class="text-xs font-bold">JARAH III</p>
            <p class="text-xs">KALURAHAN BANJAREJO</p>
        </div>
        </div>

        <!-- Tombol menu di mobile -->
        <button id="toggleMenu" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        </button>

        <!-- Navigasi -->
        <nav id="navLinks" class="hidden md:flex space-x-4 text-sm font-semibold">
        <a href="{{ url('/home') }}" class="nav-item text-green-700 font-bold">Home</a>
        <a href="{{ url('/profile') }}" class="nav-item hover:text-green-700 font-bold">Profile Desa</a>
        <a href="{{ url('/infografis') }}" class="nav-item hover:text-green-700 font-bold">Infografis</a>
        <a href="{{ url('/umkm') }}" class="nav-item hover:text-green-700 font-bold">UMKM</a>
        <a href="{{ url('/berita') }}" class="nav-item hover:text-green-700 font-bold">Berita</a>
        <a href="{{ url('/kontak') }}" class="nav-item hover:text-green-700 font-bold">Kontak</a>
        <a href="{{ route('admin.loginPage') }}"
            class="bg-yellow-300 text-sm px-4 py-1 rounded hover:bg-yellow-400">Login</a>
        </nav>
    </div>

    <!-- Menu dropdown mobile -->
    <div id="mobileNav" class="md:hidden hidden flex-col space-y-3 px-6 pb-4 bg-white text-sm font-semibold text-black">
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/profile') }}">Profile Desa</a>
        <a href="{{ url('/infografis') }}">Infografis</a>
        <a href="{{ url('/umkm') }}">UMKM</a>
        <a href="{{ url('/berita') }}">Berita</a>
        <a href="{{ url('/kontak') }}">Kontak</a>
        <a href="{{ url('/admin.loginPage') }}"
        class="inline-block bg-yellow-300 px-4 py-1 rounded hover:bg-yellow-400">Login</a>
    </div>
    </header>

    <!-- Hero Carousel -->
    <section id="carousel" class="relative">
        <!-- Wrapper Gambar -->
        <div class="relative h-[550px] overflow-hidden">
            <div class="slide absolute inset-0 transition-opacity duration-700 opacity-0 z-0">
                <img src="{{ asset('storage/Assets/prokerBing.jpg') }}" class="w-full h-full object-cover" />
            </div>
            <div class="slide absolute inset-0 transition-opacity duration-700 opacity-0 z-0">
                <img src="{{ asset('storage/Assets/loginBackground2.jpg') }}" class="w-full h-full object-cover" />
            </div>
            <div class="slide absolute inset-0 transition-opacity duration-700 opacity-0 z-0">
                <img src="{{ asset('storage/Assets/loginBackground3.jpg') }}" class="w-full h-full object-cover" />
            </div>
        </div>

        <!-- Teks -->
        <div class="absolute inset-0 flex items-center justify-center flex-col text-center text-white z-10 bg-black bg-opacity-50">
            <div class="slide-text absolute transition-opacity duration-700 opacity-0">
                <h1 class="text-4xl font-extrabold text-yellow-400">SELAMAT DATANG</h1>
                <p class="text-xl mt-2 font-semibold">WEBSITE PADUKUHAN JARAH III</p>
            </div>
            <div class="slide-text absolute transition-opacity duration-700 opacity-0">
                <h1 class="text-4xl font-extrabold text-yellow-400">TEMUKAN INFORMASI</h1>
                <p class="text-xl mt-2 font-semibold">TENTANG DESA KAMI</p>
            </div>
            <div class="slide-text absolute transition-opacity duration-700 opacity-0">
                <h1 class="text-4xl font-extrabold text-yellow-400">JEJAKI POTENSI</h1>
                <p class="text-xl mt-2 font-semibold">DARI MASYARAKAT JARAH III</p>
            </div>
        </div>

        <!-- Indicator -->
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3">
            <button class="w-6 h-1 bg-white rounded-full carousel-indicator" data-index="0"></button>
            <button class="w-6 h-1 bg-white/60 rounded-full carousel-indicator" data-index="1"></button>
            <button class="w-6 h-1 bg-white/60 rounded-full carousel-indicator" data-index="2"></button>
        </div>

        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </section>

    <!-- Jelajahi Desa -->
    <section class="px-8 py-16 bg-white">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-green-800">JELAJAHI DESA</h2>
            <p class="mt-2 text-sm text-gray-600 max-w-lg mx-auto">
                Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan desa, aparatur pemerintahan, penduduk, demografi, potensi desa, dan juga berita tentang desa.
            </p>
        </div>

        <div class="grid grid-cols-4 gap-6 mx-auto">
            <!-- Card 1 -->
            <a href="{{ url('/profile') }}" class="bg-[#008000] hover:bg-[#006400] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/fluency/48/home.png" class="w-10 h-10 mb-2" alt="Profile Desa">
                <span>Profile Desa</span>
            </a>
            <!-- Card 2 -->
            <a href="{{ url('/infografis') }}" class="bg-[#008000] hover:bg-[#006400] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/external-microdots-premium-microdot-graphic/64/external-data-chart-graph-microdots-premium-microdot-graphic-2.png" 
                class="w-10 h-10 mb-2" alt="Infografis">
                <span>Infografis</span>
            </a>
            <!-- Card 3 -->
            <a href="{{ url('/berita') }}" class="bg-[#008000] hover:bg-[#006400] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/plasticine/100/news.png" class="w-10 h-10 mb-2" alt="Berita">
                <span>Berita</span>
            </a>
            <!-- Card 4 -->
            <a href="{{ url('/kontak') }}" class="bg-[#008000] hover:bg-[#006400] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/stickers/100/contact-card.png" class="w-10 h-10 mb-2" alt="Kontak">
                <span>Kontak</span>
            </a>
        </div>
    </section>

    <section class="bg-[#006400] py-12 text-white text-center">
    <h2 class="text-3xl font-bold mb-8">BERITA</h2>
        <div class="relative max-w-7xl mx-auto px-4">
        <button id="newsPrev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-[#77784A] p-2 rounded-full z-30">
            &#8592;
        </button>
        
        <div id="newsCarousel" class="relative flex justify-center items-center h-[420px] w-full overflow-hidden">
            @if($beritaTerbaru->count() > 0)
                <!-- Card Berita 1 -->
                <div class="news-card absolute w-72 transition-all duration-500 ease-in-out bg-white text-gray-800 p-4 rounded-lg shadow">
                    <img src="{{ $beritaTerbaru[0]->foto_berita ? asset('storage/' . $beritaTerbaru[0]->foto_berita) : 'https://via.placeholder.com/300x160' }}" class="rounded-lg h-60 w-full object-cover mb-2">
                    <p class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($beritaTerbaru[0]->created_at)->format('d M Y') }}</p>
                    <h3 class="font-bold">{{ $beritaTerbaru[0]->judul_berita }}</h3>
                    <p class="text-sm mt-1">{{ Str::limit($beritaTerbaru[0]->konten, 50) }}</p>
                    <a href="{{ route('showBeritaDetailPage', $beritaTerbaru[0]->id) }}" class="text-sm text-green-700 font-semibold">Baca selengkapnya →</a>
                </div>
            @endif

            @if($beritaTerbaru->count() > 1)
                <!-- Card Berita 2 -->
                <div class="news-card absolute w-72 transition-all duration-500 ease-in-out bg-white text-gray-800 p-4 rounded-lg shadow">
                    <img src="{{ $beritaTerbaru[1]->foto_berita ? asset('storage/' . $beritaTerbaru[1]->foto_berita) : 'https://via.placeholder.com/300x160' }}" class="rounded-lg h-60 w-full object-cover mb-2">
                    <p class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($beritaTerbaru[1]->created_at)->format('d M Y') }}</p>
                    <h3 class="font-bold">{{ $beritaTerbaru[1]->judul_berita }}</h3>
                    <p class="text-sm mt-1">{{ Str::limit($beritaTerbaru[1]->konten, 50) }}</p>
                    <a href="{{ route('showBeritaDetailPage', $beritaTerbaru[1]->id) }}" class="text-sm text-green-700 font-semibold">Baca selengkapnya →</a>
                </div>
            @endif

            @if($beritaTerbaru->count() > 2)
                <!-- Card Berita 3 -->
                <div class="news-card absolute w-72 transition-all duration-500 ease-in-out bg-white text-gray-800 p-4 rounded-lg shadow">
                    <img src="{{ $beritaTerbaru[2]->foto_berita ? asset('storage/' . $beritaTerbaru[2]->foto_berita) : 'https://via.placeholder.com/300x160' }}" class="rounded-lg h-60 w-full object-cover mb-2">
                    <p class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($beritaTerbaru[2]->created_at)->format('d M Y') }}</p>
                    <h3 class="font-bold">{{ $beritaTerbaru[2]->judul_berita }}</h3>
                    <p class="text-sm mt-1">{{ Str::limit($beritaTerbaru[2]->konten, 50) }}</p>
                    <a href="{{ route('showBeritaDetailPage', $beritaTerbaru[2]->id) }}" class="text-sm text-green-700 font-semibold">Baca selengkapnya →</a>
                </div>
            @endif
        </div>

        <button id="newsNext" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-[#77784A] p-2 rounded-full z-30">
            &#8594;
        </button>

        <p class="text-sm text-white mt-4">Berita terbaru tentang Padukuhan Jarah III bisa dibaca disini</p>
        </div>
</section>

<!-- Section Galeri -->
<section class="bg-gray-100 py-12 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-green-800">GALERI</h2>
            <p class="mt-2 text-sm text-gray-600 max-w-lg mx-auto">
                Dokumentasi kegiatan dan momen berharga di Padukuhan Jarah III
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @if($galeriTerbaru->count() > 0)
                @foreach($galeriTerbaru as $galeri)
                    <div class="aspect-square rounded-xl overflow-hidden shadow-lg relative group">
                            <img src="{{ asset('storage/' . $galeri->foto_galeri) }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                alt="{{ $galeri->title_foto_galeri }}" />
                            <div
                                class="absolute inset-0 bg-[rgba(0,128,0,0.65)] opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex flex-col justify-center items-center text-white px-2 text-center">
                                <h3 class="text-lg font-bold">{{ $galeri->title_foto_galeri }}</h3>
                                <p class="text-sm">{{ \Carbon\Carbon::parse($galeri->tanggal_foto_galeri)->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>
                @endforeach
            @else
                @for($i = 1; $i <= 4; $i++)
                    <div class="aspect-square rounded-xl overflow-hidden shadow-lg relative group">
                        <img src="https://via.placeholder.com/300x300" 
                             alt="Galeri {{ $i }}" 
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-[rgba(0,128,0,0.65)] opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex flex-col justify-center items-center text-white px-2 text-center">
                            <h3 class="text-lg font-bold">Galeri {{ $i }}</h3>
                            <p class="text-sm">{{ date('d F Y') }}</p>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ url('/profile') }}" 
               class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors duration-300">
                Lihat Semua Galeri
            </a>
        </div>
    </div>
</section>

<!-- Section UMKM -->
<section class="bg-[#006400] py-12 px-4 md:px-8 text-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">UMKM JARAH III</h2>
            <p class="mt-2 text-sm max-w-lg mx-auto">
                Produk dan layanan unggulan dari masyarakat Padukuhan Jarah III
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @if($umkmTerbaru->count() > 0)
                @foreach($umkmTerbaru as $umkm)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ $umkm->foto_umkm ? asset('storage/' . $umkm->foto_umkm) : 'https://via.placeholder.com/300x200' }}" 
                                alt="{{ $umkm->nama_umkm }}" 
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        </div>
                        <div class="p-4 mx-auto text-center">
                            <h3 class="font-bold text-lg text-green-800 mb-2">{{ $umkm->nama_umkm }}</h3>
                            <span class="text-sm text-gray-500">{{ $umkm->nama_pemilik_umkm }}</span>
                        </div>
                    </div>
                @endforeach
            @else
                @for($i = 1; $i <= 4; $i++)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="https://via.placeholder.com/300x200" 
                                 alt="UMKM {{ $i }}" 
                                 class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-green-800 mb-2">UMKM {{ $i }}</h3>
                            <p class="text-sm text-gray-600 mb-2">Deskripsi produk atau layanan UMKM dari masyarakat setempat</p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-semibold">Kategori</span>
                                <span class="text-sm text-gray-500">Pemilik</span>
                            </div>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ url('/umkm') }}" 
               class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors duration-300">
                Lihat Semua UMKM
            </a>
        </div>
    </div>
</section>
    
    <section class="bg-white py-12 px-4 md:px-8">
    <div class="max-w-5xl mx-auto text-center">
        <div class="flex items-center justify-center mb-4 space-x-3">
        <img src="https://img.icons8.com/ios-filled/50/4a4a4a/marker.png" class="w-6 h-6" alt="Location Icon">
        <h2 class="text-3xl font-bold text-green-800">PETA JARAH III</h2>
        </div>
        <p class="text-sm text-gray-600 mb-6">Menampilkan Peta Desa Jarah III</p>
        <!-- <div class="w-full h-[450px] rounded-xl overflow-hidden shadow-lg border border-gray-200">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.242173635606!2d110.6484506143213!3d-7.871349978129355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ba86a6ebbb139%3A0xc6c4e81895a66c62!2sDusun%20Jarah%20III%2C%20Banjarejo%2C%20Tanjungsari%2C%20Gunungkidul%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1720104408206!5m2!1sid!2sid"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div> -->
        <div class="flex justify-center">
            <img src="{{ asset('storage/Assets/PETA_JARAHIII.jpg') }}"
                class="w-full max-w-md sm:max-w-sm md:max-w-md lg:max-w-2xl h-auto rounded-lg shadow">
        </div>
    </div>
    </section>

    <!-- Footer -->
    <footer class="footer-gradient footer-wave text-white pt-12 pb-0 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Logo dan Info -->
                <div class="footer-section">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center font-bold text-white text-sm logo-glow border-2 border-white/20">
                            LOGO
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-yellow-300">JARAH III</h3>
                            <p class="text-base font-semibold text-green-100">KALURAHAN BANJAREJO</p>
                        </div>
                    </div>
                    <p class="text-sm text-green-100 leading-relaxed mb-4">
                        Desa Jarah III, Kalurahan Banjarejo, Kapanewon Tanjungsari Kabupaten Gunungkidul
                    </p>
                    
                    <!-- Social Media Icons -->
                    <div class="social-icons">
                        <a href="#" class="social-icon">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Navigasi -->
                <div class="footer-section">
                    <h4 class="font-bold text-lg mb-4 footer-title text-yellow-300">Navigasi</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/home') }}" class="footer-link text-green-100">Beranda</a></li>
                        <li><a href="{{ url('/profile') }}" class="footer-link text-green-100">Profile Desa</a></li>
                        <li><a href="{{ url('/infografis') }}" class="footer-link text-green-100">Infografis</a></li>
                        <li><a href="{{ url('/umkm') }}" class="footer-link text-green-100">UMKM</a></li>
                        <li><a href="{{ url('/berita') }}" class="footer-link text-green-100">Berita</a></li>
                        <li><a href="{{ url('/kontak') }}" class="footer-link text-green-100">Kontak</a></li>
                    </ul>
                </div>

                <!-- Hubungi Kami -->
                <div class="footer-section">
                    <h4 class="font-bold text-lg mb-4 footer-title text-yellow-300">Hubungi Kami</h4>
                    <div class="space-y-3">
                        <div class="contact-item">
                            <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            <span class="text-green-100">08546227XXXX</span>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            <span class="text-green-100">jarah3@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <span class="text-green-100">Gunungkidul, DIY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="copyright-section text-green-100 text-sm px-6 py-4 mt-8">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
                <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                    © 2025 Padukuhan Jarah III. Seluruh Hak Cipta Dilindungi.
                </p>
                <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Dikembangkan oleh Kelompok 33 KKN 87 JARAH III UAJY
                </p>
            </div>
        </div>
    </footer>

</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide');
        const texts = document.querySelectorAll('.slide-text');
        const indicators = document.querySelectorAll('.carousel-indicator');
        let current = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('opacity-100', 'z-10');
                slide.classList.add('opacity-0', 'z-0');
                texts[i].classList.remove('opacity-100');
                texts[i].classList.add('opacity-0');
                indicators[i].classList.replace('bg-white', 'bg-white/60');
            });

            slides[index].classList.remove('opacity-0', 'z-0');
            slides[index].classList.add('opacity-100', 'z-10');
            texts[index].classList.remove('opacity-0');
            texts[index].classList.add('opacity-100');
            indicators[index].classList.replace('bg-white/60', 'bg-white');
        }

        indicators.forEach(button => {
            button.addEventListener('click', () => {
                const index = parseInt(button.dataset.index);
                current = index;
                showSlide(current);
            });
        });

        document.querySelector('[data-carousel-next]').addEventListener('click', () => {
            current = (current + 1) % slides.length;
            showSlide(current);
        });

        document.querySelector('[data-carousel-prev]').addEventListener('click', () => {
            current = (current - 1 + slides.length) % slides.length;
            showSlide(current);
        });

        setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, 6000); // auto slide tiap 6 detik

        showSlide(current); // tampilkan slide pertama
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const carousel = document.getElementById("newsCarousel");
        let cards = Array.from(carousel.querySelectorAll(".news-card"));
        let current = 0;

        function updateCarousel() {
        cards.forEach((card, i) => {
            card.classList.remove("left-card", "center-card", "right-card");
            const index = (i - current + cards.length) % cards.length;
            if (index === 0) {
            card.classList.add("center-card");
            } else if (index === 1) {
            card.classList.add("right-card");
            } else if (index === cards.length - 1) {
            card.classList.add("left-card");
            } else {
            card.style.opacity = "0";
            card.style.transform = "scale(0)";
            }
        });
        }

        document.getElementById("newsNext").addEventListener("click", () => {
        current = (current + 1) % cards.length;
        updateCarousel();
        });

        document.getElementById("newsPrev").addEventListener("click", () => {
        current = (current - 1 + cards.length) % cards.length;
        updateCarousel();
        });

        updateCarousel();
    });
    </script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const header = document.getElementById("mainHeader");
        const navLinks = document.querySelectorAll(".nav-item");
        const toggle = document.getElementById("toggleMenu");
        const mobileNav = document.getElementById("mobileNav");

        toggle.addEventListener("click", () => {
        mobileNav.classList.toggle("hidden");
        });

        window.addEventListener("scroll", () => {
        if (window.scrollY > 10) {
            header.classList.remove("bg-transparent", "text-white");
            header.classList.add("bg-white", "text-black", "shadow");
        } else {
            header.classList.remove("bg-white", "text-black", "shadow");
            header.classList.add("bg-transparent", "text-white");
        }
        });
    });
</script>


</html>
