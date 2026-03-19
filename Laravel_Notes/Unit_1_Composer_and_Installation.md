# Unit I: Composer and Installation

## Introduction to Composer
Composer is a dependency manager for PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you. Laravel utilizes Composer to manage its dependencies.

## Latest Composer Installation
To install Composer on Windows, you can download the `Composer-Setup.exe` from [getcomposer.org](https://getcomposer.org/) and run the installer. For Linux/Mac, you can run the installation scripts available on their website.

**Example command to check if Composer is installed:**
```bash
composer -v
```

## Latest Laravel Installation
Once Composer is installed, you can create a new Laravel project using either the Laravel Installer or Composer itself.

**Example (Using Composer):**
```bash
composer create-project laravel/laravel my-first-project
```

**Example (Using Laravel Installer):**
```bash
composer global require laravel/installer
laravel new my-first-project
```

After installation, you can start the development server:
```bash
cd my-first-project
php artisan serve
```
This will start the server at `http://localhost:8000`.
