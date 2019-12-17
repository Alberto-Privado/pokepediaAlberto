<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@index');
Auth::routes();

Route::get('home', function () {
    return redirect('/');
});

Route::resource('pokemon', 'PokemonController');


Route::resource('ability', 'AbilityController');


Route::resource('post', 'PostController');


Route::resource('Comment', 'CommentController');


Route::resource('AbilityPokemon', 'AbilityPokemonController');