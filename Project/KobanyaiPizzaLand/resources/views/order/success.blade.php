<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand - Kosár</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>
<body>

    @include('header')

    @extends('layouts.app')

    @section('content')
    <section class="order-success-section">
        <div class="container">
            <h2>Rendelés sikeresen leadva!</h2>
            <p>Köszönjük a rendelését. Hamarosan felvesszük Önnel a kapcsolatot.</p>
        </div>
    </section>
    @endsection

    @include('footer')

</body>
</html>
