<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $findBerita->judul_berita }} - Padukuhan Jarah III</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <style>
        .hero-overlay {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.3) 100%);
        }
    </style>
</head>
<body class="font-sans bg-white text-gray-900">

    <!-- Header -->
    <header id="mainHeader" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent text-white">
        <div class="flex justify-between items-center p-4 md:p-6 max-w-7xl mx-auto">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center text-sm font-bold">LOGO</div>
                <div>
                    <p class="text-xs font-bold">JARAH III</p>
                    <p class="text-xs">KALURAHAN BANJAREJO</p>
                </div>
            </div>

            <!-- Tombol menu mobile -->
            <button id="toggleMenu" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Navigation -->
            <nav id="navLinks" class="hidden md:flex space-x-4 text-sm font-semibold">
                <a href="{{ url('/home') }}" class="nav-item hover:text-green-700">Home</a>
                <a href="{{ url('/profile') }}" class="nav-item hover:text-green-700">Profile Desa</a>
                <a href="{{ url('/infografis') }}" class="nav-item hover:text-green-700">Infografis</a>
                <a href="{{ url('/umkm') }}" class="nav-item hover:text-green-700">UMKM</a>
                <a href="{{ url('/berita') }}" class="nav-item text-green-700 font-bold">Berita</a>
                <a href="{{ url('/kontak') }}" class="nav-item hover:text-green-700">Kontak</a>
                <a href="{{ url('/admin/loginPage') }}" class="bg-yellow-300 text-sm px-4 py-1 rounded hover:bg-yellow-400">Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero Image with Judul & Tanggal -->
    <section class="relative h-[500px] bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $findBerita->foto_berita) }}');">
        <div class="absolute inset-0 hero-overlay"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-yellow-400">{{ $findBerita->judul_berita }}</h1>
            <p class="text-md text-yellow-300 mt-3">
                {{ \Carbon\Carbon::parse($findBerita->tanggal_berita)->translatedFormat('d F Y') }}
            </p>
        </div>
    </section>

    <!-- Deskripsi Berita -->
    <section class="py-12 px-6 md:px-16 bg-white text-justify max-w-5xl mx-auto">
        <div class="text-gray-800 text-md leading-relaxed">
            {!! nl2br(e($findBerita->deskripsi_berita)) !!}
        </div>

        <!-- Garis dan ikon sosial -->
        <div class="border-t border-gray-300 mt-10 pt-4 flex items-center justify-center gap-6">
            <a href="#" class="text-gray-600 hover:text-blue-600">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24H12.82V14.708h-3.24v-3.62h3.24V8.408c0-3.207 1.957-4.951 4.812-4.951 1.367 0 2.544.102 2.886.147v3.346h-1.981c-1.553 0-1.853.738-1.853 1.82v2.386h3.706l-.483 3.62h-3.223V24h6.318C23.406 24 24 23.406 24 22.676V1.325C24 .593 23.406 0 22.675 0z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-blue-400">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557a9.93 9.93 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195A4.918 4.918 0 0016.616 3c-2.724 0-4.93 2.206-4.93 4.93 0 .386.043.762.127 1.124C7.728 8.837 4.1 6.865 1.671 3.949a4.922 4.922 0 00-.666 2.475c0 1.708.87 3.216 2.188 4.099a4.903 4.903 0 01-2.23-.616c-.054 1.985 1.397 3.834 3.448 4.244a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.604 3.42A9.868 9.868 0 010 21.542 13.944 13.944 0 007.548 24c9.056 0 14.01-7.505 14.01-14.01 0-.213-.005-.426-.014-.637A10.025 10.025 0 0024 4.557z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-pink-500">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.2c3.2 0 3.6.012 4.9.07 1.3.06 2.2.27 2.7.46a5.4 5.4 0 011.9 1.2c.6.6 1 1.3 1.2 1.9.2.5.4 1.4.5 2.7.06 1.3.07 1.7.07 4.9s-.012 3.6-.07 4.9c-.06 1.3-.27 2.2-.46 2.7a5.4 5.4 0 01-1.2 1.9 5.4 5.4 0 01-1.9 1.2c-.5.2-1.4.4-2.7.5-1.3.06-1.7.07-4.9.07s-3.6-.012-4.9-.07c-1.3-.06-2.2-.27-2.7-.46a5.4 5.4 0 01-1.9-1.2 5.4 5.4 0 01-1.2-1.9c-.2-.5-.4-1.4-.5-2.7C2.212 15.6 2.2 15.2 2.2 12s.012-3.6.07-4.9c.06-1.3.27-2.2.46-2.7a5.4 5.4 0 011.2-1.9 5.4 5.4 0 011.9-1.2c.5-.2 1.4-.4 2.7-.5C8.4 2.212 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5.012-4.7.07-1.1.05-1.7.24-2.1.4a3.6 3.6 0 00-1.3.9 3.6 3.6 0 00-.9 1.3c-.16.4-.35 1-.4 2.1-.058 1.2-.07 1.6-.07 4.7s.012 3.5.07 4.7c.05 1.1.24 1.7.4 2.1a3.6 3.6 0 00.9 1.3 3.6 3.6 0 001.3.9c.4.16 1 .35 2.1.4 1.2.058 1.6.07 4.7.07s3.5-.012 4.7-.07c1.1-.05 1.7-.24 2.1-.4a3.6 3.6 0 001.3-.9 3.6 3.6 0 00.9-1.3c.16-.4.35-1 .4-2.1.058-1.2.07-1.6.07-4.7s-.012-3.5-.07-4.7c-.05-1.1-.24-1.7-.4-2.1a3.6 3.6 0 00-.9-1.3 3.6 3.6 0 00-1.3-.9c-.4-.16-1-.35-2.1-.4-1.2-.058-1.6-.07-4.7-.07zm0 4.6a5.2 5.2 0 110 10.4 5.2 5.2 0 010-10.4zm0 8.6a3.4 3.4 0 100-6.8 3.4 3.4 0 000 6.8zm6.4-8.8a1.2 1.2 0 110-2.4 1.2 1.2 0 010 2.4z"/>
                </svg>
            </a>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const header = document.getElementById("mainHeader");
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
</body>
</html>
