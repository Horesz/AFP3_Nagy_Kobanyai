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
            [
                'id' => 3,
                'name' => 'Pizza + 1 literes Coca Cola',
                'price' => 3200,
                'image' => 'PizzaCoca.png',
                'description' => 'Bónusz 1 literes Coca Cola a finom pizza mellé.',
            ],
            [
                'id' => 4,
                'name' => 'Pizza + Egri bikavérrel',
                'price' => 4000,
                'image' => 'PizzaBor.png',
                'description' => 'A pizza mellé tökéletes az egri bikavér.',
            ],
            [
                'id' => 5,
                'name' => 'Sajtos pizza, gyümölcs salátával és 0,33l Coca Colával',
                'price' => 3500,
                'image' => 'PizzaGyumolcsSali.png',
                'description' => 'A pizza mellé kis hideg gyümölcs saláta és kóla sose rossz döntés.',
            ],
            [
                'id' => 6,
                'name' => '50 centis pizza + 1 literes Pepsi',
                'price' => 4300,
                'image' => '50cmPizza.png',
                'description' => 'Családi méretű pizza, hűs Pepsivel.',
            ],
        ];

        return view('sales', compact('promotions'));
    }
}
