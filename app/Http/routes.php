<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('companies', 'CompanyController');

// Positions
Route::get('companies/{companyId}/positions/create', [
    'as' => 'positions.create',
    'uses' => 'PositionController@create',
])->where(['companyId' => '\d+']);

Route::post('companies/{companyId}/positions', [
    'as' => 'positions.store',
    'uses' => 'PositionController@store',
])->where(['companyId' => '\d+']);

Route::get('positions/{id}', [
    'as' => 'positions.show',
    'uses' => 'PositionController@show',
])->where(['id' => '\d+']);
