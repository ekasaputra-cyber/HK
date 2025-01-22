@extends('layouts.app') <!-- Menggunakan layout app.blade.php -->

@section('title', 'HI KIDS - Artikel')

@section('content') 
    <!-- Container Utama -->
    <div class="max-w-6xl mx-auto p-8 my-28">

        <!-- Judul Halaman -->
        <h1 class="text-4xl font-semibold text-center mb-8 text-white">Daftar Artikel</h1>

        <!-- Daftar Artikel -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($articles as $article)
                <div class="bg-cyan-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between h-full">
                    <div class="flex flex-col h-full">
                        <!-- Gambar Artikel -->
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $article->image) }}" alt="Gambar Artikel" class="w-full h-48 object-cover rounded-lg">
                        </div>
        
                        <!-- Konten Artikel -->
                        <div class="flex flex-col justify-between h-full">
                            <a href="{{ route('articles.show', $article->slug) }}" class="text-lg md:text-xl font-semibold text-cyan-700 hover:text-cyan-900 hover:scale-105 transition-all duration-300 ease-in-out">
                                {{ $article->title }}
                            </a>
                            <p class="text-base text-gray-600 mt-2 mb-4">{!! Str::limit($article->content, 150) !!}</p>
        
                            <!-- Tanggal Terakhir Update -->
                            <p class="text-sm text-gray-500">Diperbarui pada: {{ \Carbon\Carbon::parse($article->updated_at)->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
