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

use Illuminate\Support\Facades\Auth;

Route::get('/series', 'SeriesController@index')
    ->name('listar_series');
Route::get('/series/criar', 'SeriesController@create')
    ->name('form_criar_serie');
   // ->middleware('autenticador');
Route::post('/series/criar', 'SeriesController@store');
   // ->middleware('autenticador');
Route::delete('/series/{id}', 'SeriesController@destroy');
   // ->middleware('autenticador');

Route::delete('/temporadas/{temporada}/episodios', 'TemporadasController@destroyT');
    //->middleware('autenticador'); 
     
Route::post('/series/{id}/editaNome', 'SeriesController@editaNome');
   // ->middleware('autenticador');

Route::get('/series/{temporada}/temporadas', 'TemporadasController@index')->name('listar_temporadas');

Route::get('/temporadas/{temporada}/episodio', 'EpisodiosController@index');

Route::post('/temporadas/{temporada}/episodio/assistir', 'EpisodiosController@assistir');
    //->middleware('autenticador');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');
Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/entrar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

