<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::paginate(4);

        return view('pages.artworks', compact('product'));
    }
}
