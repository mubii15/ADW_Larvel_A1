<?php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('employee','EmployeeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create/ticket','TicketController@create');
Route::post('/create/ticket','TicketController@store');
Route::get('/tickets', 'TicketController@index');
Route::get('/edit/ticket/{id}','TicketController@edit');
Route::post('/edit/ticket/{id}','TicketController@update');
Route::delete('/delete/ticket/{id}','TicketController@destroy');