<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/curso/{course:slug}', 'course')->name('course');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
