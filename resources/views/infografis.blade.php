<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Infografis - Padukuhan Jarah III</title>
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
                <a href="{{ url('/profile') }}" class="nav-item hover:text-green-700 font-bold">Profile Desa</a>
                <a href="{{ url('/infografis') }}" class="nav-item text-green-700">Infografis</a>
                <a href="{{ url('/umkm') }}" class="nav-item hover:text-green-700">UMKM</a>
                <a href="{{ url('/berita') }}" class="nav-item hover:text-green-700">Berita</a>
                <a href="{{ url('/kontak') }}" class="nav-item hover:text-green-700">Kontak</a>
                <a href="{{ url('/admin/loginPage') }}" class="bg-yellow-300 text-sm px-4 py-1 rounded hover:bg-yellow-400">Login</a>
            </nav>
        </div>

        <!-- Menu dropdown mobile -->
        <div id="mobileNav" class="md:hidden hidden flex-col space-y-3 px-6 pb-4 bg-white text-sm font-semibold text-black">
            <a href="{{ url('/home') }}" class="hover:text-green-700">Home</a>
            <a href="{{ url('/profile') }}" class="hover:text-green-700">Profile Desa</a>
            <a href="{{ url('/infografis') }}" class="text-green-700 font-bold">Infografis</a>
            <a href="{{ url('/umkm') }}" class="hover:text-green-700">UMKM</a>
            <a href="{{ url('/berita') }}" class="hover:text-green-700">Berita</a>
            <a href="{{ url('/kontak') }}" class="hover:text-green-700">Kontak</a>
            <a href="{{ url('/admin/loginPage') }}" class="inline-block bg-yellow-300 px-4 py-1 rounded hover:bg-yellow-400">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('storage/Assets/loginBackground.jpeg');">
        <div class="absolute inset-0 hero-overlay"></div>
        <div class="absolute inset-0 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <h1 class="text-5xl font-bold text-yellow-400 text-center">INFOGRAFIS</h1>
            <h3 class="text-3xl font-bold text-yellow-400 text-center mt-2">Informasi seputar data demografi Jarah III</h3>
        </div>
        </div>
    </section>

    <!-- Jumlah Penduduk Section -->
    <section class="py-16 px-4 md:px-8 vision-mission-bg">
        <div class="max-w-xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-10 text-white">JUMLAH PENDUDUK</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-center">
                <!-- Total Penduduk -->
                <div class="bg-[#F2ECBA] text-black rounded-xl shadow-md py-6 px-4">
                    <div class="flex flex-col items-center">
                        <img src="https://img.icons8.com/ios-filled/50/000000/user-group-man-man.png" class="w-10 h-10 mb-2" alt="Total Penduduk" />
                        <p class="font-bold">Total Penduduk</p>
                        <p class="text-3xl font-bold text-green-900">{{ $totalPenduduk }}</p>
                    </div>
                </div>

                <!-- Laki-laki -->
                <div class="bg-[#F2ECBA] text-black rounded-xl shadow-md py-6 px-4">
                    <div class="flex flex-col items-center">
                        <img src="https://img.icons8.com/ios-filled/50/000000/user-male.png" class="w-10 h-10 mb-2" alt="Laki-laki" />
                        <p class="font-bold">Laki-laki</p>
                        <p class="text-3xl font-bold text-green-900">{{ $lakiLaki }}</p>
                    </div>
                </div>

                <!-- Perempuan -->
                <div class="bg-[#F2ECBA] text-black rounded-xl shadow-md py-6 px-4">
                    <div class="flex flex-col items-center">
                        <img src="https://img.icons8.com/ios-filled/50/000000/user-female.png" class="w-10 h-10 mb-2" alt="Perempuan" />
                        <p class="font-bold">Perempuan</p>
                        <p class="text-3xl font-bold text-green-900">{{ $perempuan }}</p>
                    </div>
                </div>
            </div>

            <p class="text-sm text-gray-600 mt-6 font-medium text-white">Data Kependudukan ini terupdate sejak <span class="font-semibold">01-01-2026</span></p>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="py-16 px-4 md:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Vision -->
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-8 shadow-xl">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-16 h-16 bg-[#77784A] rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-black mb-4">VISI<br>JARAH III</h3>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg italic">
                        "Terwujudnya Padukuhan Jarah III yang mandiri, sejahtera, dan berdaya saing berbasis potensi lokal dan nilai-nilai kebersamaan."
                    </p>
                </div>

                <!-- Mission -->
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-8 shadow-xl">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-16 h-16 bg-[#77784A] rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-black mb-4">MISI<br>JARAH III</h3>
                        </div>
                    </div>
                    <div class="space-y-4 text-gray-700">
                        <div class="flex items-start space-x-3">
                            <span class="bg-[#77784A] text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-1">1</span>
                            <p class="leading-relaxed">Meningkatkan kualitas hidup masyarakat melalui penguatan sektor pertanian, perkebunan, kelautan, dan UMKM.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-[#77784A] text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-1">2</span>
                            <p class="leading-relaxed">Mendorong kemandirian ekonomi warga dengan pengembangan usaha kreatif dan pemanfaatan potensi lokal secara berkelanjutan.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-[#77784A] text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-1">3</span>
                            <p class="leading-relaxed">Memperkuat nilai-nilai sosial budaya dan gotong royong sebagai dasar dalam membangun solidaritas antarwarga.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-[#77784A] text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-1">4</span>
                            <p class="leading-relaxed">Mengembangkan tata kelola padukuhan yang transparan dan partisipatif untuk menciptakan pelayanan masyarakat yang lebih baik.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-[#77784A] text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-1">5</span>
                            <p class="leading-relaxed">Meningkatkan kapasitas sumber daya manusia (SDM) melalui pelatihan, pendidikan, dan pembinaan masyarakat secara berkala.</p>
                        </div>
                    </div>
                </div>
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