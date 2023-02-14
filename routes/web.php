<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//   $team = [
//     [
//       'name' => 'Mario'
//     ],
//     [
//       'name' => 'Marco'
//     ],
//     [
//       'name' => 'Marcello'
//     ],
//   ];
//   return view('home', [
//! Per passare i dati alla vista possiamo usare il metodo di php compact()
//     "team" => $team,
//     'h1' => 'La mia prima vista con Blade',
//     'contact' => [
//       'text' => 'Contact',
//       'href' => '/contact'
//     ]
// ]);
/**
 ** Secondo metodo per passare un parametro alla view
 *@ return view('home')
 *@ ->with('team',$team)
 *@ ->with('h1','La mia prima vista con)
 **/
// });

// ->name sostituisce l'indirizzo url con un nome stabilito da noi per poter
// richiamare la route
Route::get('/', 'HomeController@index')->name('home.index');
// per convenzione i nomi dei controller devono essere al singolaere e in 
// PascalCase
Route::get('/comics', 'ComicController@index')->name('comics.index');


// questa è una rotta dinamica, {id} viene passato attraverso la funzione 
// route{} nell'componente comics.
Route::get('/comics/{id}', 'ComicController@show')
  // ->Where permette di fare un controllo sul parametro passato
  // con una espressione regolare, in questo caso {id} dovrà sempre 
  // essere un numero da 1-9, il + significa che potranno essercene più di 1.
  // controllo su stringhe:
  //->Where('stringa', '[A-Za-z]+')
  ->where('id', '[0-9]+')
  // ->name sta dando un nome alla route comics/{id}
  ->name('comics.show');
