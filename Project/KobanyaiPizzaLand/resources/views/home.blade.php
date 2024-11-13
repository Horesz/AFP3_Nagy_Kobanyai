@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <h1>Üdvözöljük a Köbányai Pizzalandben!</h1>
        <p>Rendeld meg kedvenc pizzáidat egyszerűen és gyorsan!</p>
        <a href="#" class="order-button">Rendelés Most</a>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    </div>

    <div class="pizza-section">
        <h2>Népszerű Pizzáink</h2>
        <div class="pizza-list">
            <div class="pizza-item">
                <h3>Margherita</h3>
                <p>Klasszikus paradicsomos alap, mozzarella sajt.</p>
            </div>
            <div class="pizza-item">
                <h3>Pepperoni</h3>
                <p>Pikáns pepperoni, mozzarella sajt és paradicsomszósz.</p>
            </div>
            <!-- Ide kell még pizzát tenni ha szeretnénk -->
        </div>
    </div>
@endsection
