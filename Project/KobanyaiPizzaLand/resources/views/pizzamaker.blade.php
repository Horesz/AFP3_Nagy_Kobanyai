<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzakészítő</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @include('header') 

    <section class="pizzamaker">
        <div class="container">
            <h1 class="section-title">Pizzakészítő</h1>
            <p class="section-description">Készítsd el a saját egyedi pizzádat! Válassz feltéteket, adj meg egy nevet és az árat.</p>
            
            <form method="POST" action="{{ route('add.custom.pizza') }}" class="pizza-form">
                @csrf
                <div class="form-group">
                    <label for="pizza-name">Pizza neve:</label>
                    <input type="text" id="pizza-name" name="pizza_name" placeholder="Add meg a pizza nevét" required>
                </div>
                
                <div class="form-group">
                    <label for="pizza-toppings">Feltétek:</label>
                    <select name="toppings[]" id="pizza-toppings" multiple>
                        <option value="extra_cheese" data-price="300">Extra sajt (300 Ft)</option>
                        <option value="extra_salami" data-price="400">Extra szalámi (400 Ft)</option>
                        <option value="extra_mushroom" data-price="200">Extra gomba (200 Ft)</option>
                    </select>
                    <p class="help-text">Tartsd lenyomva a CTRL billentyűt (vagy Mac-en a Command billentyűt) több opció kiválasztásához.</p>
                </div>

                <div class="form-group">
                    <label>Pizza ára:</label>
                    <p id="pizza-price-display">1000 Ft</p>
                    <input type="hidden" id="pizza-price" name="price" value="10">
                </div>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-cart-plus"></i> Pizza hozzáadása a kosárhoz
                </button>
            </form>
        </div>
    </section>

    @include('footer') 

    <script>
        // Alapár
        const basePrice = 1000;

        // Elemek
        const toppingsSelect = document.getElementById('pizza-toppings');
        const priceDisplay = document.getElementById('pizza-price-display');
        const priceInput = document.getElementById('pizza-price');

        // Árszámítás
        const calculatePrice = () => {
            let totalPrice = basePrice;
            const selectedOptions = Array.from(toppingsSelect.selectedOptions);
            
            selectedOptions.forEach(option => {
                totalPrice += parseInt(option.getAttribute('data-price')) || 0;
            });

            priceDisplay.textContent = `${totalPrice} Ft`;
            priceInput.value = totalPrice;
        };

        // Eseménykezelő
        toppingsSelect.addEventListener('change', calculatePrice);
    </script>
</body>
</html>
