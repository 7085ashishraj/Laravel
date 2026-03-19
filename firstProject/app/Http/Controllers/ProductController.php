<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return "Welcome to the controller";
    }

    function about(){
        return "This is a about page";
    }
}
