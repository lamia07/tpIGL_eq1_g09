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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', function () {
return view('inscription');
});

Route::post('/inscription', function () {
   /** return 'Formulaire reçu';*/
});

Route::post('/inscription', function () {
 
$Utilisateur = new App\Utilisateur;
$Utilisateur->email = request('email');
$Utilisateur->nom = request('nom');
$Utilisateur->prenom = request('prenom');
$Utilisateur->groupe = request('groupe');
$Utilisateur->matricule = request('matricule');

$Utilisateur->save();

   return 'Votre email est ' . request('email');
});Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

