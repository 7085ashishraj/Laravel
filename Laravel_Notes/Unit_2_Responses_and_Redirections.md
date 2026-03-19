# Unit II: Responses and Redirections

## Laravel Response
All routes and controllers should return a response to be sent back to the user's browser. Laravel provides several ways to return responses.

### Attaching Headers
You can customize the HTTP headers of your response.
```php
Route::get('/custom-response', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain')
                  ->header('X-Custom-Header', 'Ashish');
});
```

### Attaching Cookies
You can attach cookies to the response.
```php
Route::get('/cookie', function () {
    return response('Setting a cookie')->cookie(
        'name', 'Ashish', 60 // Cookie lasts for 60 minutes
    );
});
```

### JSON Response
The `json` method will automatically set the `Content-Type` header to `application/json` and convert the given array to JSON using PHP's `json_encode`.
```php
Route::get('/api/users', function () {
    return response()->json([
        'name' => 'Ashish',
        'status' => 'active'
    ]);
});
```

## Laravel Redirections
Redirect responses are instances of `Illuminate\Http\RedirectResponse`, and contain the proper headers needed to redirect the user to another URL.

**Basic Redirect:**
```php
Route::get('/old-home', function () {
    return redirect('/new-home');
});
```

### Redirecting to Named Routes
If your route has a name, you can redirect to it easily.
```php
Route::get('/dashboard', function () {
    return 'Dashboard';
})->name('dashboard');

Route::get('/login-success', function () {
    return redirect()->route('dashboard');
});
```

### Redirecting to Controller Actions
You can also generate redirects to controller actions.
```php
use App\Http\Controllers\HomeController;

Route::get('/home', function () {
    return redirect()->action([HomeController::class, 'index']);
});
```
