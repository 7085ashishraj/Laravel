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

    function viewFile(){
        $name = "Ashish";
        $city = "Jalandhar";
        $course = "Laravel";
        return view ("data2", compact("name", "city", "course"));
    }
}
