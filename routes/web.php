<?php

use Illuminate\Support\Facades\Route;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Httpp\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});

//Taches
Route::get('/tasks', '\App\Http\Controller\TaskController@index')->name("controller.index");
Route::get('/tasks/create', 'TaskController@create');
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks{id}/edit', 'TaskController@edit');
Route::get('/tasks{id}/show', 'TaskController@show');
Route::put('/tasks{id}', 'TaskController@update');
Route::delete('/tasks/{id}', 'TaskController@destroy');

