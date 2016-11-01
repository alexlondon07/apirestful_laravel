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

// create, update (GET) no son necesarios ya que estos se encargan sólo de mostrar un formulario o una vista,
// por lo cual tal vez la mejor opción sería excluir estas rutas;
Route::resource('user', 'UserController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
