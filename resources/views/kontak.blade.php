@extends('layouts.app') 

@section('title', 'Kontak Kami')

@section('content')
    <div class="container mx-auto px-6 py-24">
        <h1 class="text-3xl font-semibold text-center text-teal-600 mb-6">Kontak Kami</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- Form Kontak -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold text-teal-600 mb-4">Formulir Kontak</h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md mt-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md mt-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-medium">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-md mt-2" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-teal-500 text-white p-3 rounded-md hover:bg-teal-600 transition duration-200">Kirim Pesan</button>
                </form>
            </div>

            <!-- Informasi Kontak -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold text-teal-600 mb-4">Informasi Kontak</h2>
                <p class="text-gray-700 mb-4">Jika Anda memiliki pertanyaan atau memerlukan bantuan, Anda dapat menghubungi kami melalui informasi berikut:</p>
                <ul class="space-y-4 text-gray-700">
                    <li>
                        <i class="fas fa-map-marker-alt text-teal-500"></i> <strong>Alamat:</strong> Jl. Soekarno Hatta Jl. Rembuksari No.1 A, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65113
                    </li>
                    <li>
                        <i class="fas fa-phone-alt text-teal-500"></i> <strong>Telepon:</strong> <a href="tel:+628123456789" class="text-teal-600">+62 812-3456-789</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope text-teal-500"></i> <strong>Email:</strong> <a href="mailto:dokterkecil.disini@gmail.com" class="text-teal-600">dokterkecil.disini@gmail.com</a>
                    </li>
                    <li>
                        <i class="fab fa-instagram text-teal-500"></i> <strong>Instagram:</strong> <a href="https://www.instagram.com/hikidss.id" class="text-teal-600">@hikidss.id</a>
                    </li>
                    <li>
                        <i class="fab fa-tiktok text-teal-500"></i> <strong>TikTok:</strong> <a href="https://www.tiktok.com/@hikids.ofc" class="text-teal-600">@hikids.ofc</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection
