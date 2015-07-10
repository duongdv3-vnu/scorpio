<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/auth/register/finish', function () {
    return view('auth/register_finish');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*
 * Only authenticated user can access this area
 */
Route::get('/home', ['middleware' => 'auth', function(){
    return view('home');
}]);