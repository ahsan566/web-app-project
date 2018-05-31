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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('player','PlayerController');

Route::resource('venue','VenueController');

Route::resource('team','TeamController');

Route::resource('match','MatchController');

Route::resource('tournament','TournamentController');

Route::resource('playerteam','PlayerTeamController');

Route::get('/getImport','ExcelController@getImport');

Route::post('/postImport','ExcelController@postImport');

// Route::get('/admin', 'AdminController@index');
//
// Route::get('/superadmin', 'SuperAdminController@index');


//
// Route::post('player/store',[
//      'uses' => 'PlayerController@store',
//      'as' => 'player/store'
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
