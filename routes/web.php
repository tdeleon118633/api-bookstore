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
//$router->post('/user/{id}',['middleware' => 'auth', 'user' => 'UserController@getUser']);


//$router->post('/author','AuthorController@index');
//MUESTRA LOS AUTORES
$router->post('/authors','AuthorController@showAllAuthors');
$router->get('authors/{id}','AuthorController@showOneAuthor');
$router->post('authors','AuthorController@create');
$router->delete('authors/{id}','AuthorController@delete');
$router->put('authors/{id}','AuthorController@update');

//$router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);
//$router->post('/register','UserController@register');
//$router->post('/user/{id}',['middleware' => 'auth', 'user' => 'UserController@getUser']);

//LIBROS
$router->post('/Book/all','BookController@showAllBook');
$router->get('Book/{id}','BookController@showOneBook');
$router->post('Book','BookController@create');
$router->delete('Book/{id}','BookController@delete');
$router->put('Book/{id}','BookController@update');

//CATEGORIAS
$router->post('/Category/all','CategoryController@showAllBook');
$router->get('Category/{id}','CategoryController@showOneBook');
$router->post('Category','CategoryController@create');
$router->delete('Category/{id}','CategoryController@delete');
$router->put('Category/{id}','CategoryController@update');

//CATEGORIAS
$router->post('/book_issued_detail/all','BookIssuedDetailsController@showAllBook');
$router->get('book_issued_detail/{id}','BookIssuedDetailsController@showOneBook');
$router->post('book_issued_detail','BookIssuedDetailsController@create');
$router->delete('book_issued_detail/{id}','BookIssuedDetailsController@delete');
$router->put('book_issued_detail/{id}','BookIssuedDetailsController@update');
