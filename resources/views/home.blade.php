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
        <a href="#" class="nav-item">Home</a>
        <a href="#" class="nav-item">Profile Desa</a>
        <a href="#" class="nav-item">Infografis</a>
        <a href="#" class="nav-item">Berita</a>
        <a href="#" class="nav-item">Kontak</a>
        <a href="{{ route('admin.loginPage') }}"
            class="bg-yellow-300 text-sm px-4 py-1 rounded hover:bg-yellow-400">Login</a>
        </nav>
    </div>

    <!-- Menu dropdown mobile -->
    <div id="mobileNav" class="md:hidden hidden flex-col space-y-3 px-6 pb-4 bg-white text-sm font-semibold text-black">
        <a href="#">Home</a>
        <a href="#">Profile Desa</a>
        <a href="#">Infografis</a>
        <a href="#">Berita</a>
        <a href="#">Kontak</a>
        <a href="{{ url('/admin.loginPage') }}"
        class="inline-block bg-yellow-300 px-4 py-1 rounded hover:bg-yellow-400">Login</a>
    </div>
    </header>

    <!-- Hero Carousel -->
    <section id="carousel" class="relative">
        <!-- Wrapper Gambar -->
        <div class="relative h-[550px] overflow-hidden">
            <div class="slide absolute inset-0 transition-opacity duration-700 opacity-0 z-0">
                <img src="{{ asset('storage/Assets/loginBackground.jpeg') }}" class="w-full h-full object-cover" />
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

        <div class="grid grid-cols-2 gap-6 max-w-md mx-auto">
            <!-- Card 1 -->
            <a href="#" class="bg-[#77784A] hover:bg-[#5f613c] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/fluency/48/home.png" class="w-10 h-10 mb-2" alt="Profile Desa">
                <span>Profile Desa</span>
            </a>
            <!-- Card 2 -->
            <a href="#" class="bg-[#77784A] hover:bg-[#5f613c] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/external-microdots-premium-microdot-graphic/64/external-data-chart-graph-microdots-premium-microdot-graphic-2.png" 
                class="w-10 h-10 mb-2" alt="Infografis">
                <span>Infografis</span>
            </a>
            <!-- Card 3 -->
            <a href="#" class="bg-[#77784A] hover:bg-[#5f613c] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/plasticine/100/news.png" class="w-10 h-10 mb-2" alt="Berita">
                <span>Berita</span>
            </a>
            <!-- Card 4 -->
            <a href="#" class="bg-[#77784A] hover:bg-[#5f613c] text-white p-6 rounded-lg flex flex-col items-center">
                <img src="https://img.icons8.com/stickers/100/contact-card.png" class="w-10 h-10 mb-2" alt="Kontak">
                <span>Kontak</span>
            </a>
        </div>
    </section>

    <section class="bg-[#77784A] py-12 text-white text-center">
    <h2 class="text-3xl font-bold mb-8">BERITA</h2>
        <div class="relative max-w-7xl mx-auto px-4">
        <button id="newsPrev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-[#77784A] p-2 rounded-full z-30">
            &#8592;
        </button>

        <div id="newsCarousel" class="relative flex justify-center items-center h-[420px] w-full overflow-hidden">
            <!-- Card Berita 1 -->
            <div class="news-card absolute w-72 transition-all duration-500 ease-in-out bg-white text-gray-800 p-4 rounded-lg shadow">
            <img src="https://via.placeholder.com/300x160" class="rounded-lg h-40 w-full object-cover mb-2">
            <p class="text-xs text-gray-500">1 Juni 2025</p>
            <h3 class="font-bold">Kegiatan Rasulan Di Kecamatan Gunung Kidul</h3>
            <p class="text-sm mt-1">Pada tanggal 1 Juni 2025, diselenggarakan program ...</p>
            <a href="#" class="text-sm text-green-700 font-semibold">Baca selengkapnya →</a>
            </div>
            <!-- Card Berita 2 -->
            <div class="news-card absolute w-72 transition-all duration-500 ease-in-out bg-white text-gray-800 p-4 rounded-lg shadow">
            <img src="https://via.placeholder.com/300x160" class="rounded-lg h-40 w-full object-cover mb-2">
            <p class="text-xs text-gray-500">19 Maret 2025</p>
            <h3 class="font-bold">Rapat Panitia HUT RI Kapanewon Tanjungsari</h3>
            <p class="text-sm mt-1">Pada 19 Maret 2025, dilaksanakan rapat panitia ...</p>
            <a href="#" class="text-sm text-green-700 font-semibold">Baca selengkapnya →</a>
            </div>
            <!-- Card Berita 3 -->
            <div class="news-card absolute w-72 transition-all duration-500 ease-in-out bg-white text-gray-800 p-4 rounded-lg shadow">
            <img src="https://via.placeholder.com/300x160" class="rounded-lg h-40 w-full object-cover mb-2">
            <p class="text-xs text-gray-500">5 Februari 2025</p>
            <h3 class="font-bold">Upaya Pak Henrikus untuk membudidayakan jamur</h3>
            <p class="text-sm mt-1">Pak Henrikus merupakan salah satu pengusaha UMKM ...</p>
            <a href="#" class="text-sm text-green-700 font-semibold">Baca selengkapnya →</a>
            </div>
        </div>

        <button id="newsNext" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-[#77784A] p-2 rounded-full z-30">
            &#8594;
        </button>

        <p class="text-sm text-white mt-4">Berita terbaru tentang Padukuhan Jarah III bisa dibaca disini</p>
        </div>
    </section>
    
    <section class="bg-white py-12 px-4 md:px-8">
    <div class="max-w-5xl mx-auto text-center">
        <div class="flex items-center justify-center mb-4 space-x-3">
        <img src="https://img.icons8.com/ios-filled/50/4a4a4a/marker.png" class="w-6 h-6" alt="Location Icon">
        <h2 class="text-3xl font-bold text-green-800">PETA JARAH III</h2>
        </div>
        <p class="text-sm text-gray-600 mb-6">Menampilkan Peta Desa Jarah III</p>
        <div class="w-full h-[450px] rounded-xl overflow-hidden shadow-lg border border-gray-200">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.242173635606!2d110.6484506143213!3d-7.871349978129355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ba86a6ebbb139%3A0xc6c4e81895a66c62!2sDusun%20Jarah%20III%2C%20Banjarejo%2C%20Tanjungsari%2C%20Gunungkidul%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1720104408206!5m2!1sid!2sid"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
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
