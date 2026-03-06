<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile-modern');
});

Route::get('/blog', function () {
    return view('blog-modern');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/discussions', function () {
    return view('discussions-modern');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/swot', function () {
    return view('swot');
});

Route::get('/company-safari', function () {
    return view('company-safari');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
