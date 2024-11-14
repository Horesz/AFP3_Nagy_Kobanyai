<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>
<body>

    @include('header')
    
    <section class="welcome">
        <div class="container">
            <h1>Üdvözlünk a Kőbányai Pizzéria oldalán!</h1>
            <p>Fedezd fel a legfinomabb pizzákat és rendelj online!</p>
            <a href="{{ route('pizzas.view') }}" class="btn explore-button">Fedezd fel a pizzákat!</a>
        </div>
    </section>

    @include('footer')
</body>
</html>