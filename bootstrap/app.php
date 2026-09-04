<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Register custom admin middleware alias
        // Uses the router to add a named middleware alias 'admin' mapped to our middleware class.
        // This avoids needing app/Http/Kernel.php modification in this project's bootstrap configuration.
        app('router')->aliasMiddleware('admin', \App\Http\Middleware\AdminAreaMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
