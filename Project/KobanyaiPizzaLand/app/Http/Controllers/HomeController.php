<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();

        $total = 0;
        if (session()->has('cart')) {
            foreach (session('cart') as $item) {
                $total += $item['price'] * $item['quantity'];
            }
        }

        return view('home', ['pizzas' => $pizzas, 'cartTotal' => $total]);
    }

    public function view()
    {
        return view('pizzas');
    }
}

