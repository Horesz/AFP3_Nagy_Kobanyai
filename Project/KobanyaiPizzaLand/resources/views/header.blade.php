<header>
    <div class="container">
        <a href="/"> <img src="{{ asset('images/logo.png') }}"  alt="PizzaLand" id="logo"> </a>
        <nav>
            <a href="">Kezdőlap</a>
            <a href="/">Menü</a>
            <a href="#">Akciók</a>
            <a href="#">Kapcsolat</a>
            <a href="{{ route('login') }}">login</a>
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
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
            @endif
        </nav>
        
    </div>
</header>