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
    return view('main');
});

// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('admin.main');
    });

    Route::resource('projects', 'ProjectsController');
    Route::resource('experiences', 'ExperiencesController');
    
    Route::get('skills', 'SkillsController@index');
    Route::get('skills/create', 'SkillsController@create');
    Route::post('skills', 'SkillsController@store');
    Route::delete('skills/{skill}', 'SkillsController@destroy');
});
