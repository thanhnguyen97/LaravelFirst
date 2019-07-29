<?php

Route::view('/', 'home');

Route::get('contact', 'contactFormController@create');
Route::post('contact', 'contactFormController@store');

Route::view('/about', 'about');
//
//Route::get('/customers','customersController@index');
//
//Route::get('/customers/create','customersController@create');
//
//Route::post('customers', 'customersController@store');
//
//Route::get('/customers/{customer}', 'customersController@show');
//
//Route::get('/customers/{customer}/edit', 'customersController@edit');
//
//Route::patch('/customers/{customer}', 'customersController@update');
//
//Route::delete('/customers/{customer}', 'customersController@destroy');

Route::resource('customers', 'customersController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
