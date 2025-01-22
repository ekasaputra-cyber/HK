<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Tambah Produk Baru</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama Produk</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full p-2 border border-gray-300 rounded" required>
            @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Deskripsi Produk</label>
            <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded" rows="4" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700">Harga Produk</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" class="w-full p-2 border border-gray-300 rounded" required>
            @error('price')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700">Gambar Produk</label>
            <input type="file" id="image" name="image" class="w-full p-2 border border-gray-300 rounded" required>
            @error('image')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Tambah Produk</button>
    </form>
</div>

</body>
</html>
