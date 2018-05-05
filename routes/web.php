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

Route::get('/', 'CricketController@welcome');
Route::get('/about','CricketController@about');
Route::get('/contactus','CricketController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('player','PlayerController');

Route::resource('venue','VenueController');

Route::resource('team','TeamController');

Route::get('/admin', [
    'uses' => 'AppController@getAdminPage',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::post('/admin/assign-roles', [
  'uses' => 'AppController@postAdminAssignRoles',
  'as' => 'admin.assign',
  'middleware' => 'roles',
  'roles' => ['Admin']
]);


//
// Route::post('player/store',[
//      'uses' => 'PlayerController@store',
//      'as' => 'player/store'
// ]);
