<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });


Route::get('/', function () {
    return Inertia::render('Frontend/Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/shop', function () {
    return Inertia::render('Frontend/Shop');
});

Route::get('/cart', function () {
    return Inertia::render('Frontend/Cart');
});

Route::get('/checkout', function () {
    return Inertia::render('Frontend/Checkout');
});

Route::get('/contact', function () {
    return Inertia::render('Frontend/Contact');
});

Route::get('/about-us', function () {
    return Inertia::render('Frontend/About');
});

Route::get('/testimonials', function () {
    return Inertia::render('Frontend/Testimonials');
});


Route::get('/not-found', function () {
    return Inertia::render('Frontend/NotFound');
});


// // after login
// Route::middleware(['auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });


Route::middleware(['auth',])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Backend/Dashboard/Dashboard');
    })->name('dashboard');


    Route::get('/products', function () {
        return Inertia::render('Backend/Products/Products');
    })->name('products');
});
