<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomPizza;

class CustomPizzaController extends Controller
{
    public function store(Request $request)
{
    // Validálás
    $validated = $request->validate([
        'nev' => 'required|string|max:255',
        'feltet' => 'array',  // Feltétek tömb típusúak
        'ar' => 'required|integer|min:1000',  // Az ár kötelező és minimum 1000 Ft
    ]);

    // Feltétek összegyűjtése
    $toppings = implode(', ', $validated['feltet'] ?? []);  // Az extra feltétek

    // Pizza mentése
    CustomPizza::create([
        'nev' => $validated['nev'],  // Pizza neve
        'feltet' => $toppings,  // Pizza feltétei (összefűzve egy sztringbe)
        'ar' => $validated['ar'],  // Pizza ára
    ]);

    return redirect()->route('pizzamaker')->with('success', 'Sikeresen hozzáadtad az egyedi pizzát!');
}

}
