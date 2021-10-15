<?php

use Illuminate\Support\Facades\Route;


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::resource('portfolio','ProjectController')->names('projects')->parameters(['portfolio' => 'project']);
/* Route::get('/portfolio','ProjectController@index')->name('projects.index');
Route::get('/portfolio/create','ProjectController@create')->name('projects.create');
Route::get('/portfolio/{project}/edit','ProjectController@edit')->name('projects.edit');
Route::patch('/portfolio/{project}','ProjectController@update')->name('projects.update');
Route::post('/portfolio','ProjectController@store')->name('projects.store');
Route::get('/portfolio/{project}','ProjectController@show')->name('projects.show');
 */

Route::view('/contact','contact')->name('contact');
Route::post('contact','MessagesController@store')->name('message.store');

