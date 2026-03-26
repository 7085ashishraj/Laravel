<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    function index(){
        $studentname = "Ashish";
        return view ("studenthome", compact('studentname'));
    }

    function about(){
        $courses=["Python", "Java", "PHP","HTML"];
        return view("aboutpage", compact('courses'));
    }

    function data(){
        $studentdata=[
            ["Name"=>"Ashish","Course"=>"Python","City"=>"Jalandhar"],
            ["Name"=>"Ayush","Course"=>"Java","City"=>"Mohali"],
            ["Name"=>"Mohit","Course"=>"PHP","City"=>"Delhi"],
            ["Name"=>"Ravi","Course"=>"HTML","City"=>"Mumbai"],
            ["Name"=>"Sandeep","Course"=>"CSS","City"=>"Bangalore"],
        ];
        return view("aboutpage", compact('studentdata'));
    }
}
