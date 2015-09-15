<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('companies', 'CompanyController');

Route::get('home', [
    'middleware' => 'auth',
    'as' => 'home',
    'uses' => 'HomeController@home',
]);

// Positions
Route::get('companies/{companyId}/positions/create', [
    'middleware' => 'auth',
    'as' => 'positions.create',
    'uses' => 'PositionController@create',
])->where(['companyId' => '\d+']);

Route::post('companies/{companyId}/positions', [
    'middleware' => 'auth',
    'as' => 'positions.store',
    'uses' => 'PositionController@store',
])->where(['companyId' => '\d+']);

Route::get('positions/{positions}', [
    'middleware' => 'auth',
    'as' => 'positions.show',
    'uses' => 'PositionController@show',
])->where(['id' => '\d+']);

// Authentication routes
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
    'as' => 'logout',
    'uses' => 'Auth\AuthController@getLogout'
]);
