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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider');
Route::get('{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('administration')->as('admins.')->middleware(['auth'])->group(function () {
    Route::prefix('users')->as('users.')->group(function () {
        Route::get('show/{user}', 'UserController@show')
            ->name('show');
        Route::get('edit/{user}', 'UserController@edit')
            ->name('edit');
        Route::put('update/{user}', 'UserController@update')
            ->name('update');
    });
});