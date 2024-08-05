<?php

namespace App\Http\Controllers;

use App\Models\Product;

class MainController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('main.about');
    }

    /**
     * Display the product page based on slug.
     */
    public function product($slug)
    {
        // Mengambil produk berdasarkan slug
        $product = Product::where('slug', $slug)->firstOrFail();

        // Menampilkan tampilan dengan data produk
        return view('main.product', compact('product'));
    }
}
