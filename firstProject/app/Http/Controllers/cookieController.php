<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cookieController extends Controller
{
    function index(Request $request){
        return view("forms.cookieform");
    }
}
