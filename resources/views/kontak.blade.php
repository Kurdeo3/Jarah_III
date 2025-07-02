<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UMKM - Padukuhan Jarah III</title>
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
    </style>
</head>
<body class="font-sans bg-white text-gray-900">
    <!-- Header / Navbar -->
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
                <a href="{{ url('/umkm') }}" class="nav-item hover:text-green-700">UMKM</a>
                <a href="{{ url('/berita') }}" class="nav-item hover:text-green-700">Berita</a>
                <a href="{{ url('/kontak') }}" class="nav-item text-green-700 font-bold">Kontak</a>
                <a href="{{ url('/admin/loginPage') }}" class="bg-yellow-300 text-sm px-4 py-1 rounded hover:bg-yellow-400">Login</a>
            </nav>
        </div>

        <!-- Menu dropdown mobile -->
        <div id="mobileNav" class="md:hidden hidden flex-col space-y-3 px-6 pb-4 bg-white text-sm font-semibold text-black">
            <a href="{{ url('/home') }}" class="hover:text-green-700">Home</a>
            <a href="{{ url('/profile') }}" class="hover:text-green-700">Profile Desa</a>
            <a href="{{ url('/infografis') }}" class="hover:text-green-700">Infografis</a>
            <a href="{{ url('/umkm') }}" class="hover:text-green-700">UMKM</a>
            <a href="{{ url('/berita') }}" class="hover:text-green-700">Berita</a>
            <a href="{{ url('/kontak') }}" class="text-green-700 font-bold">Kontak</a>
            <a href="{{ url('/admin/loginPage') }}" class="inline-block bg-yellow-300 px-4 py-1 rounded hover:bg-yellow-400">Login</a>
        </div>
    </header>

    <section class="relative h-[500px] md:h-[440px] bg-cover bg-center flex items-center justify-center px-4 md:px-12"
        style="background-image: url('{{ asset('storage/Assets/loginBackground.jpeg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        
        <div class="relative z-10 max-w-5xl w-full flex flex-col md:flex-row justify-between items-start md:items-center text-white">
            <div class="md:w-2/3 mb-4 md:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-2 text-yellow-400">KONTAK</h2>
                <p class="text-sm md:text-base leading-relaxed text-yellow-400">
                    Silahkan menekan tombol disamping untuk menghubungi kami via WhatsApp apabila terdapat pertanyaan, saran, 
                    atau kritis terkait informasi mengenai Padukuhan Jarah III
                </p>
            </div>

            <div class="md:w-1/3 flex justify-center md:justify-end">
                <a href="https://wa.me/085856474432" target="_blank"
                class="flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-green-900 font-semibold px-4 py-2 rounded-full shadow-lg transition duration-200">
                    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp Icon" class="w-6 h-6"/>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#77784A] text-white pt-10 pb-0">
        <div class="max-w-7xl mx-auto px-6 md:flex md:justify-between">
            <!-- Logo dan Info -->
            <div class="mb-6 md:mb-0 md:w-1/3">
                <div class="flex items-center space-x-4 mb-3">
                    <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-800 text-sm">LOGO</div>
                    <div>
                        <h3 class="text-xl font-bold">JARAH III</h3>
                        <p class="text-base font-semibold">KALURAHAN BANJAREJO</p>
                    </div>
                </div>
                <p class="text-sm">
                    Desa Jarah III, Kalurahan Banjarejo, Kapanewon Tanjungsari Kabupaten Gunungkidul
                </p>
            </div>

            <!-- Navigasi -->
            <div class="md:w-1/3 mb-6 md:mb-0">
                <h4 class="font-semibold text-sm mb-2">Navigasi</h4>
                <ul class="text-sm space-y-1">
                    <li><a href="#" class="hover:underline">Beranda</a></li>
                    <li><a href="#" class="hover:underline">Profile Desa</a></li>
                    <li><a href="#" class="hover:underline">Infografis</a></li>
                    <li><a href="#" class="hover:underline">Berita</a></li>
                    <li><a href="#" class="hover:underline">Kontak</a></li>
                </ul>
            </div>

            <!-- Hubungi Kami -->
            <div class="md:w-1/3">
                <h4 class="font-semibold text-sm mb-2">Hubungi Kami</h4>
                <p class="text-sm">08546227XXXX</p>
                <p class="text-sm">jarah3@gmail.com</p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="flex flex-col md:flex-row justify-between items-center bg-gray-100 text-[#77784A] text-sm px-12 py-3 mt-5 font-semibold space-y-2 md:space-y-0">
            <p>© 2025 Padukuhan Jarah III. Seluruh Hak Cipta Dilindungi.</p>
            <p>Dikembangkan oleh Kelompok 33 KKN 87 JARAH III UAJY</p>
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