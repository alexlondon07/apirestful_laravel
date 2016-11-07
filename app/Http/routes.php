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


//Get access_token
Route::post('oauth/access_token', function() {
 return Response::json(Authorizer::issueAccessToken());
});


//Routes Api
Route::group(array('prefix' => 'api/v1', 'middleware' => 'cors'), function() {
    //USER
    Route::resource('users', 'UserController',
                    ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

    //PRODUCT
    Route::resource('products', 'ProductController',
                    ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

});
