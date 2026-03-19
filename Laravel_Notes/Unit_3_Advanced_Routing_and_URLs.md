# Unit III: Advanced Routing and URLs

## Advanced Routing

### Named Routes
Named routes allow the convenient generation of URLs or redirects for specific routes.
```php
Route::get('/user/profile', function () {
    //
})->name('profile');

// Using the name
$url = route('profile');
return redirect()->route('profile');
```

### Parameter Constraints
You can constrain the format of your route parameters using regular expressions.
```php
Route::get('/user/{name}', function ($name) {
    // Only completely alphabetic characters allowed
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}', function ($id) {
    // Only numbers allowed
})->where('id', '[0-9]+');
```

### Route Groups and Route Prefixing
Route groups allow you to share route attributes, such as middleware or prefixes, across a large number of routes.
```php
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('/posts', function () {
        // Matches The "/admin/posts" URL
    });
});
```

### Domain Routing
You can route based on the subdomain of the requested URL.
```php
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
```

---

## URL Generation

### The Current URL
You can access the current URL of the request using the `url` helper without parameters.
```php
$currentUrl = url()->current();    // http://localhost:8000/hello
$fullUrl = url()->full();          // http://localhost:8000/hello?query=string
$previousUrl = url()->previous();  // The previous URL the user generated
```

### Generating Framework URLs
You can generate URLs to routes in your application using the `url` helper:
```php
$url = url('/posts'); // http://localhost:8000/posts
```

### Asset URLs
You can use the `asset` helper to generate URLs for public assets such as images, CSS, or JS files.
```html
<img src="{{ asset('img/logo.png') }}" alt="Logo">
<!-- Outputs: http://localhost:8000/img/logo.png -->
```

### Generation Shortcuts
Blade provides shortcuts to generate URLs directly in your templates.
```html
<!-- Named Route Shortcut -->
<a href="{{ route('profile', ['id' => 1]) }}">View Profile</a>

<!-- URL Shortcut -->
<a href="{{ url('/about') }}">About Us</a>
```
