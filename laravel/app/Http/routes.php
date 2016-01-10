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
//On a retourne dans le Linkcontroller.php
Route::get('/',[
    'as'=>'listtaches',
    'uses'=>'LinkController@listtaches',
    'middleware' => 'auth'
]);
Route::get('/apropos',[
    'as'=>'apropos',
    'uses'=>'LinkController@apropos'
	'middleware' => 'auth'
	
]);
Route::get('/inscription',[
    'as'=>'inscription',
    'uses'=>'LinkController@inscription'
]);

Route::get('/listtaches',[
    'as'=>'listtaches',
    'uses'=>'LinkController@listtaches',
    'middleware' => 'auth'
]);
Route::post('/ajouttache',[
    'as'=>'ajouttache',
    'uses'=>'LinkController@ajouttache',
    'middleware' => 'auth'
]);
Route::post('/modiftache',[
    'as'=>'modiftache',
    'uses'=>'LinkController@modiftache',
    'middleware' => 'auth'
]);
Route::post('/supprimertache',[
    'as'=>'supprimertache',
    'uses'=>'LinkController@supprimertache',
    'middleware' => 'auth'
]);
Route::post('/ajoutsoustache',[
    'as'=>'ajoutsoustache',
    'uses'=>'LinkController@ajoutsoustache',
    'middleware' => 'auth'
]);
Route::post('/modifsoustache',[
    'as'=>'modifsoustache',
    'uses'=>'LinkController@modifsoustache',
    'middleware' => 'auth'
]);
Route::post('/supprimersoustache',[
    'as'=>'supprimersoustache',
    'uses'=>'LinkController@supprimersoustache',
    'middleware' => 'auth'
]);
Route::post('/valideroustache',[
    'as'=>'valideroustache',
    'uses'=>'LinkController@valideroustache',
    'middleware' => 'auth'
]);
Route::post('/validertache',[
    'as'=>'validertache',
    'uses'=>'LinkController@validertache',
    'middleware' => 'auth'
]);


//Routes pour l'enregistrement
Route::get('auth/register', [
    'as' => 'getRegister',
    'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
    'as' => 'postRegister',
    'uses' => 'Auth\AuthController@postRegister'
]);
//routes pour l'authentification
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

//Route de déconnexion
Route::get('auth/logout', 'Auth\AuthController@getLogout');