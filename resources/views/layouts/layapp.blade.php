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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('comWa/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!--{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


</head>
<body style="background-color: #009990;font-family: 'Poppins', sans-serif;">

    <div class="container-fluid" >
        @yield('content') <!-- The content of each page will be injected here -->
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
    if (window.scrollY > 10) {
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('bg-teal-500', 'shadow-lg');
        
        // Ensure all navbar links remain white
        for (let i = 0; i < navbarLinks.length; i++) {
        navbarLinks[i].classList.remove('text-white');
        navbarLinks[i].classList.add('text-white'); // Keep text white
        }

        navbarbtn.classList.remove('text-white');
        navbarbtn.classList.add('text-white'); // Keep menu button text white
    } else {
        navbar.classList.remove('bg-teal-500', 'shadow-lg');
        navbar.classList.add('bg-transparent');
        
        // Ensure all navbar links remain white
        for (let i = 0; i < navbarLinks.length; i++) {
        navbarLinks[i].classList.remove('text-white');
        navbarLinks[i].classList.add('text-white'); // Keep text white
        }

        navbarbtn.classList.remove('text-white');
        navbarbtn.classList.add('text-white'); // Keep menu button text white
    }
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah perilaku default

        const targetElement = document.querySelector(this.getAttribute('href'));

        // Melakukan scroll ke elemen yang dituju dengan efek smooth
        targetElement.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
        });
    });
    });
  </script>
</body>
</html>
