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

Route::resource('companies', 'CompanyController');

// Positions
Route::get('companies/{companyId}/positions/create', [
    'as' => 'positions.create',
    'uses' => 'PositionController@create',
]);

Route::post('companies/{companyId}/positions', [
    'as' => 'positions.store',
    'uses' => 'PositionController@store',
]);

Route::get('positions/{id}', [
    'as' => 'positions.show',
    'uses' => 'PositionController@show',
]);
