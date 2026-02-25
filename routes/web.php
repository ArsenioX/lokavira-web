<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});

//paket
Route::get('/paket', function () {
    return view('paket');
})->name('paket');

Route::get('/paket/instagram', function () { return view('paket.instagram'); })->name('paket.instagram');
Route::get('/paket/tiktok', function () { return view('paket.tiktok'); })->name('paket.tiktok');
Route::get('/paket/youtube', function () { return view('paket.youtube'); })->name('paket.youtube');
Route::get('/paket/full', function () { return view('paket.full'); })->name('paket.full');

Route::get('/website', function () {
    return view('website');
})->name('website');

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/send-message', [ContactController::class, 'send'])->name('send.message');