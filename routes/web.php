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
})->name('home');

Route::get('todos', 'TodoController@index')->name('todos');
Route::get('todos/{todo}', 'TodoController@show')->name('todos.show');
Route::get('todos-create', 'TodoController@create')->name('todos.create');
Route::post('todos-store', 'TodoController@store')->name('todos.store');