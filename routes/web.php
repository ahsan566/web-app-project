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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('player','PlayerController');

Route::resource('venue','VenueController');

Route::resource('team','TeamController');

Route::resource('blog','BlogController');

Route::resource('match','MatchController');

Route::resource('tournament','TournamentController');

Route::resource('playerteam','PlayerTeamController');

Route::get('/getImport','ExcelController@getImport');

Route::post('/postImport','ExcelController@postImport');

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('main');

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
    Route::get('/signup', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup'
    ]);
    Route::post('/signup', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup'
    ]);
    Route::get('/signin', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin'
    ]);
    Route::post('/signin', [
        'uses' => 'AuthController@postSignIn',
        'as' => 'signin'
    ]);
    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);
});