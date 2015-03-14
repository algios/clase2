<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('prueba');
});

Route::controller('personal','PersonalController');

Route::controller('Clase2','Clase2Controller');
