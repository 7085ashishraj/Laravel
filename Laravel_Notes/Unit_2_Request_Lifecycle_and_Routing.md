# Unit II: Request, Routing & Responses

## Laravel Request Lifecycle
1. **public/index.php**: All requests enter your application through this file.
2. **HTTP / Console Kernels**: The request is sent to the HTTP kernel which passes it through middleware.
3. **Service Providers**: Next, service providers are booted, which configure the framework components (database, routing, etc.).
4. **Routing**: The request is handed off to the router, which dispatches the request to a route or controller.
5. **Response**: A response is returned back through the middleware and printed to the user's browser.

## Basic Routing
Routing allows you to define application URLs and point them to specific logic.

**Example (`routes/web.php`):**
```php
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});
```

## Routing Parameters
You can capture segments of the URI within your route.

**Required Parameters:**
```php
Route::get('/user/{id}', function ($id) {
    return 'User ID: ' . $id;
});
```

**Optional Parameters:**
You can make a parameter optional by adding a `?` and providing a default value.
```php
Route::get('/post/{title?}', function ($title = 'No Title') {
    return 'Post Title: ' . $title;
});
```
