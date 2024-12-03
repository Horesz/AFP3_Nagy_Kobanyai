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
            <p class="section-description">Készítsd el a saját egyedi pizzádat! Válassz feltéteket, add meg a nevet, és látni fogod az árát!</p>
            
            <!-- Form a pizza hozzáadásához a kosárhoz -->
            <form method="POST" action="{{ route('cart.addCustomPizza') }}" class="pizza-form">
                @csrf
                <div class="form-group">
                    <label for="pizza-name">Pizza neve:</label>
                    <input type="text" id="pizza-name" name="nev" placeholder="Add meg a pizza nevét" required>
                </div>
                
                <div class="form-group">
                    <label for="pizza-toppings">Feltétek:</label>
                    <select name="feltet[]" id="pizza-toppings" multiple>
                        <option value="extra_cheese" data-price="200">Extra sajt (+200 Ft)</option>
                        <option value="extra_salami" data-price="300">Extra szalámi (+300 Ft)</option>
                        <option value="extra_mushroom" data-price="250">Extra gomba (+250 Ft)</option>
                
                        <option value="chicken" data-price="0">Csirke</option>
                        <option value="bbq_sauce" data-price="0">BBQ szósz</option>
                        <option value="onion" data-price="0">Hagyma</option>
                        <option value="cheese" data-price="0">Sajt</option>
                        <option value="egg" data-price="0">Tojás</option>
                        <option value="ham" data-price="0">Sonka</option>
                        <option value="bolognese" data-price="0">Bolognai ragu</option>
                    </select>
                    <p class="help-text">Tartsd lenyomva a CTRL billentyűt (vagy Mac-en a Command billentyűt) több opció kiválasztásához.</p>
                </div>
                

                <div class="form-group">
                    <label>Pizza ára:</label>
                    <p id="pizza-price-display">1000 Ft</p>
                    <input type="hidden" id="pizza-price" name="ar" value="1000">
                </div>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-cart-plus"></i> Pizza hozzáadása
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
