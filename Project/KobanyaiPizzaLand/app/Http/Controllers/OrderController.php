<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submit(Request $request) {
        // Itt dolgozd fel a rendelési adatokat
        // Például mentheted az adatokat az adatbázisba

        return redirect()->route('order.success');
    }
}
