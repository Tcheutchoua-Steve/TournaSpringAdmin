<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions', function () {
    return view('questions');
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('tournament/setTournament', function () {
    return view('adminControls.setTournament');
});

Route::get('tournament/listTournament', function () {
    return view('adminControls.listTournament');
});

Route::get('tournament/createTournament', [
    'as' => 'create_tourament', 'uses' => 'TournamentController@getCreateTournament'
]);

// Route::get('tournament/createTournament', function () {
//     return view('adminControls.createTournament');
// });

Route::get('tournament/setQuestion', function () {
    return view('adminControls.setQuestion');
});

Route::get('tournament/test', function () {
    return view('test');
});