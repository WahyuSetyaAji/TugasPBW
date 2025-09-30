<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS')</title>
</head>
<body>
    <header>
        <h1>Praktikum Laravel</h1>
        <nav>
            <a href="{{ url('/uts') }}">Menu UTS</a> |
            <a href="{{ url('/uts/web') }}">Pemrograman Web</a> |
            <a href="{{ url('/uts/database') }}">Database</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>© 2025 Praktikum Laravel</p>
    </footer>
</body>
</html>
