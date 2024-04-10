<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Test Laravel</h1>
    </header>
    
    <nav>
        <!-- Lien vers la page de contact -->
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Lien vers la page de contact -->
        <a href="{{ route('contact') }}">Contact</a>
    </footer>
</body>
</html>