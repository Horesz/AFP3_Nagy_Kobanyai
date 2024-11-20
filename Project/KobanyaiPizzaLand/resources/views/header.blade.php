<!-- resources/views/header.blade.php -->
<header>
    <div class="container">
        <a href="/"> <img src="{{ asset('images/logo.png') }}" alt="PizzaLand" id="logo"> </a>
        <nav>
            <a href="{{ route('home.view') }}">Kezdőlap</a>
            <a href="{{ route('pizzas.view') }}">Pizzák</a>
            <a href="{{ route('sales.view') }}">Akciók</a>
            <a href="{{ route('contact.view') }}">Kapcsolat</a>

            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <a class="log_reg" href="{{ route('login') }}">Belépés</a>
                    <a class="log_reg" href="{{ route('register') }}">Regisztráció</a>
                @endauth
            @endif
            <a id="cart" href="{{ route('cart.view') }}"><i class="fas fa-shopping-bag"></i> Kosár <span id="total-amount">{{ $cartTotal }} Ft</a>
        </nav>
    </div>
</header>
