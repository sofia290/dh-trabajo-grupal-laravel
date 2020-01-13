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

/* -----------------------JUEGO  --------------------------*/
Route::get('/game', 'GameController@normalMode')->name('game');
Route::post('/game', 'GameController@normalMode');
Route::get('/createquestion', 'GameController@create');
Route::post('/createquestion', 'GameController@store');
Route::get('/game/trueorfalse', 'GameController@debunkMode')->name('debunk');
Route::post('/game/trueorfalse', 'GameController@debunkMode');
Route::get('/game/lightning', 'GameController@lightningMode')->name('lightning');;
Route::post('/game/lightning', 'GameController@lightningMode');

/* ---------------------PERFIL -------------------------*/
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/friends', 'FriendsController@index')->name('friends');
Route::get('/friends/add', 'FriendsController@create');
Route::post('/friends/add', 'FriendsController@store');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/accounts/edit/{id}', 'UserController@edit');
Route::post('/accounts/edit/{id}', 'UserController@update');

Route::post('/accounts/edit/{id}/saveProfilePicture', 'UserController@changeProfilePicture');



Route::group(['middleware' => 'admin'], function () {
  Route::get("/questions/all","QuestionController@index");
  Route::get('/questions/create','QuestionController@create');
  Route::post('/questions/create','QuestionController@store');
  Route::get('/questions/{id}','QuestionController@show');
  Route::get('/questions/edit/{id}','QuestionController@edit');
  Route::post('/questions/edit/{id}','QuestionController@update');
  Route::get('/questions/destroy/{id}','QuestionController@destroy');
  Route::get('/questions/verify/{id}', 'QuestionController@verify');
  Route::get('/questions/deactivate/{id}', 'QuestionController@deactivate');

  Route::get("/answers/all","AnswerController@index");
  Route::get('/answers/create','AnswerController@create');
  Route::post('/answers/create','AnswerController@store');
  Route::get('/answers/{id}','AnswerController@show');
  Route::get('/answers/edit/{id}','AnswerController@edit');
  Route::post('/answers/edit/{id}','AnswerController@update');
  Route::get('/answers/destroy/{id}','AnswerController@destroy');
});
