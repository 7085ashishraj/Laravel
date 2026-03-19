# Unit II: Views

## Understanding Views in Laravel
Views separate your application logic (controllers) from your presentation logic (HTML). Views are stored in the `resources/views` directory and typically use the `.blade.php` extension.

**Example (`resources/views/welcome.blade.php`):**
```html
<html>
    <body>
        <h1>Welcome to Laravel!</h1>
    </body>
</html>
```

Returning this view from a route:
```php
Route::get('/', function () {
    return view('welcome');
});
```

## Passing Data to Views
You can pass an array of data to views so they can display dynamic content.

**Example:**
```php
// In routes/web.php or a Controller
Route::get('/profile', function () {
    $name = "Ashish";
    $age = 22;
    
    // Passing data using an array
    return view('profile', ['name' => $name, 'age' => $age]);
    
    // Alternatively, using the compact() function:
    // return view('profile', compact('name', 'age'));
});
```

**In `resources/views/profile.blade.php`:**
```html
<h1>User Profile</h1>
<p>Name: {{ $name }}</p>
<p>Age: {{ $age }}</p>
```

## Sharing Data with all Views
If you need a piece of data to be available in *every* view across your application, you can use the `View::share` method, typically inside the `boot` method of `App\Providers\AppServiceProvider`.

**Example:**
```php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Now $siteName is available in all blade files
        View::share('siteName', 'My Awesome App');
    }
}
```
