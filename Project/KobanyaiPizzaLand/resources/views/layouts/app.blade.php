<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Köbányai Pizzaland</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="/">Köbányai Pizzaland</a>
            <ul>
                <li><a href="#">Főoldal</a></li>
                <li><a href="#">Pizzák</a></li>
                <li><a href="#">Rólunk</a></li>
                <li><a href="#">Kapcsolat</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Köbányai Pizzaland. Minden jog fenntartva.</p>
    </footer>
</body>
</html>
