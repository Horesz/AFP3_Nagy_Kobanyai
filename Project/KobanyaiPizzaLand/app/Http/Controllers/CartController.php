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

    private function getExtraName($price)
    {
        switch ($price) {
            case 200:
                return 'Extra sajt';
            case 300:
                return 'Extra szalámi';
            case 250:
                return 'Extra gomba';
            default:
                return 'Ismeretlen feltét';
        }
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

}
