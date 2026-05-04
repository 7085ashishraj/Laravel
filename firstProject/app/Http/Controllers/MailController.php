<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function show(){
        return view("emailForm");
    }
    public function sendEmail(Request $request){
        $to_email = $request->input("to");
        $subject = $request->input("subject");
        $message = $request->input("message");
        Mail::to($to_email)->send(new WelcomeMail($subject, $message));
        return "Email Sent Successfully";
    }
}
