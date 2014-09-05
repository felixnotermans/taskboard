<?php

Route::get('/', function()
{
	return View::make('/');
});

//Route::controller('users', 'UsersController');


Route::get('users/register', ['as' => 'users.register', 'uses' => 'Userscontroller@getRegister']);

Route::post('users/login', ['as' => 'users.login', 'uses' => 'Userscontroller@postCreate']);

Route::get('users/login', 'UsersController@login');

Route::get('/', 'HomeController@showWelcome')->before('auth');

Route::post('users/signin', 'UsersController@signIn');

Route::get('users/taskboard', ['as' => 'users.taskboard', 'uses' => 'TasksController@showTaskboard'])->before('auth');

Route::get('users/logout', 'UsersController@logout');



//Route::get()
//Route::post()
//Route::put()
//Route::patch()
//Route::delete();

//Route::resource();

// GET  /users          UsersController@index      users.index         // Weergeven van 'alle' users
// GET  /users/{userid} UsersController@show       users.show          // Weergeven van 1 user   public function show($userid)
// GET  /users/create   UsersController@create     users.create        // Weergevan van het 'aanmaak' formulier
// POST /users          UsersController@store      users.store         // Opslaan van de nieuwe user in database
// GET  /users/{id}/edit UsersController@edit      users.edit          // Weergevan van het 'wijzig' formulier
// PUT  /users/{id}     UsersController@update     users.update        // Wijzigen van de user in database
// DELETE  /users/{id}  UsersController@destroy    users.destroy       // Verwijderen van user