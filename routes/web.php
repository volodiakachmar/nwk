<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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




Route::get('/', 'MainController@index');

Route::get('/team', 'TeamController@index');


Route::get('/404', function () {
    return view('404');
});

Route::get('/places','PlacesController@index');

// Route::get('/praca', 'PracaController@list');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/documents', 'AdviceController@documents');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');
Route::get('/archive','PostController@archive');


Route::resource('praca', 'PracaController');
Route::get('/work/list', 'PracaController@list');

Route::resource('events', 'EventsController');

Route::resource('indeks', 'IndeksController');

Route::get('/reklama', function () {
    return view('reklama');
});