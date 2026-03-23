<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\courseCheck;
use App\Http\Middleware\age_check;
use App\Http\Middleware\country_check;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //$middleware->append(courseCheck::class);
        //$middleware->append(age_check::class);
        $middleware->append(country_check::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
