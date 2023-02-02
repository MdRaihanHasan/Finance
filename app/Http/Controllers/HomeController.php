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

        return view('frontend.home', compact('products'));
    }

    public function show($id)
    {
        # code...
    }
}






        // $mail = 'itsrahul880@gmail.com';
        // Mail::to($mail)->send(new TestMail($products));


        // $data["email"] = "itsrahul880@gmail.com";
        // $data["title"] = "You have Received New Document";
        // $data["form_id"] = $input['form_id'];
        // $data["user_id"] = $input['user_id'];
        // $data["note_text"] = $input['note_text'];
        // $data["image"] = $input['image'];
        // $data["loans_details"] = $loans_details;

        // $files = [
        //     public_path('/storage/documents/' . $input['image']),
        // ];

        // Mail::send('email_templates.document_mail', $data, function($message)use($data, $files, $input) {
        //     $message->to($data["email"], $data["email"])
        //             ->subject($data["title"]);

        //     foreach ($files as $file){
        //         $message->attach($file);
        //     }

        // });

        // dd('Mail Send Successfully !!');
