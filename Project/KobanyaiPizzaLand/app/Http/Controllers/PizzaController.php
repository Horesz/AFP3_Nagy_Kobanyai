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
            $sort = $request->input('sort');
    
            $pizzas = Pizza::query();
    
            if ($query) {
                $pizzas->where('nev', 'LIKE', "%{$query}%");
            }
    
            switch ($sort) {
                case 'name_asc':
                    $pizzas->orderBy('nev', 'asc');
                    break;
                case 'name_desc':
                    $pizzas->orderBy('nev', 'desc');
                    break;
                case 'price_asc':
                    $pizzas->orderBy('ar', 'asc');
                    break;
                case 'price_desc':
                    $pizzas->orderBy('ar', 'desc');
                    break;
                case 'toppings':
                    $pizzas->orderBy('feltet', 'asc');
                    break;
            }
    
            $pizzas = $pizzas->get();
    
            $total = 0;
            if (session()->has('cart')) {
                foreach (session('cart') as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            }
    
            return view('pizzas', ['pizzas' => $pizzas, 'cartTotal' => $total]);
        }

        
    
        public function specialoffers()
        {
            $pizzas = Pizza::query();
    
            $total = 0;
            if (session()->has('cart')) {
                foreach (session('cart') as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            }
    
            return view('specialoffers', ['pizzas' => $pizzas, 'cartTotal' => $total]);
        }

        public function contact()
        {
            $pizzas = Pizza::query();
    
            $total = 0;
            if (session()->has('cart')) {
                foreach (session('cart') as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            }
    
            return view('contact', ['pizzas' => $pizzas, 'cartTotal' => $total]);
        }
    
        public function show($id)
        {
            $pizza = Pizza::findOrFail($id);
            return response()->json($pizza);
        }

}
