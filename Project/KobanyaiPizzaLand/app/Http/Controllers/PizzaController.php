<?php

namespace App\Http\Controllers;
use App\Models\Pizza;

use Illuminate\Http\Request;

class PizzaController extends Controller
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
        public function view(Request $request)
        {
            $query = $request->input('query');
            if ($query) {
                $pizzas = Pizza::where('nev', 'LIKE', "%{$query}%")->get();
            } else {
                $pizzas = Pizza::all();
            }
    
            $total = 0;
            if (session()->has('cart')) {
                foreach (session('cart') as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            }
    
            return view('pizzas', ['pizzas' => $pizzas, 'cartTotal' => $total]);
        }
}
