<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $pizza = Pizza::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $pizza->nev,
                "price" => $pizza->ar,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('pizza.index')->with('success', 'Pizza hozzáadva a kosárhoz!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }


    public function updateQuantity(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

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
