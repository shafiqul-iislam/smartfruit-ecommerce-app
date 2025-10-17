<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Models\Product;

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


Route::get('/admin/login', function () {
    return Inertia::render('Backend/Auth/AdminLogin');
});

Route::post('/admin-login', [AuthController::class, 'adminLogin'])->name('admin-login');

// after admin login
Route::middleware(['auth:admin',])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Backend/Dashboard/Dashboard');
    })->name('dashboard');


    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);

    Route::get('/user-profile', function () {
        return Inertia::render('Backend/User/Profile');
    })->name('user-profile');

     Route::get('/general-settings', function () {
        return Inertia::render('Backend/Settings/GeneralSettings');
    })->name('general-settings');
});
