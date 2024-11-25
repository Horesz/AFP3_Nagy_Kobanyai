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

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['extras'] = array_merge($cart[$id]['extras'], $extras);
        } else {
            $cart[$id] = [
                "name" => $pizza->nev,
                "price" => $pizza->ar,
                "quantity" => 1,
                "extras" => $extras
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
