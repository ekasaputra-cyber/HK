<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
    <x-head.tinymce-config />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Tambah Artikel</h1>

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Title Input -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Judul:</label>
            <input type="text" name="title" id="title" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <!-- Content Textarea -->
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Konten:</label>
            <textarea name="content" id="content" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>

        <!-- Image Upload -->
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar:</label>
            <input type="file" name="image" id="image" 
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Simpan Artikel
            </button>
        </div>
    </form>
</div>

</body>
</html>
