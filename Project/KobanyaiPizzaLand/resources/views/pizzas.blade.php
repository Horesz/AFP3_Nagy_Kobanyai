<!-- resources/views/pizzas.blade.php -->
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>
<body>

    @include('header')

    <section class="products">
        <div class="container">
            <h1>Pizzák</h1>
            <form action="{{ route('pizzas.view') }}" method="GET" class="search-form">
                <input id="pizzakeres" type="text" name="query" placeholder="Keresés a pizzák között..." value="{{ request()->input('query') }}">
                <button id="pizzakeres_but" type="submit">Keresés</button>
            </form>
            <div class="product-list">
                @if($pizzas->isEmpty())
                    <p>Nincs találat a keresésre.</p>
                @else
                    @foreach ($pizzas as $pizza)
                        <div class="product-item">
                            <h3>{{ $pizza->nev }}</h3>
                            <p>Ár: {{ $pizza->ar }} Ft</p>
                            <p class="product-description">Feltétek: {{ $pizza->feltet }}</p>
                            <img src="{{ asset('images/' . strtolower(str_replace(' ', '', $pizza->nev)) . '.jpg') }}" alt="{{ $pizza->nev }}">
                            <form action="{{ route('add.to.cart', $pizza->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn product-button">Kosárhoz adás</button>
                            </form>
                            <button class="btn extra-button" onclick="showPopup({{ $pizza->id }}, {{ $pizza->ar }})">Extra</button>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-button" onclick="hidePopup()">&times;</span>
            <h3 id="popup-title"></h3>
            <img id="popup-image" src="" alt="Pizza" class="popup-image">
            <p id="popup-description"></p>
            <h4>Extra feltétek:</h4>
            <form id="extras-form">
                <label><input type="checkbox" name="extra" value="Sajt" data-price="200" onchange="updateTotal()"> Sajt (+200 Ft)</label><br>
                <label><input type="checkbox" name="extra" value="Sonka" data-price="300" onchange="updateTotal()"> Sonka (+300 Ft)</label><br>
                <label><input type="checkbox" name="extra" value="Gomba" data-price="150" onchange="updateTotal()"> Gomba (+150 Ft)</label><br>
                <!-- Add more extras as needed -->
            </form>
            <p><b>Összeg: <span id="total-price"></span> Ft</b></p>
            <button class="btn add-to-cart-button" onclick="addToCartWithExtras()">Kosárhoz adás extrákkal</button>
        </div>
    </div>

    @include('footer')

    <script>
        let basePrice = 0;

        function clearSearch() {
            document.getElementById('pizzakeres').value = '';
        }

        function showPopup(pizzaId, pizzaPrice) {
            // Get pizza details
            var pizza = @json($pizzas).find(p => p.id === pizzaId);
            document.getElementById('popup-title').innerText = pizza.nev;
            document.getElementById('popup-image').src = "{{ asset('images/') }}/" + pizza.nev.toLowerCase().replace(/ /g, '') + ".jpg";
            document.getElementById('popup-description').innerText = pizza.feltet;

            // Set base price
            basePrice = pizzaPrice;
            document.getElementById('total-price').innerText = basePrice;

            // Show popup
            document.getElementById('popup').style.display = 'block';
        }

        function hidePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function updateTotal() {
            let total = basePrice;
            const checkboxes = document.querySelectorAll('#extras-form input[type="checkbox"]:checked');
            checkboxes.forEach(function(checkbox) {
                total += parseInt(checkbox.getAttribute('data-price'));
            });
            document.getElementById('total-price').innerText = total;
        }

        function addToCartWithExtras() {
            // Get selected extras
            var extras = [];
            var checkboxes = document.querySelectorAll('#extras-form input[type="checkbox"]:checked');
            checkboxes.forEach(function(checkbox) {
                extras.push({
                    name: checkbox.value,
                    price: checkbox.getAttribute('data-price')
                });
            });

            // Add to cart logic here
            // ...

            // Hide popup
            hidePopup();
        }
    </script>
</body>
</html>