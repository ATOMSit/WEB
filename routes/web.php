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

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::prefix('administration')->as('admins.')->middleware(['auth', 'verified'])->group(function () {
    Route::prefix('users')->as('users.')->group(function () {
        Route::get('show/{user}', 'UserController@show')
            ->name('show');
        Route::get('edit/{user}', 'UserController@edit')
            ->name('edit');
        Route::put('update/{user}', 'UserController@update')
            ->name('update');
    });
});