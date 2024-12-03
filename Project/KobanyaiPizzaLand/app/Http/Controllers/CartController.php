<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class CartController extends Controller
{
    public function viewCart()
    {
        
        $cart = session()->get('cart', []);

        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $item['extras'] ?? [])) * $item['quantity'], $cart));

        session()->put('cartTotal', $total);

        return view('cart', ['cart' => $cart, 'cartTotal' => $total]);
    }

    public function addToCart(Request $request, $id)
    {
        $pizza = Pizza::find($id);

    if (!$pizza) {
        return redirect()->route('pizzas.view')->with('error', 'Pizza not found.');
    }

    $cart = session()->get('cart', []);

    $extras = $request->input('extras', []);
    $extras = array_map(fn($extra) => ['name' => $this->getExtraName($extra), 'price' => (int) $extra], $extras);

    $size = $request->input('size', 32); // Alapértelmezett méret 32 cm
    $price = $pizza->ar;
    if ($size == 50) {
        $price *= 2; // Az 50 cm-es pizza ára kétszerese
    }

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
        $cart[$id]['extras'] = array_merge($cart[$id]['extras'], $extras);
        $cart[$id]['size'] = $size; // Méret hozzáadása
        $cart[$id]['price'] = $price;
    } else {
        $cart[$id] = [
            "name" => $pizza->nev,
            "price" => $price,
            "quantity" => 1,
            "extras" => $extras,
            "size" => $size // Méret hozzáadása
        ];
    }

    session()->put('cart', $cart);

        // Recalculate the total
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $item['extras'] ?? [])) * $item['quantity'], $cart));

        session()->put('cartTotal', $total);

        return redirect()->route('pizzas.view')->with('success', 'Pizza added to cart.');
    }

    private function getExtraName($toppingId)
    {
    $toppings = [
        'extra_cheese' => 'Extra sajt',
        'extra_salami' => 'Extra szalámi',
        'extra_mushroom' => 'Extra gomba',
        'chicken' => 'Csirke',
        'bbq_sauce' => 'BBQ szósz',
        'onion' => 'Hagyma',
        'egg' => 'Tojás',
        'ham' => 'Sonka',
        'bolognese' => 'Bolognai ragu',
        'cheese' => 'Sajt'
    ];

    return $toppings[$toppingId] ?? 'Ismeretlen feltét';
    }

    public function updateQuantity(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        // Számolja ki az új teljes összeget
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $item['extras'] ?? [])) * $item['quantity'], $cart));
        $itemTotal = $cart[$id]['price'] * $cart[$id]['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $cart[$id]['extras'] ?? [])) * $cart[$id]['quantity'];

        session()->put('cartTotal', $total);

        return response()->json([
            'total' => $total,
            'itemTotal' => $itemTotal
        ]);
    }

    public function updateSize(Request $request, $id)
    {
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $size = $request->input('size', 32);
        $price = $cart[$id]['price'] / ($cart[$id]['size'] == 50 ? 2 : 1); // Eredeti ár visszaállítása

        if ($size == 50) {
            $price *= 2; // Az 50 cm-es pizza ára kétszerese
        }

        $cart[$id]['size'] = $size;
        $cart[$id]['price'] = $price;

        session()->put('cart', $cart);

        // Számolja ki az új teljes összeget
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $item['extras'] ?? [])) * $item['quantity'], $cart));
        $itemTotal = $cart[$id]['price'] * $cart[$id]['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $cart[$id]['extras'] ?? [])) * $cart[$id]['quantity'];

        session()->put('cartTotal', $total);

        return response()->json([
            'price' => $cart[$id]['price'],
            'itemTotal' => $itemTotal,
            'total' => $total
        ]);
    }

    return response()->json(['error' => 'Item not found in cart'], 404);
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'A pizza eltávolítva a kosárból!');
    }
    
    public function addCustomPizzaToCart(Request $request)
{
    // Pizza adatainak beolvasása
    $pizzaName = $request->input('nev', 'Egyedi Pizza');
    $basePrice = (int) $request->input('ar', 0);  // Az alapár, amit a felhasználó megad
    $toppings = $request->input('feltet', []);  // A feltétek, amit a felhasználó választott
    $size = $request->input('size', 32);  // Méret, alapértelmezett: 32 cm

    // Kosár betöltése session-ből
    $cart = session()->get('cart', []);

    // Ha a kosár nem egy tömb (pl. sztring lenne), akkor inicializáljuk
    if (!is_array($cart)) {
        $cart = [];
    }

    // Egyedi pizza ID generálása
    $customId = 'custom_' . uniqid();

    // Feltétek formázása
    $toppingsFormatted = array_map(fn($topping) => [
        'name' => $this->getExtraName($topping),
        'price' => $this->getExtraPrice($topping)
    ], $toppings);

    // Méret és ár kezelése
    if ($size == 50) {
        $basePrice *= 2;  // Ha 50 cm-es pizza, akkor az ára kétszeres
    }

    // Kosárba helyezés
    $cart[$customId] = [
        "name" => $pizzaName,
        "price" => $basePrice,
        "quantity" => 1,
        "size" => $size,
        "extras" => $toppingsFormatted
    ];

    // Kosár frissítése session-ben
    session()->put('cart', $cart);

    // Teljes ár számítása
    $total = array_sum(array_map(
        fn($item) => $item['price'] * $item['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $item['extras'] ?? [])) * $item['quantity'],
        $cart
    ));

    session()->put('cartTotal', $total);

    // Visszaállás a pizzák oldalra
    return redirect()->route('pizzas.view')->with('success', 'Egyedi pizza hozzáadva a kosárhoz.');
}



private function getExtraPrice($toppingId)
{
    $toppingsPrices = [
        'extra_cheese' => 200,
        'extra_salami' => 300,
        'extra_mushroom' => 250,
        'chicken' => 0,
        'bbq_sauce' => 0,
        'onion' => 0,
        'egg' => 0,
        'ham' => 0,
        'bolognese' => 0,
        'cheese' => 0
    ];

    return $toppingsPrices[$toppingId] ?? 0;
}

}
