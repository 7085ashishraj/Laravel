<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        return view('user');
    }

    public function submit(Request $request){

        //form validation   
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'contact' => 'required|numeric',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $city = $request->input('city');
        $contact = $request->input('contact');

        return view("result", compact('name', 'email', 'city', 'contact'));
    }
}
