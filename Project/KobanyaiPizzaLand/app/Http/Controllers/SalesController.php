<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SalesController extends Controller
{
    public function index()
    {
        $promotions = [
            [
                'id' => 1,
                'name' => 'Pizza + Üdítő',
                'price' => 3500,
                'image' => 'pizzaüdítő.png',
                'description' => 'Egy finom pizza és egy friss üdítő.',
            ],
            [
                'id' => 2,
                'name' => 'Pizza+ Köbányai Sör',
                'price' => 3800,
                'image' => 'Margherita_kobanyai.png',
                'description' => 'Extra kőbányai és a pizza tökéletes kombináció.',
            ],
        ];

        return view('sales', compact('promotions'));
    }
}
