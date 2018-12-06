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


//This will make all routes (FOR,CONROLLER)
Route::resource('projects', 'ProjectsController');
Route::patch('/tasks/{task}', 'ProjectTaskController@update');
Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// //This wil get method:POST and rout it to Controller func. store();
// Route::post('/projects', 'ProjectsController@store');
// //This will show one project - {project}->id of projects
// Route::get('/projects/{project}', 'ProjectsController@show');
// //For this {project} go to EDIT PAGE
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// //This will trigger UPDATE function
// Route::patch('/projects/{project}', 'ProjectsController@update');
// //Delete trigger
// Route::delete('/projects/{project}','ProjectsController@delete');
