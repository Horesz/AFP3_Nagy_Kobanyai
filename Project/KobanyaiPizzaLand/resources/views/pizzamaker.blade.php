<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzakészítő</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('header') 

    <section class="pizzamaker">
        <div class="container">
            <h1>Pizzakészítő</h1>
            <form method="POST" action="{{ route('add.custom.pizza') }}">
                @csrf
                <label for="pizza-name">Pizza neve:</label>
                <input type="text" id="pizza-name" name="pizza_name" required>

                <label for="pizza-toppings">Feltétek:</label>
                <select name="toppings[]" id="pizza-toppings" multiple>
                    <option value="extra_cheese">Extra sajt</option>
                    <option value="extra_salami">Extra szalámi</option>
                    <option value="extra_mushroom">Extra gomba</option>
                </select>

                <label for="pizza-price">Ár:</label>
                <input type="number" id="pizza-price" name="price" min="0" required>

                <button type="submit">Pizza hozzáadása a kosárhoz</button>
            </form>
        </div>
    </section>

    @include('footer') 
</body>
</html>
