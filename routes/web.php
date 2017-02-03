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

// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

// event(new App\Events\UserHasRegistered);

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

Route::get(
    'admin',
    [
        'middleware' => 'admin:PatriqueOuimet',
        function () {
            return 'Hello Patrique';
        }
    ]
);

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.'
    ],
    function () {
        Route::get(
            'home',
            [
                'as' => 'home',
                function () {
                    return 'some view';
                }
            ]
        );
    }
);
Auth::routes();

Route::get('/home', 'HomeController@index');
