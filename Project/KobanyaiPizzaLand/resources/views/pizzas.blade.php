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
            <a href="{{ route('pizzamaker') }}">
                <button type="button" class="btn pizzamaker-btn">Pizzakészítő</button>
            </a>
            
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
                                <button type="submit" class="btn product-button"><i class="fas fa-shopping-bag"></i></button>
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
            <p id="total-price"></p>
        </div>
    </div>

    @include('footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const pizzaImages = document.querySelectorAll('.pizza-image');
            const modal = document.getElementById('pizza-details-modal');
            const closeButton = document.querySelector('.close-button');
            const pizzaDetails = document.getElementById('pizza-details');
            const pizzaSize = document.getElementById('pizza-size');
            const totalPrice = document.getElementById('total-price');

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
                                    <div id="size-select">
                                        <label for="pizza-size">Méret:</label>
                                            <select id="pizza-size">
                                            <option value="32">32 cm</option>
                                            <option value="50">50 cm</option>
                                        </select>
                                    </div>
                                    <div id="extra-toppings">
                                        <h3>Extra feltétek</h3>
                                        <label><input type="checkbox" value="200" class="extra-topping" name="extras[]"> Extra sajt (+200 Ft)</label><br>
                                        <label><input type="checkbox" value="300" class="extra-topping" name="extras[]"> Extra szalámi (+300 Ft)</label><br>
                                        <label><input type="checkbox" value="250" class="extra-topping" name="extras[]"> Extra gomba (+250 Ft)</label><br>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kosárhoz adás</button>
                                </form>
                            `;
                            document.getElementById('total-price').innerText = `Összesen: ${data.ar} Ft`;
                            modal.style.display = 'block';
                        });
                });
            });

            document.addEventListener('change', function (event) {
                if (event.target.classList.contains('extra-topping')) {
                    let totalPrice = parseInt(document.getElementById('total-price').innerText.replace('Összesen: ', '').replace(' Ft', ''));
                    if (event.target.checked) {
                        totalPrice += parseInt(event.target.value);
                    } else {
                        totalPrice -= parseInt(event.target.value);
                    }
                    document.getElementById('total-price').innerText = `Összesen: ${totalPrice} Ft`;
                }
                if (event.target.id === 'pizza-size') {
                    let totalPrice = parseInt(document.getElementById('total-price').innerText.replace('Összesen: ', '').replace(' Ft', ''));
                    let sizeValue = parseInt(event.target.value);
                    if (sizeValue === 50) {
                        totalPrice *= 2;
                    } else {
                        totalPrice = (totalPrice / 2) * (sizeValue / 32);
                    }
                    document.getElementById('total-price').innerText = `Összesen: ${totalPrice} Ft`;
                }
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
