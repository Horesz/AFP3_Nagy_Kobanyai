<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    // Főoldalra mutató GET kérés
    public function index()
    {
        return view('reviews.index');
    }
}