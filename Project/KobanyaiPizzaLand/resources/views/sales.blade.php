<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menük - PizzaLand</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">
</head>
<body>

@include('header')

<section class="sales">
    <div class="container">
        <h1>Menük</h1>
        <div class="promotion-list">
            @foreach ($promotions as $promotion)
                <div class="promotion-item" data-id="{{ $promotion['id'] }}">
                    <h3>{{ $promotion['name'] }}</h3>
                    <p>Ár: {{ $promotion['price'] }} Ft</p>
                    <img class="promotion-image" src="{{ asset('images/' . $promotion['image']) }}" alt="{{ $promotion['name'] }}">
                    <form action="{{ route('add.to.cart', $promotion['id']) }}" method="POST">
                    <p class="promotion-description">{{ $promotion['description'] }}</p>
                   
                        @csrf
                        <button type="submit" class="btn promotion-button"><i class="fas fa-shopping-bag"></i></button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('footer')

</body>
</html>
