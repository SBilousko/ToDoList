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

// Route::get('/', function () {
//     // $tasks = DB::table('tasks')->get();
//     $tasks = App\Task::all();
//     return view('welcome', compact('tasks'));
// });

// Route::get('/current', function () {
//     $tasks = App\Task::incomplete();
//     return view('current', compact('tasks'));
// });

// Route::get('/completed', function () {
//     $tasks = App\Task::complete();
//     return view('completed', compact('tasks'));
// });


Route::get('/', 'TasksController@index');
Route::get('/current', 'TasksController@current');
Route::get('/completed', 'TasksController@completed');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
