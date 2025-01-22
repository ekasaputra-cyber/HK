<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI KIDS - Beranda</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta property="og:title" content="HI KIDS OFFICIAL" />
    <meta property="og:description" content="Dapatkan perawatan medis terbaik untuk anak-anak Anda. Dokter anak berpengalaman siap memberikan layanan kesehatan dengan pendekatan yang ramah dan profesional." />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="HI KIDS" />
    <meta property="og:locale" content="id_ID" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('comWa/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdn.tailwindcss.com"></script> 
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-transparent w-full transition-all duration-300 ease-in-out">
        <nav class="container mx-auto flex items-center justify-between p-2">
          <div class="flex items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-24 md:w-36"></a>
          </div>
          
          <!-- Menu Button for Mobile -->
          <button id="menu-button" class="p-4 text-white text-xl bg-transparent rounded-md md:hidden">
            <i class="fas fa-bars"></i>
          </button>
          
          <!-- Desktop Navbar Links -->
          <div class="hidden md:flex space-x-6 font-semibold">
            <a href="{{ url('/') }}" class="text-lg text-white hover:text-teal-700">Beranda</a>
            <a href="{{ route('articles.index') }}" class="text-lg text-white hover:text-teal-700">Artikel</a>
            <a href="{{ url('/toko') }}" class="text-lg text-white hover:text-teal-700">Toko</a>
            <a href="{{ url('/comingsoon') }}" class="text-lg text-white hover:text-teal-700">Aplikasi</a>
            <a href="{{ url('/kontak') }}" class="text-lg text-white hover:text-teal-700">Kontak</a>
          </div>
        </nav>
    </header>

      <!-- Offcanvas Navbar (Mobile only) -->
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

    <!-- Main Content Section -->
    <div class="container-fluid">
        @yield('content') <!-- The content of each page will be injected here -->
    </div>

    <!-- Footer Section -->
      <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300">
    <div class="container mx-auto px-6 py-10">
      <!-- Footer Grid -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
  
        <!-- Logo and Description (Centered on Mobile) -->
        <div class="text-center md:text-left">
          <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-56 mb-4 mx-auto md:mx-0">
          <p class="text-sm leading-relaxed">
            Premium Baby Hampers, Perawatan Setara Merk Ternama, Terjangkau & Ekslusif
          </p>
        </div>
  
        <!-- Address and Contact (Hidden on Mobile) -->
        <div class="hidden md:block">
          <h2 class="font-semibold text-lg mb-3">Kontak Kami</h2>
          <ul class="space-y-3 text-sm">
            <li><i class="fas fa-envelope"></i> dokterkecil.disini@gmail.com</li>
            <li><i class="fas fa-map-marker-alt"></i> Jl. Soekarno Hatta Jl. Rembuksari No.1 A, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65113</li>
            <li>
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d293.7035519218207!2d112.62647266218119!3d-7.938001232745293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1733549588366!5m2!1sid!2sid" 
                width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </li>
          </ul>
        </div>
  
        <!-- Quick Links (Hidden on Mobile) -->
        <div class="hidden md:block">
          <h2 class="font-semibold text-lg mb-3">Quick Links</h2>
          <ul class="space-y-2 text-sm">
            <li><a href="{{ url('/') }}" class="hover:text-white">Beranda</a></li>
            <li><a href="{{ route('articles.index') }}" class="hover:text-white">Artikel</a></li>
            <li><a href="{{ url('/toko') }}" class="hover:text-white">Toko</a></li>
            <li><a href="{{ url('/kontak') }}" class="hover:text-white">Kontak</a></li>
          </ul>
        </div>
  
        <!-- Social Media (Centered on Mobile) -->
        <div class="text-center md:text-left">
          <h2 class="font-semibold text-lg mb-3">Ikuti Kami</h2>
          <div class="flex items-center justify-center md:justify-center space-x-6 text-2xl ">
            
            <!-- Shopee -->
            <a href="https://shopee.co.id/haikidsstore" class="hover:opacity-80 flex items-center">
              <img src="{{ asset('asset/img/shp.png') }}" alt="Shopee" class="w-16">
            </a>
            
            <!-- Instagram -->
            <a href="https://www.instagram.com/hikidss.id?igsh=Zm0xazduMHMxMHpz" class="text-gray-300 hover:text-white">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
            
            <!-- TikTok -->
            <a href="https://www.tiktok.com/@hikids.ofc?_t=8qylvv6qElE&_r=1" class="text-gray-300 hover:text-white">
              <i class="fa-brands fa-tiktok fa-lg"></i>
            </a>
          </div>
        </div>        
  
      </div>
  
      <!-- Copyright -->
      <div class="mt-10 border-t border-gray-700 pt-6 text-center">
        <p class="text-sm">&copy; 2024 HI KIDS OFFICIAL</p>
      </div>
    </div>
  </footer>

  <!--  -->
  <input class='chatMenu hidden' id='offchatMenu' type='checkbox'/>
  <label class='chatButton' for='offchatMenu'>
    <svg class='svg-1' viewBox='0 0 32 32'>
      <g>
        <path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path>
        <path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path>
      </g>
    </svg>
    <svg class='svg-2' viewBox='0 0 512 512'>
      <path d='M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3L233.4 256l-68.2 68.2c-6.2 6.2-6.2 16.4 0 22.6 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z'></path>
    </svg>
  </label>
  <div class='chatBox'>
      <div class='chatContent'>
        <div class='chatHeader'>
          <img src='{{ asset('asset/img/logo.png') }}' alt="HAIKIDS LOGO"/>
          <div class='chatTitle'>HAI KIDS <span>Kami Akan Segera Merespon</span></div>
        </div>
        <div class='chatText'>
          <span>Halo, Apa Ada Yang Bisa Kami Bantu?</span>
          <span class='typing'>...</span>
        </div>
      </div>
      <div class='chatStart'><input type='text' id='chatInput' placeholder='Tulis Pesan'/>
      <a href='javascript:void;' id='send-it'>Kirim</a>
      </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/comWa/javascript.js"></script>
  <script>
    // JavaScript untuk menambahkan perubahan warna pada navbar saat scroll
    const navbar = document.getElementById('navbar');
    const menuButton = document.getElementById('menu-button');
    const offcanvas = document.getElementById('offcanvas');
    const closeButton = document.getElementById('close-button');
    const offcanvasContent = document.getElementById('offcanvas-content');
    const navbarLinks = navbar.getElementsByTagName('a');
    const navbarbtn = document.getElementById('menu-button');
    
    // Show offcanvas on mobile
    menuButton.addEventListener('click', () => {
      offcanvas.classList.remove('hidden');
      setTimeout(() => {
        offcanvasContent.classList.remove('translate-x-full');
      }, 10);
    });

    // Close offcanvas on mobile
    closeButton.addEventListener('click', () => {
      offcanvasContent.classList.add('translate-x-full');
      setTimeout(() => {
        offcanvas.classList.add('hidden');
      }, 300);
    });

    // Optional: Close offcanvas if clicked outside
    offcanvas.addEventListener('click', (e) => {
      if (e.target === offcanvas) {
        closeButton.click();
      }
    });

    // Scroll event to apply blur effect on navbar when scrolling
    window.addEventListener('scroll', () => {
      if (window.scrollY > 0) {
        navbar.classList.add('backdrop-blur-lg', 'bg-transparent', 'shadow-2xl');

        for (let i = 0; i < navbarLinks.length; i++) {
          navbarLinks[i].classList.remove('text-white');
          navbarLinks[i].classList.add('text-teal-500');
        }

        navbarbtn.classList.remove('text-white');
        navbarbtn.classList.add('text-teal-500');
      } else {
        navbar.classList.remove('backdrop-blur-lg', 'bg-transparent', 'shadow-2xl');

        for (let i = 0; i < navbarLinks.length; i++) {
          navbarLinks[i].classList.remove('text-teal-500');
          navbarLinks[i].classList.add('text-white');
        }

        navbarbtn.classList.remove('text-teal-500');
        navbarbtn.classList.add('text-white');
      }
    });


    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah perilaku default

        const targetElement = document.querySelector(this.getAttribute('href'));

        // Melakukan scroll ke elemen yang dituju dengan efek smooth
        targetElement.scrollIntoView({
          behavior: 'smooth',  // Scroll dengan efek smooth
          block: 'start'       // Tempatkan elemen di bagian atas viewport
        });
      });
    });
  </script>
</body>
</html>
