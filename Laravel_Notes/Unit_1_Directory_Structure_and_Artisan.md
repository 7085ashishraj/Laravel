# Unit I: Directory Structure and Artisan

## Directory/Application Structure
A fresh Laravel application contains many directories, but the most important ones for beginners are:
- `app/`: Contains the core code of your application (Models, Controllers).
- `routes/`: Contains all route definitions (`web.php` for web routes, `api.php` for API routes).
- `resources/`: Contains views (`resources/views`), raw assets like LESS/SASS, and language files.
- `database/`: Contains database migrations, factories, and seeders.
- `public/`: The document root for your application. It contains the `index.php` file, images, CSS, and JS files.
- `config/`: Contains all of your application's configuration files.
- `.env`: Environment variables file (database credentials, app settings, etc.).

## Artisan
Artisan is the command-line interface included with Laravel. It provides a number of helpful commands that can assist you while you build your application.

**Examples of Useful Artisan Commands:**

1. **List all available artisan commands:**
```bash
php artisan list
```

2. **Create a new Controller:**
```bash
php artisan make:controller UserController
```

3. **Create a new Model with a migration file:**
```bash
php artisan make:model Product -m
```

4. **Clear application cache:**
```bash
php artisan cache:clear
```
