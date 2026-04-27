<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        return view('studentinfo');    
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|numeric',
        ],[
            'name.required' => 'Please enter your name',
            'course.required' => 'Please enter your course',
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter a valid email address',
            'phone.required' => 'Please enter your phone number',
            'phone.numeric' => 'Phone number must be numeric',
        ]);
        //return $request->all();
        $name = $request->input('name');
        $course = $request->input('course');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $btn = $request->input('btn');
        return view('studentinfo', compact('name', 'course', 'email', 'phone', 'btn'));    

    }
}
