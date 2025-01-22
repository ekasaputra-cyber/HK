@extends('layouts.ld') <!-- Menggunakan layout app.blade.php -->

@section('title', 'HI KIDS - Comingsoon Apps')

@section('content') <!-- Bagian konten halaman index -->
    <div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-r from-blue-500 to-teal-400 pt-32">
        <div class="text-center p-8 bg-white shadow-lg rounded-lg w-full">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat datang di Aplikasi Saya</h1>
            <p class="text-lg text-gray-600 mb-6">Aplikasi ini masih dalam pengembangan, namun kamu bisa melihat desain prototipe kami di bawah.</p>

            <!-- Embed Figma Prototipe sesuai ukuran layar -->
            <div class="relative">
                <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" 
                        class="w-full h-[90vh] md:h-[95vh] lg:h-screen rounded-lg"
                        src="https://embed.figma.com/proto/WTUNtP29TZ7XQLv8s0bm6e/tip-proto2?node-id=5-107&starting-point-node-id=2%3A21&embed-host=share" 
                        allowfullscreen>
                </iframe>
            </div>

            <div class="mt-8">
                <p class="text-sm text-gray-500">Terima kasih telah mengunjungi aplikasi kami! Kami akan segera meluncurkan versi finalnya.</p>
            </div>
        </div>
    </div>

@endsection
