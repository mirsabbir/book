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
    $book = \App\Book::find(9);
    return view('welcome')->with(['book'=>$book]);
});

Auth::routes();
Route::get('/allbooks', function(){
    $books = \App\Book::where('id','>=',9)->get();
    $book = \App\Book::find(9);
    return view('allbooks')->with(['book'=>$book, 'books'=>$books]);
});

Route::get('/singlebook', function(){
    $books = \App\Book::where('id','>',9)->get();
    $book = \App\Book::find(9);
    return view('singlebook')->with(['book'=>$book, 'books'=>$books]);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store');
Route::get('/search','SearchController@index');

