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

Route::get('/', function(){
  return view('index');
});

Route::get('/faqs', function(){
  return view('faqs');
});

Route::get("/questions/all","QuestionController@index");
Route::get('/questions/create','QuestionController@create');
Route::post('/questions/create','QuestionController@store');
Route::get('/questions/{id}','QuestionController@show');
Route::get('/questions/edit/{id}','QuestionController@edit');
Route::post('/questions/edit/{id}','QuestionController@update');
Route::get('/questions/destroy/{id}','QuestionController@destroy');

Route::get("/answers/all","AnswerController@index");
Route::get('/answers/create','AnswerController@create');
Route::post('/answers/create','AnswerController@store');
Route::get('/answers/{id}','AnswerController@show');
Route::get('/answers/edit/{id}','AnswerController@edit');
Route::post('/answers/edit/{id}','AnswerController@update');
Route::get('/answers/destroy/{id}','AnswerController@destroy');

Route::get('/game', 'GameController@index')->name('game');

Route::get('/profile', 'ProfileController@index')->name('profile');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/accounts/edit/{id}', 'UserController@edit');
Route::post('/accounts/edit/{id}', 'UserController@update');
