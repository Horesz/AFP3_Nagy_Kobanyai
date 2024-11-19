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

    @extends('layouts.app')

@section('content')
<section class="payment-section">
    <div class="container">
        <h2>Fizetési adatok</h2>
        <form action="{{ route('order.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Név:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Cím:</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefonszám:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="payment_method">Fizetési mód:</label>
                <select id="payment_method" name="payment_method" class="form-control" required>
                    <option value="credit_card">Bankkártya</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash_on_delivery">Utánvét</option>
                </select>
            </div>
            <button type="submit" class="btn-submit">Rendelés leadása</button>
        </form>
    </div>
</section>
@endsection


</body>
</html>
