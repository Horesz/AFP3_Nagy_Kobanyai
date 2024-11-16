<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class CartController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart', ['cart' => $cart, 'cartTotal' => $total]);
    }

    public function addToCart($id)
    {
        $pizza = Pizza::find($id);

        if (!$pizza) {
            return redirect()->route('pizzas.view')->with('error', 'Pizza not found.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $pizza->nev,
                "price" => $pizza->ar,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('pizzas.view')->with('success', 'Pizza added to cart.');
    }



    public function updateQuantity(Request $request, $id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
    }

    // Számolja ki az új teljes összeget
    $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
    $itemTotal = $cart[$id]['price'] * $cart[$id]['quantity'];

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
