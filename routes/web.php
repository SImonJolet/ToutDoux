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

Route::get('/{vue_capture?}', function () {

return view('welcome');

})->where('vue_capture', '[\/\w\.-]*'); 

//Ici, on crée une route qui, peut impotre ce qu'on met dans la requête HTTP après le slash, nous renvoie sur le blade "welcome".
//C'est grâce à ça que on crée un site "single-page", c'est à dire qui ne va pas se régénérer à chaque opération, avec le rechargement de la page qui mettrait du temps.