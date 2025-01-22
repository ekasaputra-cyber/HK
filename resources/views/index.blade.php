@extends('layouts.home') <!-- Menggunakan layout app.blade.php -->

@section('content') <!-- Bagian konten halaman index -->
    <!-- Hero Section -->
  <style>
    .hero-bg {
      background-image: url('/asset/img/bg-hero-min.jpg'); 
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
  <section class=" hero-bg h-screen flex items-center text-white relative">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="pt-60 relative z-10 flex justify-start items-center px-4 md:px-16">
      <div class="text-left max-w-xl">
        <h1 class="md:text-5xl text-3xl font-bold mb-4">Langkah Kecil Mencegah Dampak Besar</h1>
        <p class="mb-8 md:text-lg text-sm font-semibold">Kami hadir untuk mendukung perjalanan dalam mengatasi masalah Kesehatan dan mencapai kesehatan bersama</p>
        <a href="#" class="text-white bg-cyan-500 hover:bg-cyan-600 px-6 py-3 rounded-lg ">Mulai Sekarang</a>
      </div>
    </div>
  </section>
      

  <!-- Features Section -->
  <section class="bg-white py-16 text-justify">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Kenali Layanan Kami untuk Anak Anda</h2>
        <p class="text-gray-700 text-lg mb-8 text-justify">
          Hi Kids menawarkan berbagai layanan yang mendukung tumbuh kembang anak secara optimal, mulai dari edukasi kesehatan, konsultasi dengan profesional, hingga produk berkualitas yang aman untuk anak. Kami berkomitmen untuk memberikan informasi dan dukungan terbaik bagi orang tua untuk menjaga kesehatan dan kesejahteraan anak.
        </p>
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="p-6 bg-cyan-50 rounded-lg shadow hover:shadow-lg hover:scale-105 transition duration-300">
            <h3 class="text-xl font-semibold text-cyan-600">Konsultasi Kesehatan Anak</h3>
            <p class="text-gray-700 mt-2 text-justify">Dapatkan konsultasi langsung dengan profesional berpengalaman dalam kesehatan anak. Kami siap memberikan edukasi tentang pola hidup sehat, gizi, dan langkah pencegahan penyakit untuk anak Anda.</p>
          </div>
    
          <div class="p-6 bg-cyan-50 rounded-lg shadow hover:shadow-lg hover:scale-105 transition duration-300">
            <h3 class="text-xl font-semibold text-cyan-600">Edukasi Kesehatan Anak</h3>
            <p class="text-gray-700 mt-2 text-justify">Sebagai platform edukasi, kami memberikan informasi lengkap tentang pentingnya perawatan kesehatan, pola makan sehat, serta tips parenting yang berguna bagi orang tua. Konten kami interaktif, berbasis fakta, dan dirancang untuk mendukung orang tua dalam merawat anak-anak mereka.</p>
          </div>
    
          <div class="p-6 bg-cyan-50 rounded-lg shadow hover:shadow-lg hover:scale-105 transition duration-300">
            <h3 class="text-xl font-semibold text-cyan-600">Marketplace Kebutuhan Anak</h3>
            <p class="text-gray-700 mt-2 text-justify">Hi Kids juga menyediakan marketplace kebutuhan anak berkualitas, dari paket baby care hingga produk aman dan ramah lingkungan. Memudahkan orang tua untuk mendapatkan barang yang dibutuhkan si kecil, baik untuk kesehatan maupun perkembangan mereka.</p>
          </div>
        </div>
    
        <p class="text-gray-700 text-lg mt-8 text-justify">Kami percaya setiap anak berhak mendapatkan perawatan yang terbaik dan tumbuh kembang yang optimal. Dengan pendekatan yang penuh kasih sayang, edukasi yang tepat, dan produk berkualitas, kami memastikan bahwa orang tua mendapatkan dukungan yang mereka butuhkan untuk merawat buah hati mereka dengan cara yang terbaik</p>
        <a href="{{ url('/tentang') }}" class="text-white bg-cyan-500 hover:bg-cyan-600 hover:scale-105 transition-all duration-300 ease-in-out rounded-full px-6 py-3 mt-6 inline-block font-semibold text-sm sm:text-base md:text-lg">Kenali Kami Lebih Jauh <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </section>


  <!-- artikel -->
<section id="articles" class="py-16 bg-white">
  <div class="container mx-auto px-6 text-center">
    <!-- Judul Halaman Artikel -->
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-8">Artikel Terbaru</h2>
    <p class="text-base sm:text-lg text-gray-700 mb-12 text-center">
      Temukan berbagai artikel tentang kesehatan anak, tips parenting, dan informasi medis yang bermanfaat bagi Anda dan buah hati.
    </p>

    <!-- Daftar Artikel -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
      @foreach($latestArticles as $article)
      <div class="bg-cyan-50 rounded-lg shadow-md hover:shadow-lg hover:translate-y-[-10px] transition-transform duration-300 overflow-hidden">
        <img src="{{ asset('storage/' . $article->image) }}" alt="Resep MPASI: Tahu Ayam" class="w-full h-56 object-cover aspect-ratio-3/2">
        <div class="p-6 text-start">
          <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-4">{{ $article->title }}</h3>
          <a href="{{ route('articles.show', $article->slug) }}" class="text-cyan-600 hover:text-cyan-700 font-semibold hover:underline transition duration-300">Baca Selengkapnya</a>
        </div>
      </div>
      @endforeach
    </div>

    <a href="{{ route('articles.index') }}" class="text-white bg-cyan-500 hover:bg-cyan-600 hover:scale-105 transition-all duration-300 ease-in-out rounded-full px-6 py-3 mt-6 inline-block font-semibold text-sm sm:text-base md:text-lg">
      Lihat Artikel Lainnya <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</section>




  <!-- Call to Action Section -->
    <section id="cta" class="bg-cyan-600 py-16">
      <div class="container mx-auto px-6 text-center text-white">
        <h2 class="text-xl md:text-3xl font-bold mb-4">Dapatkan Tips dan Info Kesehatan Anak Terbaru</h2>
        <p class="text-base md:text-lg mb-8">
          Daftar untuk menerima tips kesehatan dan informasi medis terkini untuk mendukung perkembangan anak Anda.
        </p>
        <a href="#daftar-info" class="bg-white text-cyan-600 px-6 py-3 rounded-lg shadow-lg hover:bg-cyan-50 transition duration-300">
          Dapatkan Informasi Kesehatan
        </a>
      </div>
    </section>


@endsection
