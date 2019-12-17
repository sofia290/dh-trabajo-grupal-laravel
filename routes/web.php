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

/*Route::get('/miprimeraRuta', function(){
    return "Creé mi primera ruta";
});

Route::get('/esPar/{numero}', function($numero){
    if($numero%2 == 0){
        return "Es par";
    }
    else{
        return "Es impar";
    }
});

Route::get('/sumar{numero1}+{numero2}+{numero3?}',function($numero1,$numero2, $numero3 = null){
    return $numero1 + $numero2 + $numero3;
});*/


Route::get('/peliculas/{id}',function($id){
    $peliculas = [
    1 => [
        "nombre"=> "Titanic",
        "rating" => 8.5
    ],
    2 => [
        "nombre"=> "Toy Story",
        "rating" => 8.2
    ],
    3 => [
        "nombre"=> "Buscando a Nemo",
        "rating" => 7.9
    ],
    4 => [
        "nombre"=> "Inception",
        "rating" => 9.7
    ],
    5 => [
        "nombre"=> "Frozen",
        "rating" => 9.0
    ]
];
    return view('peliculas',compact('peliculas', 'id'));    
});

Route::get('/peliculas',function(){
    $peliculas = [
        1 => [
            "nombre"=> "Titanic",
            "rating" => 8.5
        ],
        2 => [
            "nombre"=> "Toy Story",
            "rating" => 8.2
        ],
        3 => [
            "nombre"=> "Buscando a Nemo",
            "rating" => 7.9
        ],
        4 => [
            "nombre"=> "Inception",
            "rating" => 9.7
        ],
        5 => [
            "nombre"=> "Frozen",
            "rating" => 9.0
        ]
    ];
    return view('peliculas',compact('peliculas'));
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
