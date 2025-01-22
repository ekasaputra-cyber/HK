<!-- resources/views/errors/404.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="text-center bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-6xl font-bold text-red-500">404</h1>
            <p class="mt-4 text-2xl text-gray-800">Oops! Page Not Found</p>
            <p class="mt-2 text-lg text-gray-600">The page you are looking for might have been moved or deleted.</p>
            <div class="mt-6">
                <a href="{{ url('/') }}" class="text-white bg-blue-500 hover:bg-blue-700 py-2 px-4 rounded-lg">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
