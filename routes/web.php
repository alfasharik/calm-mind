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

Route::get('/home', 'Home@index')->name('home');

Route::get('/', 'Blank@index')->name('blank');

Route::get('/letter', 'Letter@index')->name('letter');

Route::get('/thought', 'Thought@index')->name('thought');

Route::get('/feed', 'Feed@index')->name('feed');

Route::get('/blog', 'Blog@index')->name('blog');

Route::get('/about', 'About@index')->name('about');

Route::post('/api/thought/add', 'Thought@add')->name('thought_add');

Route::post('api/letters/add', 'Letter@add')->name('letter_add');
