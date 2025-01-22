@extends('layouts.app') <!-- Menggunakan layout app.blade.php -->

@section('title', 'HI KIDS - Tentang Kami')

@section('content') <!-- Bagian konten halaman index -->
<section id="about" class="py-16 text-white mt-32">
    <div class="container mx-auto px-6 text-center">
      <!-- Judul Halaman -->
      <h2 class="text-3xl font-bold  mb-8">Tentang Kami</h2>
      <p class="text-lg mb-8">
         Hi Kids adalah platform edukasi kesehatan anak yang berkomitmen untuk mendukung tumbuh kembang anak secara optimal. Dengan pendekatan yang penuh kasih sayang dan profesional, kami menyediakan layanan kesehatan anak, informasi edukatif, serta marketplace kebutuhan anak berkualitas. Kami juga memastikan produk yang aman dan ramah lingkungan untuk mendukung perawatan anak yang lebih baik.
      </p>
  
      <!-- Grid untuk Visi, Misi, dan Tim -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Visi Kami -->
        <div class="p-6 bg-blue-50 rounded-lg shadow-lg">
          <h3 class="text-xl text-gray-700 font-semibold mb-4">Visi Kami</h3>
          <p class="text-gray-700 text-justify">
           "Menjadi platform terpercaya yang mendukung tumbuh kembang anak secara optimal melalui edukasi kesehatan yang lengkap, layanan yang ramah dan profesional, serta menyediakan produk berkualitas dan aman bagi orang tua modern."
          </p>
        </div>
  
        <!-- Misi Kami -->
        <div class="p-6 bg-blue-50 rounded-lg shadow-lg">
          <h3 class="text-xl text-gray-700 font-semibold mb-4">Misi Kami</h3>
          <ul class="list-disc pl-6 text-gray-700 text-left">
            <li>platform edukasi kesehatan anak</li>
            <li>marketplace kebutuhan anak berkualitas.</li>
            <li> fokus pada konten interaktif, fakta menarik, dan tips parenting,</li>
            <li>⁠solusi lengkap bagi orang tua modern.</li>
            <li>⁠Dukungan produk aman dan ramah lingkungan</li>
            <li>⁠mendukung tumbuh kembang anak secara optimal.</li>
          </ul>
        </div>
  
        <!-- Tim Kami -->
        <div class="p-6 bg-blue-50 rounded-lg shadow-lg">
          <h3 class="text-xl text-gray-700 font-semibold mb-4">Tim Kami</h3>
          <p class="text-gray-700 text-justify">
              Hi Kids adalah sebuah platform edukasi kesehatan anak digital yang dapat membantu para orang tua untuk mendapatkan edukasi kesehatan anak yang memadai, terutama mengenai pentingnya pola hidup sehat, gizi seimbang, serta langkah - langkah pencegahan penyakit. kami juga menyediakan Marketplace Parcel Bayi (Paket Baby Care) secara online dan offline untuk lebih memudahkan new mom / new parent berbelanja kebutuhan si kecil, bisa juga menjadikan kado dengan berbagai model parcel.
          </p>
        </div>
      </div>
  
      <!-- Kenapa Memilih Kami? -->
      <div class="mt-12">
        <h3 class="text-2xl font-bold  mb-6">Kenapa Memilih Kami?</h3>
        <p class="text-lg mb-8">
            Hi Kids berkomitmen untuk mendukung tumbuh kembang anak dengan layanan kesehatan yang profesional dan penuh kasih sayang. Kami menyediakan edukasi kesehatan, marketplace kebutuhan anak berkualitas, serta produk aman dan ramah lingkungan untuk mendukung orang tua modern.
        </p>
      </div>
    </div>
  </section>
@endsection
