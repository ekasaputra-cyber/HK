@extends('layouts.app')

@section('title')
    Produk Kami
@endsection

@section('content')
<div class="container mx-auto p-6 mt-32 text-gray-800">
    <h1 class="text-3xl font-bold mb-6 text-center text-cyan-800">Daftar Produk</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach($products as $product)
            <div class="bg-cyan-50 p-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out">
                <img class="w-full h-56 object-cover rounded-md mb-4" src="{{ asset('storage/toko/' . $product->image) }}" alt="{{ $product->name }}">
                <h2 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h2>
                <p class="text-gray-600 mt-2">{{ Str::limit($product->description, 100) }}</p>
                <div class="flex justify-between items-center mt-4">
                    <p class="text-lg font-bold text-green-500">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <a href="{{ url('produk/' . $product->slug) }}" class="text-blue-500 hover:underline">Lihat Produk</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
