<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Envio de parametro
$router->get('user', function () use ($router) {
    return "HOLA MUNDO";

});

//Recibe parametro
$router->get('user/{id}', function ($id) {
    return 'User '.$id;
});

$router->post('user123', function () {
    return 'Primer prueba de json';
});

$router->get('home', function () {
    return 'HOME';
});


$router->post('/login','LoginController@index');
$router->post('/register','UserController@register');
$router->post('/user/{id}',['middleware' => 'auth', 'user' => 'UserController@getUser']);
