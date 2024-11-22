<?php
namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
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

        $images = File::files(public_path('images'));
        $randomImages = collect($images)->random(20)->map(function ($file) {
            return 'images/' . $file->getFilename();
        });

        return view('home', ['pizzas' => $pizzas, 'cartTotal' => $total,'randomImages' => $randomImages]);
    }

    public function view()
    {
        return view('pizzas');
    }
}
