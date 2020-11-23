<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/tasks', 'TaskController@listTasks');
Route::get('/tasks/{id}', 'TaskController@get');
Route::post('/tasks', 'TaskController@addTask');
Route::put('/tasks', 'TaskController@updateTask');
Route::post('/tasks/group' ,  'TaskController@getGroupByData');


Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@website.com'], 404);
});

