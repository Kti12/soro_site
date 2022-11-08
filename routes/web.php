<?php

use App\Http\Controllers\exControllers;
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

Route::get('/', 'App\Http\Controllers\exController@index')->name('welcome');
Route::get('/nounou', 'App\Http\Controllers\exController@show')->name('nounou');
Route::post('/nounou', 'App\Http\Controllers\exController@show1')->name('nounou1');
Route::get('/ménagère', 'App\Http\Controllers\exController@voir')->name('ménage');
Route::post('/ménagère', 'App\Http\Controllers\exController@voir1')->name('ménage1');
Route::get('/cuisinière', 'App\Http\Controllers\exController@montrer')->name('cuisine');
Route::post('/cuisinière', 'App\Http\Controllers\exController@montrer1')->name('cuisine1');
Route::get('/contact', 'App\Http\Controllers\exController@contact')->name('contact');
Route::get('/aide', 'App\Http\Controllers\exController@aide')->name('aide');
Route::get('/inscription', 'App\Http\Controllers\exController@inscrit')->name('inscrit');
Route::get('/connexion', 'App\Http\Controllers\exController@se_connecter')->name('connexion');
Route::post('/connexion', 'App\Http\Controllers\exController@se_connecter2')->name('connexion2');
Route::get('/connexion_employeur', 'App\Http\Controllers\exController@connect')->name('connect');
Route::post('/connexion_employeur', 'App\Http\Controllers\exController@connecte')->name('connecte');
Route::get('/connexion_servante', 'App\Http\Controllers\exController@connect1')->name('connect1');
Route::get('/après_connexion', 'App\Http\Controllers\exController@espace')->name('apres');
Route::post('/après_connexion', 'App\Http\Controllers\exController@espace2')->name('apres_connect');
Route::get('/voirplus', 'App\Http\Controllers\exController@plus')->name('voirplus');
Route::get('/voirplus2', 'App\Http\Controllers\exController@plus1')->name('voirplus2');
Route::get('/envoyer', 'App\Http\Controllers\exController@envoie')->name('envoyer');
Route::get('/apres_connexion2', 'App\Http\Controllers\exController@envoie2')->name('apre_connect2');
Route::post('/apres_connexion2', 'App\Http\Controllers\exController@envoies')->name('apres_connect2');
Route::get('/connexion_voirplus1', 'App\Http\Controllers\exController@voirplus1')->name('connexion_voirplus1');
Route::post('/connexion_voirplus1', 'App\Http\Controllers\exController@voirplusun')->name('connexion_voirplusun');
Route::get('/connexion_voirplus2', 'App\Http\Controllers\exController@voirplus2')->name('connexion_voirplus2');
Route::post('/connexion_voirplus2', 'App\Http\Controllers\exController@voirplusdeux')->name('connexion_voirplusdeux');
Route::get('/connexion_voirplus3', 'App\Http\Controllers\exController@voirplus3')->name('connexion_voirplus3');
Route::post('/connexion_voirplus3', 'App\Http\Controllers\exController@voirplustois')->name('connexion_voirplustrois');
