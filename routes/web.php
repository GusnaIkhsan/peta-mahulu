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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin','Peta\PetaController@showPeta');
Route::get('/all','Peta\PetaController@getAllMap');
Route::get('/kecamatan/{id}','Peta\PetaController@getMapByKecamatan');
Route::get('/','Website\PresenterController@showPetaMahulu');
Route::get('/content/{site}','Website\PresenterController@showContent');
// Route::get('/kml','Peta\PetaController@kmlInserting');
