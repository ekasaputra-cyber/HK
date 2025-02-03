<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <!-- Menampilkan pesan error jika ada -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required value="{{ old('email') }}">
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>
    </form>
</body>
</html>
