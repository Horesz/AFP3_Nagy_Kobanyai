<!-- resources/views/pizzas.blade.php -->
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">
</head>
<body>

    @include('header')

    <section class="products">
        <div class="container">
            <h1>Pizzák</h1>
            <form action="{{ route('pizzas.view') }}" method="GET">
                <input id="pizzakeres" type="text" name="query" placeholder="Keresés a pizzák között..." value="{{ request()->input('query') }}">
                <button id="pizzakeres_but" type="submit">Keresés</button>
            </form>
            <form action="{{ route('pizzas.view') }}" method="GET" class="sort-form">
                <select name="sort" id="sort" onchange="this.form.submit()">
                    <option value="">Rendezés</option>
                    <option value="name_asc" {{ request()->input('sort') == 'name_asc' ? 'selected' : '' }}>Név szerint (A-Z)</option>
                    <option value="name_desc" {{ request()->input('sort') == 'name_desc' ? 'selected' : '' }}>Név szerint (Z-A)</option>
                    <option value="price_asc" {{ request()->input('sort') == 'price_asc' ? 'selected' : '' }}>Ár szerint (olcsótól drágáig)</option>
                    <option value="price_desc" {{ request()->input('sort') == 'price_desc' ? 'selected' : '' }}>Ár szerint (drágától olcsóig)</option>
                    <option value="toppings" {{ request()->input('sort') == 'toppings' ? 'selected' : '' }}>Feltétek szerint</option>
                </select>
            </form>
            <div class="product-list">
                @if($pizzas->isEmpty())
                    <p>Nincs találat a keresésre.</p>
                @else
                    @foreach ($pizzas as $pizza)
                        <div class="product-item" data-id="{{ $pizza->id }}">
                            <h3>{{ $pizza->nev }}</h3>
                            <p>Ár: {{ $pizza->ar }} Ft</p>
                            <p class="product-description">Feltétek: {{ $pizza->feltet }}</p>
                            <img class="pizza-image" src="{{ asset('images/' . strtolower(str_replace(' ', '', $pizza->nev)) . '.jpg') }}" alt="{{ $pizza->nev }}">
                            <form action="{{ route('add.to.cart', $pizza->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn product-button">Kosárhoz adás</button>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>



    <div id="pizza-details-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <div id="pizza-details">
                <!-- A pizza részletei itt jelennek meg -->
            </div>
        </div>
    </div>

    @include('footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const pizzaImages = document.querySelectorAll('.pizza-image');
            const modal = document.getElementById('pizza-details-modal');
            const closeButton = document.querySelector('.close-button');
            const pizzaDetails = document.getElementById('pizza-details');

            pizzaImages.forEach(image => {
                image.addEventListener('click', function () {
                    const pizzaId = this.closest('.product-item').getAttribute('data-id');
                    fetch(`/pizzas/${pizzaId}`)
                        .then(response => response.json())
                        .then(data => {
                            pizzaDetails.innerHTML = `
                                <h1>${data.nev}</h1>
                                <p>Ár: ${data.ar} Ft</p>
                                <p>Feltétek: ${data.feltet}</p>
                                <img src="/images/${data.nev.toLowerCase().replace(/ /g, '')}.jpg" alt="${data.nev}">
                                <form action="/add-to-cart/${data.id}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Kosárhoz adás</button>
                                </form>
                            `;
                            modal.style.display = 'block';
                        });
                });
            });

            closeButton.addEventListener('click', function () {
                modal.style.display = 'none';
            });

            window.addEventListener('click', function (event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
