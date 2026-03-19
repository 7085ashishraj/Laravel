# Unit III: Controllers

## Basic Controllers - Creating Controllers
Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using Controller classes.

To generate a controller, use the Artisan command:
```bash
php artisan make:controller UserController
```

**Example (`app/Http/Controllers/UserController.php`):**
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return "Showing profile for user: " . $id;
    }
}
```

## Controller Routing
You route to a controller method by specifying the class and the method name in an array.

**Example (`routes/web.php`):**
```php
use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show']);
```

## Controller Middleware
Middleware can be assigned to the controller's routes in your route files, or specified within the controller's constructor.

**Example (Inside the Controller Constructor):**
```php
class UserController extends Controller
{
    public function __construct()
    {
        // Apply middleware to all methods
        $this->middleware('auth');
        
        // Apply middleware to only specific methods
        $this->middleware('log')->only('index');
        
        // Apply middleware to all except specific methods
        $this->middleware('subscribed')->except('store');
    }
}
```

## Restful Resource Controllers
Laravel resource routing assigns the typical "CRUD" (Create, Read, Update, Delete) routes to a controller with a single line of code.

To create a Resource Controller:
```bash
php artisan make:controller PhotoController --resource
```
This generates a controller with methods: `index`, `create`, `store`, `show`, `edit`, `update`, `destroy`.

Route registration:
```php
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
```
