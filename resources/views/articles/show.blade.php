<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $article->title }}</title>
  <meta property="og:title" content="{{ $article->title }}" />
  <meta property="og:description" content="{{ Str::limit($article->content, 150) }}" />
  <meta property="og:image" content="{{ asset('storage/' . $article->image) }}" />
  <meta property="og:url" content="{{ route('articles.show', $article->slug) }}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Hi Kids" />
  <meta property="og:locale" content="id_ID" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-100 font-sans">

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-6 max-w-7xl">

    <!-- Header Navigation -->
    <header class="bg-gray-200 py-4 mb-6 rounded-lg">
        <nav class="container mx-auto px-2 flex flex-wrap items-center text-xs lg:text-base text-gray-600 space-x-4 text-center lg:text-left">
          <a href="/" class="hover:underline">Beranda</a>
          <span>/</span>
          <a href="{{ route('articles.index') }}" class="hover:underline">Artikel</a>
          <span>/</span>
          <p>{{ $article->title }}</p>
        </nav>
    </header>

    <div class="flex flex-col lg:flex-row gap-6">

      <!-- Artikel -->
      <article class="lg:w-3/4 w-full bg-white shadow-md rounded-lg p-6 mb-6 lg:mb-0">
        <h1 class="text-2xl lg:text-4xl font-bold text-gray-800 mb-4">
          {{ $article->title }}
        </h1>
        <div class="flex flex-wrap items-center text-sm text-gray-600 mb-6">
            <span class="mr-4 mb-2 lg:mb-0">Kategori: Pertumbuhan</span>
            <span class="mr-4 mb-2 lg:mb-0">5 menit baca</span>
            <span>{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</span>
        </div>
        <!-- Gambar Artikel -->
        @if($article->image)
          <img src="{{ asset('storage/' . $article->image) }}" alt="Gambar Artikel" class="rounded-lg mb-6 w-full object-cover">
        @endif

        <!-- Konten Artikel -->
        <div class="text-gray-900 text-lg mb-6">
            {!! nl2br(strip_tags($article->content, '<p><b><i><strong><em><a><img><ul><li>')) !!}
        </div>
      </article>

      <!-- Sidebar -->
      <aside class="lg:w-1/4 lg:ml-6 w-full">
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Berlangganan Artikel</h3>
          <input type="email" placeholder="Ketik email" class="w-full p-3 border border-gray-300 rounded mb-2">
          <button class="w-full bg-blue-500 text-white py-3 rounded hover:bg-blue-600 transition">
            Berlangganan
          </button>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Topik Terkini</h3>
          <div class="flex flex-wrap gap-2">
            <span class="bg-gray-200 text-sm py-1 px-3 rounded">Pertumbuhan</span>
            <span class="bg-gray-200 text-sm py-1 px-3 rounded">Emosi</span>
            <span class="bg-gray-200 text-sm py-1 px-3 rounded">Parenting</span>
          </div>
        </div>
      </aside>

    </div>

  </main>

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
              <li><a href="/" class="hover:text-white">Beranda</a></li>
              <li><a href="#" class="hover:text-white">Artikel</a></li>
              <li><a href="store.html" class="hover:text-white">Toko</a></li>
              <li><a href="contact.html" class="hover:text-white">Kontak</a></li>
          </ul>
        </div>
  
        <!-- Social Media (Centered on Mobile) -->
        <div class="text-center md:text-left">
          <h2 class="font-semibold text-lg mb-3">Ikuti Kami</h2>
          <div class="flex items-center justify-center md:justify-center space-x-6 text-2xl ">
              <!-- Facebook -->
              <a href="https://facebook.com/" class="text-gray-300 hover:text-white">
              <i class="fab fa-facebook fa-lg"></i>
              </a>
              
              <!-- Shopee -->
              <a href="https://shopee.co.id/" class="hover:opacity-80 flex items-center">
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

</body>

</html>
