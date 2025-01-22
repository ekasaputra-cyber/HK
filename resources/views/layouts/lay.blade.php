<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HI KIDS')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta property="og:title" content="HI KIDS OFFICIAL" />
    <meta property="og:description" content="Dapatkan perawatan medis terbaik untuk anak-anak Anda. Dokter anak berpengalaman siap memberikan layanan kesehatan dengan pendekatan yang ramah dan profesional." />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="HI KIDS" />
    <meta property="og:locale" content="id_ID" />
    <!--{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}-->
    <link rel="stylesheet" href="{{ asset('comWa/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body style="background-color: #009990;font-family: 'Poppins', sans-serif;">
    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-transparent w-full transition-all duration-300 ease-in-out">
        <nav class="container mx-auto flex items-center justify-between p-2">
            <div class="flex items-center">
                <a href="{{ url('/') }}"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-24 md:w-36"></a>
            </div>
            <button id="menu-button" class="p-4 text-white text-xl bg-transparent rounded-md md:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <div class="hidden md:flex space-x-6 font-semibold">
                <a href="{{ url('/') }}" class="text-lg text-white hover:text-teal-700">Beranda</a>
                <a href="{{ route('articles.index') }}" class="text-lg text-white hover:text-teal-700">Artikel</a>
                <a href="{{ url('/toko') }}" class="text-lg text-white hover:text-teal-700">Toko</a>
                <a href="{{ url('/comingsoon') }}" class="text-lg text-white hover:text-teal-700">Aplikasi</a>
                <a href="{{ url('/kontak') }}" class="text-lg text-white hover:text-teal-700">Kontak</a>
            </div>
        </nav>
    </header>

    <div id="offcanvas" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-50 hidden">
        <div class="absolute top-0 right-0 h-full bg-white w-64 transform translate-x-full transition-transform duration-300 ease-in-out" id="offcanvas-content">
            <div class="flex justify-between p-4">
                <span class="text-xl font-semibold">Menu</span>
                <button id="close-button" class="text-xl">&times;</button>
            </div>
            <ul class="p-4 space-y-4">
                <li><a href="{{ url('/') }}" class="block text-lg text-gray-700 hover:text-teal-700">Beranda</a></li>
                <li><a href="{{ route('articles.index') }}" class="block text-lg text-gray-700 hover:text-teal-700">Artikel</a></li>
                <li><a href="{{ url('/toko') }}" class="block text-lg text-gray-700 hover:text-teal-700">Toko</a></li>
                <li><a href="{{ url('/comingsoon') }}" class="block text-lg text-gray-700 hover:text-teal-700">Aplikasi</a></li>
                <li><a href="{{ url('/kontak') }}" class="block text-lg text-gray-700 hover:text-teal-700">Kontak</a></li>
            </ul>
        </div>
    </div>

    <div class="container-fluid">
        @yield('content') <!-- Konten dinamis halaman detail produk -->
    </div>

    <footer class="bg-gray-900 text-gray-300">
        <div class="container mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="text-center md:text-left">
                    <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-56 mb-4 mx-auto md:mx-0">
                    <p class="text-sm leading-relaxed">
                        Premium Baby Hampers, Perawatan Setara Merk Ternama, Terjangkau & Ekslusif
                    </p>
                </div>
                <div class="hidden md:block">
                    <h2 class="font-semibold text-lg mb-3">Kontak Kami</h2>
                    <ul class="space-y-3 text-sm">
                        <li><i class="fas fa-envelope"></i> dokterkecil.disini@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Soekarno Hatta Jl. Rembuksari No.1 A, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65113</li>
                        <li>
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=..." 
                                width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </li>
                    </ul>
                </div>
                <div class="hidden md:block">
                  <h2 class="font-semibold text-lg mb-3">Quick Links</h2>
                  <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Beranda</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-white">Artikel</a></li>
                    <li><a href="{{ url('/toko') }}" class="hover:text-white">Toko</a></li>
                    <li><a href="{{ url('/kontak') }}" class="hover:text-white">Kontak</a></li>
                  </ul>
                </div>
                <div class="text-center md:text-left">
                    <h2 class="font-semibold text-lg mb-3">Ikuti Kami</h2>
                    <div class="flex items-center justify-center md:justify-center space-x-6 text-2xl">
                        <a href="https://shopee.co.id/haikidsstore" class="hover:opacity-80 flex items-center">
                            <img src="{{ asset('asset/img/shp.png') }}" alt="Shopee" class="w-16">
                        </a>
                        <a href="https://www.instagram.com/hikidss.id" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="https://www.tiktok.com/@hikids.ofc" class="text-gray-300 hover:text-white">
                            <i class="fab fa-tiktok fa-lg"></i>
                        </a>
                    </div>
                </div>        
            </div>
            <div class="mt-10 border-t border-gray-700 pt-6 text-center">
                <p class="text-sm">&copy; 2024 HI KIDS OFFICIAL</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/comWa/javascript.js"></script>
    <script>
        const navbar = document.getElementById('navbar');
        const menuButton = document.getElementById('menu-button');
        const offcanvas = document.getElementById('offcanvas');
        const closeButton = document.getElementById('close-button');
        const offcanvasContent = document.getElementById('offcanvas-content');
        const navbarLinks = navbar.getElementsByTagName('a');

        menuButton.addEventListener('click', () => {
            offcanvas.classList.remove('hidden');
            setTimeout(() => {
                offcanvasContent.classList.remove('translate-x-full');
            }, 10);
        });

        closeButton.addEventListener('click', () => {
            offcanvasContent.classList.add('translate-x-full');
            setTimeout(() => {
                offcanvas.classList.add('hidden');
            }, 300);
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                navbar.classList.add('backdrop-blur-lg', 'bg-transparent', 'shadow-2xl');
                for (let i = 0; i < navbarLinks.length; i++) {
                    navbarLinks[i].classList.remove('text-white');
                    navbarLinks[i].classList.add('text-white');
                }
            } else {
                navbar.classList.remove('backdrop-blur-lg', 'bg-transparent', 'shadow-2xl');
                for (let i = 0; i < navbarLinks.length; i++) {
                    navbarLinks[i].classList.remove('text-white');
                    navbarLinks[i].classList.add('text-white');
                }
            }
        });
    </script>
</body>
</html>
