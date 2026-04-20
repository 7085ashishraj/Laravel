<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function show(){
        return view('file');
    }  
    
    public function store(Request $request){
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
        ]);
        
        // $imageName = time().'projectImage'.$request->file("image")->getClientOriginalExtension();

        // $request->file("image")->storeAs("images", $imageName);
        // return "Image Uploaded Successfully";

        $filr = $request->file("image");
        $filename = time().'projectImage.'.$filr->getClientOriginalExtension();
        $filr->move(public_path("uploads"), $filename);
        return back()->with("success", "Image Uploaded Successfully")->with("image", $filename);
        
    }
}
