<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

event(new App\Events\UserHasRegistered);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/other', function () {
    return view('other');
});

Route::post('search-results', function () {
    return sprintf('Search results for "%s"', Request::input('search'));
});

Route::get('posts', function () {
    return view('posts')->with('posts', App\Post::all());
});