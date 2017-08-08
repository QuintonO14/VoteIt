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

Route::get('/vote', 'VoteTopicsController@index')->middleware('auth');
Route::get('/upvote/{id}', [
    'uses' => 'VoteTopicsController@upvote',
    'as' => 'upvote',
    'middleware' => 'auth',
]);

Route::get('/downvote/{id}', [
    'uses' => 'VoteTopicsController@downvote',
    'as' => 'downvote',
    'middleware' => 'auth',
]);

Route::get('/makeballot', function(){
    return view('ballot');
})->middleware('auth');

Route::post('/createballot', [
    'uses' => 'VoteTopicsController@makeBallot',
    'as' => 'create.ballot',
    'middleware' => 'auth',
]);