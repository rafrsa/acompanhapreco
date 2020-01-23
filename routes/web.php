<?php

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('login/auth', 'LoginController@authUser');
Route::post('login/registerUser', 'LoginController@registerUser');

$router->group(['prefix' => '/', 'middleware' => ['authNew']], function () use ($router) {
    $router->group(['prefix' => 'dash'], function () use ($router) {
        $router->get('/', 'AppController@index');
    });

    $router->group(['prefix' => 'produtos'], function () use ($router) {
        $router->post('listar', 'ProdutoController@index');
    });
});