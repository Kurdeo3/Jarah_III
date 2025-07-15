<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $findUmkm->nama_umkm }} - UMKM Padukuhan Jarah III</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <style>
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

        .hero-overlay {
            background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 100%);
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .vision-mission-bg {
            background: linear-gradient(135deg, #8B8B6B 0%, #77784A 100%);
        }

        .pagination {
            @apply flex justify-center space-x-2 mt-4;
        }
        .pagination .page-link {
            @apply bg-white border text-gray-700 px-3 py-1 rounded hover:bg-yellow-300 hover:text-black;
        }
        .pagination .active .page-link {
            @apply bg-yellow-400 text-black font-bold;
        }

        .contact-btn {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(34, 197, 94, 0.3);
        }

        .whatsapp-btn {
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
        }

        .whatsapp-btn:hover {
            background: linear-gradient(135deg, #128c7e 0%, #25d366 100%);
        }

        .info-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 250, 252, 0.95) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
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
    <header id="mainHeader" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 text-white bg-[#005f2f]">
        <div class="flex justify-between items-center p-4 md:p-6 max-w-7xl mx-auto">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-sm font-bold">LOGO</div>
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
                <a href="{{ url('/home') }}" class="nav-item hover:text-green-700">Home</a>
                <a href="{{ url('/profile') }}" class="nav-item hover:text-green-700">Profile Desa</a>
                <a href="{{ url('/infografis') }}" class="nav-item hover:text-green-700">Infografis</a>
                <a href="{{ url('/umkm') }}" class="nav-item text-black font-bold">UMKM</a>
                <a href="{{ url('/berita') }}" class="nav-item hover:text-green-700">Berita</a>
                <a href="{{ url('/kontak') }}" class="nav-item hover:text-green-700">Kontak</a>
                <a href="{{ url('/admin/loginPage') }}" class="bg-yellow-300 text-sm px-4 py-1 rounded hover:bg-yellow-400">Login</a>
            </nav>
        </div>

        <!-- Menu dropdown mobile -->
        <div id="mobileNav" class="md:hidden hidden flex-col space-y-3 px-6 pb-4 bg-white text-sm font-semibold text-black">
            <a href="{{ url('/home') }}" class="hover:text-green-700">Home</a>
            <a href="{{ url('/profile') }}" class="hover:text-green-700">Profile Desa</a>
            <a href="{{ url('/infografis') }}" class="hover:text-green-700">Infografis</a>
            <a href="{{ url('/umkm') }}" class="text-green-700 font-bold">UMKM</a>
            <a href="{{ url('/berita') }}" class="hover:text-green-700">Berita</a>
            <a href="{{ url('/kontak') }}" class="hover:text-green-700">Kontak</a>
            <a href="{{ url('/admin/loginPage') }}" class="inline-block bg-yellow-300 px-4 py-1 rounded hover:bg-yellow-400">Login</a>
        </div>
    </header>

    <!-- UMKM Detail Section -->
    <section class="py-32 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/home') }}" class="text-gray-500 hover:text-green-700 text-sm">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="{{ url('/umkm') }}" class="ml-1 text-gray-500 hover:text-green-700 text-sm">
                                UMKM
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-gray-700 text-sm font-medium">{{ $findUmkm->nama_umkm }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Main Content -->
            <div class="bg-white shadow-xl rounded-3xl overflow-hidden">
                <!-- Header Info -->
                <div class="p-6 md:p-8">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                                {{ $findUmkm->nama_umkm }}
                            </h1>
                            <div class="flex items-center gap-2 text-gray-600">
                                <img src="https://img.icons8.com/parakeet-line/48/person-male.png" alt="Owner" class="w-5 h-5">
                                <span class="text-lg">{{ $findUmkm->nama_pemilik_umkm }}</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="tel:{{ $findUmkm->no_telp_umkm }}" class="contact-btn text-white px-6 py-3 rounded-lg font-semibold text-center flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                Hubungi
                            </a>
                            <a href="https://wa.me/62{{ ltrim($findUmkm->no_telp_umkm, '0') }}?text=Halo, saya tertarik dengan produk {{ $findUmkm->nama_umkm }}" 
                                target="_blank" class="whatsapp-btn text-white px-6 py-3 rounded-lg font-semibold text-center flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Product Image -->
                    <div class="mb-8">
                        <img src="{{ asset('storage/' . $findUmkm->foto_umkm) }}" 
                            alt="{{ $findUmkm->nama_umkm }}" 
                            class="w-full max-w-4xl mx-auto h-[300px] md:h-[500px] lg:h-[600px] object-cover rounded-xl shadow-lg">
                    </div>

                    <!-- Product Info Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Contact Info Card -->
                        <div class="info-card p-6 rounded-xl">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                Informasi Kontak
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <img src="https://img.icons8.com/parakeet-line/48/person-male.png" alt="Owner" class="w-6 h-6">
                                    <div>
                                        <p class="text-sm text-gray-500">Pemilik</p>
                                        <p class="font-medium text-gray-900">{{ $findUmkm->nama_pemilik_umkm }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <img src="https://img.icons8.com/parakeet-line/48/phone.png" alt="Phone" class="w-6 h-6">
                                    <div>
                                        <p class="text-sm text-gray-500">Nomor Telepon</p>
                                        <p class="font-medium text-gray-900">{{ $findUmkm->no_telp_umkm }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Info Card -->
                        <div class="info-card p-6 rounded-xl">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                </svg>
                                Informasi Usaha
                            </h3>
                            <div class="space-y-3">
                                <div>
                                    <p class="text-sm text-gray-500">Nama Usaha</p>
                                    <p class="font-medium text-gray-900">{{ $findUmkm->nama_umkm }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Lokasi</p>
                                    <p class="font-medium text-gray-900">Padukuhan Jarah III, Kalurahan Banjarejo</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Description -->
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-6a1 1 0 00-1-1H9a1 1 0 00-1 1v6a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                            </svg>
                            Deskripsi Produk/Layanan
                        </h3>
                        <div class="text-gray-700 text-justify leading-relaxed">
                            {!! nl2br(e($findUmkm->deskripsi_umkm)) !!}
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="mt-8 text-center">
                        <a href="{{ url('/umkm') }}" class="inline-flex items-center gap-2 bg-gray-600 hover:bg-gray-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                            </svg>
                            Kembali ke Daftar UMKM
                        </a>
                    </div>
                </div>
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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const header = document.getElementById("mainHeader");
            const navLinks = document.querySelectorAll(".nav-item");
            const toggle = document.getElementById("toggleMenu");
            const mobileNav = document.getElementById("mobileNav");

            toggle.addEventListener("click", () => {
                mobileNav.classList.toggle("hidden");
            });
        });
    </script>
</body>
</html>