<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('companies', 'CompanyController');
Route::resource('companies.questionnaires', 'QuestionnaireController');

Route::get('home', [
    'middleware' => 'auth',
    'as' => 'home',
    'uses' => 'HomeController@home',
]);

// Positions
Route::resource('companies.positions', 'PositionController', [
    'only' => ['index', 'create', 'store', 'show']
]);

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
