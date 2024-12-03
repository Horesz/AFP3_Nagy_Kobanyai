<!-- resources/views/header.blade.php -->
<header>
    <div class="container">
        <a href="/"> <img src="{{ asset('images/logo/logo.png') }}" alt="PizzaLand" id="logo"> </a>
        <nav>
            <a href="{{ route('home.view') }}">Kezdőlap</a>
            <a href="{{ route('pizzas.view') }}">Pizzák</a>
            <a href="{{ route('sales.view') }}">Menük</a>
            <a href="{{ route('contact.view') }}">Kapcsolat</a>

            @if (Route::has('login'))
                @auth
                   
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="log_reg" type="submit">Kilépés</button>
                        </form>
                    </li>
                @else
                    <a class="log_reg" href="{{ route('login') }}">Belépés</a>
                    <a class="log_reg" href="{{ route('register') }}">Regisztráció</a>
                @endauth
            @endif
            <a id="cart" href="{{ route('cart.view') }}"><i class="fas fa-shopping-bag"></i> Kosár <span id="total-amount">{{ session('cartTotal', 0) }} Ft</span></a>
        </nav>
    </div>
</header>
<script>
    document.getElementById('mobile-menu').addEventListener('click', function() {
        document.querySelector('.nav-list').classList.toggle('active');
    });
</script>
