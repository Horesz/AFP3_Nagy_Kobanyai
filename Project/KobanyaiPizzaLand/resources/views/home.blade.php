<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="{{ asset('images/logo.png') }}" alt="PizzaLand" id="logo">
            <nav>
                <a href="#">Kezdőlap</a>
                <a href="/">Menü</a>
                <a href="#">Akciók</a>
                <a href="#">Kapcsolat</a>
                <a id="cart" href="{{ route('cart.view') }}"><i class="fas fa-shopping-bag"></i> Kosár {{ $cartTotal }} Ft</a>
            </nav>
        </div>
    </header>

    <section class="products">
        <div class="container">
            <h1>Pizzák</h1>
            <div class="product-list">
                @foreach ($pizzas as $pizza)
                    <div class="product-item">
                        <h3>{{ $pizza->nev }}</h3>
                        <p>Ár: {{ $pizza->ar }} Ft</p>
                        <p class="product-description">Feltétek: {{ $pizza->feltet }}</p>
                        <img src="{{ asset('images/' . strtolower(str_replace(' ', '_', $pizza->nev)) . '.jpg') }}" alt="{{ $pizza->nev }}">
                        <form action="{{ route('add.to.cart', $pizza->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn product-button">Kosárhoz adás</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h2>Vásárlói Vélemények</h2>
            <?php
                if(DB::connection()->getPdo())
                {
                    echo "Successfully connected to the database =>"
                    .DB::connection()->getDatabaseName();
                }
            ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>Kapcsolat: +36 1 234 5678 | info@kobanyaipizza.hu</p>
            <p>Kövess minket: Facebook | Instagram</p>
            <p>&copy; 2024 Kőbányai Pizzéria. Minden jog fenntartva.</p>
        </div>
    </footer>
</body>
</html>