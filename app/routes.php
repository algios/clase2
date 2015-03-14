<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('prueba');
});

Route::get('/test', function()
{
	return View::make("index");
});


Route::controller('personal','PersonalController');

Route::controller('clase','Clase2Controller');
