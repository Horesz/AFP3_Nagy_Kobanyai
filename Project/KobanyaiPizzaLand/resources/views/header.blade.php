<header>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="PizzaLand" id="logo">
        <nav>
            <a href="#">Kezdőlap</a>
            <a href="/">Menü</a>
            <a href="#">Akciók</a>
            <a href="#">Kapcsolat</a>
            <a id="cart" href="{{ route('cart.view') }}"><i class="fas fa-shopping-bag"></i> Kosár {{ $cartTotal }} Ft</a>
        </nav>
    </div>
</header>