<header>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="PizzaLand" id="logo">
        <nav>
            <a href="#">Kezdőlap</a>
            <a href="/">Menü</a>
            <a href="#">Akciók</a>
            <a href="#">Kapcsolat</a>
            <a class="log_reg" href="{{ route('login') }}">Login</a>
            <a class="log_reg" href="{{ route('register') }}">Register</a>
            <a id="cart" href="{{ route('cart.view') }}"><i class="fas fa-shopping-bag"></i> Kosár {{ $cartTotal }} Ft</a>
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

            @endauth
            @endif
        </nav>
        
    </div>
</header>