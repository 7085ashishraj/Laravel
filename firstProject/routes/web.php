<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

// Route::view('/home', 'home');
// Route::view('/', 'welcome');

// Route::get('/about/{name}', function($name){
//     echo $name;
//     return view('about'); localhost:8000/about/ashish
// });

Route::get('/about/{name}', function($name){
    return view('about', ['name'=>$name]);
});

//Redirection
Route::redirect('/home', '/');//redirect the home page to root page

//In class cookie->header-> and JSON done

Route::get("list",function(){
    return "This is a list page";
});

Route::get("product",function(){
    return redirect("list");
});

//set header
Route::get("headerPage", function(){
    return response("Header Added")
    ->header("ProjectName","Laravel Headers")
    ->header("Content-Type","text/plain")
    ->header("AuthorName","Ashish");
});
//set cookie
Route::get("productCookie", function(){
    return response("Cookie-Set")->cookie("username", "LPU", 60);
});
//get cookie
use Illuminate\Http\Request;
Route::get("getproductcookie", function(Request $request){
    return $request->cookie("username");
});
//delete cookie
Route::get("deleteproductCookie", function(){
    return response("Cookie Deleted")->cookie("username", null , -1);
});

//anchor tag

Route::get("productpage", function(){
    return view("product");
});

Route::get("contactpage", function(){
    return view("contact");
});

Route::get("listpage", function(){
    return view("list");
});
Route::get("dashboard", function(){
    return view("dashboard");
});

Route::get("/names/{name}",function($name){
    return "this is name page: " .$name;
});

//json response
Route::get("/jsondata/",function(){
    return response()->json(["Name"=>"Ashish", "Course"=>["Laravel","Python","Java"], "City"=>"Jalandhar"]);
});

//cookie response
Route::get("/setcookiedata/",function(){
    return response("Cookie Set")->cookie("username", "Laravel", 60);
});

Route::get("/getcookiedata/",function(Request $request){
    return $request->cookie("username");
});

Route::get("deleteproductCookie", function(){
    return response("Cookie Deleted")->cookie("username", null , -1);
});


//Named Route

Route::get("/admin/student/index", function(){
    return view("student");
})->name("si");

Route::get("/admin/teacher/index", function(){
    return view("teacher");
})->name("ti");

Route::get("/admin/others/index", function(){
    return view("others");
})->name("oi");

//Redirect using named route
Route::get("/admin/product/index",function(){
    return "this is product home page";
})->name("op");

Route::get("/admin/product/home",function(){
    return redirect()->route("op");
});

//Controllers, Blade and Advanced Routing

 use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;

 Route::get("/firstController", [ProductController::class, "index"]);
 Route::get("/aboutController", [ProductController::class, "about"]);
 Route::get("/viewfile", [ProductController::class, "viewfile"]);

 Route::get("course",function(){
    return view("course");
 });

 Route::get("age",function(){
    return view("age");
 });

 Route::get("country",function(){
    return view("country");
 });

 //Group middleware
//without registering middleware in app.php
 use App\Http\Middleware\age_check;

 Route::get("about",function(){
    return "Welcome to authentication Page";
 })->middleware(age_check::class);

 //getting Image at webPage
 Route::get("getImage", function(){
    return view("image");
 });


//Using Controller:-

//  Route::get("studenthome", function(){
//     $studentname = "Aditya";
//     return view("studenthome", compact("studentname"));
//  });

use App\Http\Controllers\bladeController;
//Route::get("studenthome",[bladeController::class, "index"]);
//Route::get("aboutpage",[bladeController::class, "about"]);
Route::get("aboutpage",[bladeController::class, "data"]);

//route ->controller->blade




















