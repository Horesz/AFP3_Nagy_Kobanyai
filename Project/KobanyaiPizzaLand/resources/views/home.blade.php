    <section class="products">
        <!-- Itt a main ágból a termékek listázása -->
        <div class="container">
            <h1>Pizzák</h1>
            <div class="product-list">
                @foreach ($pizzas as $pizza)
                    <div class="product-item">
                        <h3>{{ $pizza->nev }}</h3>
                        <p>Ár: {{ $pizza->ar }} Ft</p>
                        <p class="product-description">Feltétek: {{ $pizza->feltet }}</p>
                        <img src="{{ asset('images/' . strtolower(str_replace(' ', '_', $pizza->nev)) . '.jpg') }}" alt="{{ $pizza->nev }}">
                        <form action="{{ route('add.to.cart', $pizza->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn product-button">Kosárhoz adás</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <h2>Vásárlói Vélemények</h2>
            <?php
                if(DB::connection()->getPdo())
                {
                    echo "Successfully connected to the database =>"
                    .DB::connection()->getDatabaseName();
                }
            ?>
        </div>
    </section>

    @include('footer')
</body>
</html>