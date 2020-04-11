<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::resource('thoughts', 'Resources\Thought')
        ->except(['show', 'index', 'edit', 'update']);

    Route::resource('letters', 'Resources\Letter')
        ->except(['show', 'index', 'edit', 'update']);

    Route::get('/blog', 'Blog@index')->name('blog');

    Route::get('/feed/{section?}', 'Feed@show')->name('feed');

    Route::get('/account/{section?}', 'Account@show')->name('account');
});

Route::get('/', 'Blank@index')->name('blank');

Route::get('/home', 'Home@index')->name('home');

Route::get('/about', 'About@index')->name('about');

