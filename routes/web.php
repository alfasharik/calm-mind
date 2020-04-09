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

Route::get('/', 'Blank@index')->name('blank');

Route::get('/home', 'Home@index')->name('home');

Route::get('/letter/add', 'Letter@form')->name('letter');

Route::get('/thought/add', 'Thought@form')->name('thought');

Route::get('/feed/{section?}', 'Feed@show')->name('feed');

Route::get('/blog', 'Blog@index')->name('blog');

Route::get('/about', 'About@index')->name('about');

Route::get('/account/{section?}', 'Account@show')->name('account');

Route::post('/thought/add', 'Thought@add')->name('thought_add');

Route::get('/thought/delete/{id}', 'Thought@delete')->name('thought_delete');

Route::post('/letter/add', 'Letter@add')->name('letter_add');

Route::get('/letter/delete/{id}', 'Letter@delete')->name('letter_delete');

