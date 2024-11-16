<!-- resources/views/header.blade.php -->
<header>
    <div class="container">
        <a href="/"> <img src="{{ asset('images/logo.png') }}" alt="PizzaLand" id="logo"> </a>
        <nav>
            <a href="{{ route('home.view') }}">Kezdőlap</a>
            <a href="{{ route('pizzas.view') }}">Pizzák</a>
            <a href="#">Akciók</a>
            <a href="#">Kapcsolat</a>

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
                    <a class="log_reg" href="{{ route('login') }}">Login</a>
                    <a class="log_reg" href="{{ route('register') }}">Register</a>
                @endauth
            @endif
            <a id="cart" href="{{ route('cart.view') }}"><i class="fas fa-shopping-bag"></i> Kosár {{ $cartTotal ?? 0 }} Ft</a>
        </nav>
    </div>
</header>