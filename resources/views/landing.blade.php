@extends('layouts.layapp') <!-- Menggunakan layout app.blade.php -->

@section('title', 'HI KIDS - Comingsoon Apps')

@section('content') <!-- Bagian konten halaman index -->

    <div class="max-w-md mx-auto bg-white min-h-screen">
        <!-- Header -->
        <div class="p-4 border-b">
            <h1 class="text-2xl font-bold">Hai nama</h1>
        </div>
        
        <!-- Main Content -->
        <div class="p-4">
            <!-- Profile Section -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-3">Profil Anak</h2>
                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3 bg-blue-50 rounded-lg">
                        <div>
                            <p class="font-medium">nama</p>
                            <p class="text-sm text-gray-500">0 Tahun 0 Bulan</p>
                        </div>
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                    
                </div>
            </div>
            
            <!-- Menu Grid -->
            <div class="mb-6">
                <div class="grid grid-cols-3 gap-3">
                    <!-- Jadwal Vaksin -->
                    <button class="flex flex-col items-center p-3 rounded-lg bg-white border border-gray-200 hover:bg-blue-50 transition-colors">
                        <div class="h-12 w-12 bg-blue-50 rounded-full mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <p class="text-xs text-center text-gray-600">Jadwal Vaksin</p>
                    </button>
                    
                    <!-- Grafik Tumbuh -->
                    <button class="flex flex-col items-center p-3 rounded-lg bg-white border border-gray-200 hover:bg-blue-50 transition-colors">
                        <div class="h-12 w-12 bg-blue-50 rounded-full mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <p class="text-xs text-center text-gray-600">Grafik Tumbuh</p>
                    </button>
                    
                    <!-- Tahapan Kembang -->
                    <button class="flex flex-col items-center p-3 rounded-lg bg-white border border-gray-200 hover:bg-blue-50 transition-colors">
                        <div class="h-12 w-12 bg-blue-50 rounded-full mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <p class="text-xs text-center text-gray-600">Tahapan Kembang</p>
                    </button>
                    
                    <!-- Info Produk -->
                    <button class="flex flex-col items-center p-3 rounded-lg bg-white border border-gray-200 hover:bg-blue-50 transition-colors">
                        <div class="h-12 w-12 bg-blue-50 rounded-full mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-xs text-center text-gray-600">Info Produk</p>
                    </button>
                    
                    <!-- Resep MPASI -->
                    <button class="flex flex-col items-center p-3 rounded-lg bg-white border border-gray-200 hover:bg-blue-50 transition-colors">
                        <div class="h-12 w-12 bg-blue-50 rounded-full mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <p class="text-xs text-center text-gray-600">Resep MPASI</p>
                    </button>
                    
                    <!-- Artikel -->
                    <button class="flex flex-col items-center p-3 rounded-lg bg-white border border-gray-200 hover:bg-blue-50 transition-colors">
                        <div class="h-12 w-12 bg-blue-50 rounded-full mb-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                        <p class="text-xs text-center text-gray-600">Artikel</p>
                    </button>
                </div>
            </div>
   
            <!-- Promo Section -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-3">PROMO</h2>
                <div class="grid grid-cols-2 gap-3">
                    <div class="p-3 bg-yellow-50 rounded-lg text-center">
                        <i class="fa-solid fa-syringe"></i>
                        <p>Booking Vaksin</p>
                    </div>
                    <div class="p-3 bg-yellow-50 rounded-lg text-center">
                        <i class="fa-solid fa-user-doctor"></i>
                        <p>Chat Dokter</p>
                    </div>
                </div>
            </div>
            
            <!-- Card Section -->
            <div class="p-4 bg-blue-100 rounded-lg mb-6">
                <h3 class="font-bold mb-2">CARD</h3>
                <p>Pancnthood Institute</p>
            </div>
            
            <!-- Services Section -->
            <div>
                <h2 class="text-lg font-semibold mb-3">Nikmati Layanan Hemat!</h2>
                <div class="space-y-3">
                    <div class="p-3 border rounded-lg">
                        <p class="font-medium">Bundle Telkomsel</p>
                    </div>
                    <div class="p-3 border rounded-lg">
                        <p class="font-medium">Chat dokter gratis plus</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Navigation -->
        <div class="fixed bottom-0 left-0 right-0 bg-white border-t flex justify-around p-3 max-w-md mx-auto">
            <div class="text-center">
                <i class="fa-solid fa-house"></i>
                <p class="text-xs">Home</p>
            </div>
            <div class="text-center">
                <i class="fa-solid fa-receipt"></i>
                <p class="text-xs">Transaksi</p>
            </div>
            <div class="text-center">
                <i class="fa-solid fa-stethoscope"></i>
                <p class="text-xs">Chat Dokter</p>
            </div>
            <div class="text-center">
                <i class="fa-solid fa-comments"></i>
                <p class="text-xs">Komunitas</p>
            </div>
            <div class="text-center">
                <i class="fa-solid fa-newspaper"></i>
                <p class="text-xs">Konten</p>
            </div>
        </div>
    </div>


@endsection
