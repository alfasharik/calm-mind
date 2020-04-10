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

Route::resource('thoughts', 'Resources\Thought');

Route::resource('letters', 'Resources\Letter');

Route::get('/', 'Blank@index')->name('blank');

Route::get('/home', 'Home@index')->name('home');

Route::get('/feed/{section?}', 'Feed@show')->name('feed');

Route::get('/blog', 'Blog@index')->name('blog');

Route::get('/about', 'About@index')->name('about');

Route::get('/account/{section?}', 'Account@show')->name('account');

Route::get('/thought/delete/{id}', 'Thought@delete')->name('thought_delete');

Route::get('/letter/delete/{id}', 'Letter@delete')->name('letter_delete');

