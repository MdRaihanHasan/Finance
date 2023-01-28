<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Product::all();
        return view('frontend.home', compact('posts'));
    }
}
