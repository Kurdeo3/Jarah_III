<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Padukuhan Jarah III</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen flex items-center justify-center overflow-hidden">

    <!-- Background image + overlay hijau -->
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center" 
            style="background-image: url('{{ asset('storage/Assets/loginBackground.jpeg') }}');">
        </div>
        <div class="absolute inset-0" style="background-color: #77784A; opacity: 0.7;"></div>
    </div>

    <!-- Konten utama -->
    <div class="relative z-10 bg-white bg-opacity-90 shadow-lg flex w-[850px] rounded-lg overflow-hidden">
        <!-- Kiri: Gambar dan Teks -->
        <div class="w-1/2 relative">
            <img src="{{ asset('storage/Assets/loginBackground.jpeg') }}" alt="Padukuhan Jarah III" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-60 p-4 text-white text-sm">
                <p class="font-bold text-lg">Website<br>Padukuhan Jarah III</p>
                <p class="mt-2">Selamat datang di website Padukuhan Jarah III<br>Silahkan login sebagai Admin untuk mengelola data website</p>
            </div>
        </div>

        <!-- Kanan: Form Login -->
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <h2 class="text-green-800 text-2xl font-bold mb-1">Halo!</h2>
            <p class="text-sm text-gray-600 mb-6">Selamat Datang Kembali</p>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" value="{{ old('username') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-green-600">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-green-600">
                </div>

                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-2 rounded">
                        Login
                    </button>
                </div>
            </form>

            <a href="/home" class="block text-center text-sm text-green-800 hover:underline mt-4 bg-yellow-100 px-4 py-2 rounded">
                Kembali ke Beranda
            </a>
        </div>
    </div>

</body>
</html>
