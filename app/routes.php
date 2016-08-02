<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('showAllCategory','HomeController@showAllCategory');

Route::get('createCategory','HomeController@getCategories');

Route::post('addAction','HomeController@fillCategories');

Route::get('editCategory','HomeController@editCategory');

Route::get('deleteCategory','HomeController@deleteCategory');

Route::post('editAction','HomeController@editAction');

