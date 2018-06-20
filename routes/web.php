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

// Route for the homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/log-in', 'SessionController@create')->name('login');
Route::post('/log-in', 'SessionController@store')->name('log-in');
Route::get('logout', 'SessionController@destroy')->name('logout');

Route::get('/user-registration', 'RegistrationController@create')->name('user-registration');
Route::post('/user-registration', 'RegistrationController@store');

Route::get('/view-data', 'RecordsController@index')->name('viewData'); // viewing all of the entries of data
Route::get('/view-data/{id}', 'RecordsController@show')->name('singleRecord'); //viewing one specific entry, using the hyperlink from the view
Route::get('/import-data', 'RecordsController@view')->name('dataImport');
Route::post('/view-data', 'RecordsController@store')->name('storeData');

Auth::routes();





