<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicationController extends Controller
{
    function index(Request $request){
        //print_r($request->all());
        return view("forms.application");
    }

    function submit(Request $request){
        return "Form Submitted. Name: ".$request->name." Email: ".$request->email;
    }
}
