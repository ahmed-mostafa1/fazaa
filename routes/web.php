<?php

use App\Http\Controllers\Admin\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $features = \App\Models\Feature::all();
    
    $footerSettings = \App\Models\Setting::getValue('footer', [
        'description' => 'خدمات حكومية متخصصة نهدف لتبسيط الإجراءات وتوفير الوقت والمجهود على عملائنا الكرام.',
        'copyright_text' => 'جميع الحقوق محفوظة &copy; 2023 مكتب فزعة للخدمات الحكومية',
        'developer_text' => 'تطوير وتنفيذ نظام سوفت',
        'developer_link' => 'https://wa.me/201097155272',
    ]);
    
    $socialLinks = \App\Models\SocialLink::all();

    return view('index', compact('features', 'footerSettings', 'socialLinks'));
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

        Route::get('/news-ticker', [ContentController::class, 'newsTicker'])->name('newsTicker');
        Route::post('/news-ticker', [ContentController::class, 'updateNewsTicker'])->name('newsTicker.update');

        Route::get('/password', [\App\Http\Controllers\Admin\AuthController::class, 'showPassword'])->name('password');
        Route::post('/password', [\App\Http\Controllers\Admin\AuthController::class, 'updatePassword'])->name('password.update');

        Route::get('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

        // Feature CRUD
        Route::resource('features', \App\Http\Controllers\Admin\FeatureController::class);

        // Footer Management
        Route::get('/footer', [\App\Http\Controllers\Admin\FooterController::class, 'index'])->name('footer.index');
        Route::post('/footer/settings', [\App\Http\Controllers\Admin\FooterController::class, 'updateSettings'])->name('footer.updateSettings');
        Route::post('/footer/social', [\App\Http\Controllers\Admin\FooterController::class, 'storeSocial'])->name('footer.storeSocial');
        Route::delete('/footer/social/{socialLink}', [\App\Http\Controllers\Admin\FooterController::class, 'destroySocial'])->name('footer.destroySocial');
    });
});
