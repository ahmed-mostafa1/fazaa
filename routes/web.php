<?php

use App\Http\Controllers\Admin\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.submit');

    Route::middleware('admin')->group(function () {
        Route::get('/', [ContentController::class, 'dashboard'])->name('dashboard');

        Route::get('/hero', [ContentController::class, 'hero'])->name('hero');
        Route::post('/hero', [ContentController::class, 'updateHero'])->name('hero.update');

        Route::get('/about', [ContentController::class, 'about'])->name('about');
        Route::post('/about', [ContentController::class, 'updateAbout'])->name('about.update');

        Route::get('/steps', [ContentController::class, 'steps'])->name('steps');
        Route::post('/steps', [ContentController::class, 'updateSteps'])->name('steps.update');

        Route::get('/services', [ContentController::class, 'services'])->name('services');
        Route::post('/services', [ContentController::class, 'updateServices'])->name('services.update');

        Route::get('/contact', [ContentController::class, 'contact'])->name('contact');
        Route::post('/contact', [ContentController::class, 'updateContact'])->name('contact.update');

        Route::get('/password', [\App\Http\Controllers\Admin\AuthController::class, 'showPassword'])->name('password');
        Route::post('/password', [\App\Http\Controllers\Admin\AuthController::class, 'updatePassword'])->name('password.update');

        Route::get('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    });
});
