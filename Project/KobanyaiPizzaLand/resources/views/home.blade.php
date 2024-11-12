<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px 0;
        }

        header nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .btn {
            background-color: #ff6347;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .products, .reviews {
            padding: 40px 0;
            text-align: center;
        }

        .product-item{
            display: inline-block;
            margin: 20px;
            width: 200px;
            vertical-align: top;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>PizzaLand</h1>
            <nav>
                <a href="#">Kezdőlap</a>
                <a href="#">Menü</a>
                <a href="#">Akciók</a>
                <a href="#">Kapcsolat</a>
                <a href="{{ route('cart.view') }}">Kosár {{ $cartTotal }} Ft</a>
            </nav>
        </div>
    </header>


    <section class="products">
        <div class="container">
            <h2>Pizzák</h2>
            <div class="product-list">
                @foreach ($pizzas as $pizza)
                    <div class="product-item">
                        <h3>{{ $pizza->nev }}</h3>
                        <p>Ár: {{ $pizza->ar }} Ft</p>
                        <p>Feltétek: {{ $pizza->feltet }}</p>

                        <form action="{{ route('add.to.cart', $pizza->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn">Kosárhoz adás</button>
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
            <p>Kapcsolat: +36 1 234 5678 | info@pizzeriawebshop.hu</p>
            <p>Kövess minket: Facebook | Instagram</p>
            <p>&copy; 2024 Pizzéria Webshop. Minden jog fenntartva.</p>
        </div>
    </footer>
</body>
</html>
