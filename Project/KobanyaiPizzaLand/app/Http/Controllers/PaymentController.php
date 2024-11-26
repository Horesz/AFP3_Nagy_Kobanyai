<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show() {
        $cart = session()->get('cart', []);
        $cartTotal = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $item['extras'] ?? [])) * $item['quantity'];
        }, $cart));

        return view('payment', compact('cartTotal'));
    }
}
