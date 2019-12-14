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
    return view('home');
});
Route::get('/check', function () {
    return view('check');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('login')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.provider.callback');
});
Route::get('/groups/search', 'GroupController@search');
Route::get('/groups/{groupid}/peoples/', 'PeopleController@index');
Route::get('/groups/{groupid}/peoples/create/', 'PeopleController@create');


Route::resource('groups','GroupController');
Route::resource('groups/{groupid}/peoples','PeopleController');


