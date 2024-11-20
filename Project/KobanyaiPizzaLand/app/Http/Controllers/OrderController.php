<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submit(Request $request) {
        // Itt dolgozd fel a rendelési adatokat
        // Például mentheted az adatokat az adatbázisba

        $request->session()->forget('cart');
        $cartTotal = 0;

        return redirect()->route('order.success')->with('cartTotal', $cartTotal);
    }

    public function show() {
        $cart = session()->get('cart', []);
        $cartTotal = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        return view('order.success', compact('cartTotal'));
    }
}
