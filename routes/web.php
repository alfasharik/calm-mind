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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/kek', function () {
    return view('laravelAuth.register');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/letter', function () {
    return view('pages.letter');
});

Route::get('/thought', function () {
    return view('pages.thought');
});

Route::get('/feed', function () {
    return view('pages.feed');
});

Route::get('/blog', function() {
   return view('pages.blog');
});

Route::get('/about', function () {
   return view('pages.about');
});

Route::get('/test', function() {
    dd(DB::select('select * from users'));
});
