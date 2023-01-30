<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $mail = 'itsrahul880@gmail.com';
	    Mail::to($mail)->send(new TestMail);

	dd('Mail Send Successfully !!');
        return view('frontend.home', compact('products'));
    }
}
