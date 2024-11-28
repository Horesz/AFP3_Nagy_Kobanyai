<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SalesController extends Controller
{





    public function index()
    {
        $images = File::files(public_path('images'));
        $randomImages = collect($images)->random(20)->map(function ($file) {
            return 'images/' . $file->getFilename();
        });

        return view('sales',['randomImages' => $randomImages]);
    }
}
