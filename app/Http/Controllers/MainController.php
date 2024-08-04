<?php

namespace App\Http\Controllers;

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
     * Display the product page.
     */
    public function product()
    {
        return view('main.product');
    }
}
