@extends('layouts.lay')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
<div class="container mx-auto p-6 mt-32 text-white">
    <!-- Title: Product Name -->
    <h1 class="text-4xl font-extrabold text-center mb-8">{{ $product->name }}</h1>

    <div class="flex flex-col md:flex-row items-center justify-center md:justify-between">
        <!-- Left Section: Product Image -->
        <div class="md:w-1/2 bg-white shadow-xl rounded-lg overflow-hidden">
            <!-- Trigger image click to open modal -->
            <img class="w-full h-80 object-cover transform hover:scale-110 transition-transform duration-500 cursor-pointer" 
                 src="{{ asset('storage/toko/' . $product->image) }}" 
                 alt="{{ $product->name }}"
                 onclick="openModal('{{ asset('storage/toko/' . $product->image) }}')">
        </div>

        <!-- Right Section: Product Description and Price -->
        <div class="md:w-1/2 md:pl-6 mt-8 md:mt-0">
            <p class="text-lg mb-4">{{ $product->description }}</p>
            <p class="text-3xl font-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

            <div class="mt-6 flex justify-between items-center">
                <!-- Button: Buy Now -->
                <button 
                    onclick="window.location.href='{{ $product->link }}'" 
                    class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-8 py-3 rounded-full hover:from-blue-400 hover:to-indigo-500 transition duration-300 transform hover:scale-105 border border-white">
                    Beli Sekarang
                </button>

                <!-- Cart Icon (Optional) -->
                <button class="bg-gray-200 text-gray-600 p-3 rounded-full hover:bg-gray-300 transition duration-300">
                    <i class="fas fa-cart-plus text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Link Back to Products List -->
    <div class="mt-8 text-center">
        <a href="{{ url('/toko') }}" class="hover:text-gray-700 text-lg font-semibold">
            Kembali ke Daftar Produk
        </a>
    </div>
</div>

<!-- Modal for Full-Size Image -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden justify-center items-center z-50">
    <div class="relative max-w-full max-h-screen p-4">
        <span onclick="closeModal()" class="absolute top-0 right-0 text-white text-3xl cursor-pointer p-4">&times;</span>
        <!-- Image will be centered and responsive -->
        <img id="modalImage" class="max-w-full max-h-screen object-contain mx-auto" src="" alt="Full size image">
    </div>
</div>

<script>
    // Function to open the modal and display the clicked image
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        // Set the source of the modal image
        modalImage.src = imageSrc;

        // Display the modal
        modal.classList.remove('hidden');
    }

    // Function to close the modal
    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
    }
</script>

@endsection
