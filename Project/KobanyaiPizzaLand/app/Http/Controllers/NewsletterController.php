<?php
// app/Http/Controllers/NewsletterController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validálás
        $request->validate([
            'email' => 'required|email',
        ]);


        return redirect()->back()->with('success', 'Sikeresen feliratkoztál a hírlevélre!');
    }
}