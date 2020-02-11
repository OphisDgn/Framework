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

use \App\Skill;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/users/ad', 'UsersController@add')->name('add');
Route::get('/users/add', function() {
    $user = Auth::user();
    $ski = $user->skills;
    $skis = Skill::all();
    return view('addskill', compact('user', 'ski', 'skis'));
})->name('adding');

Route::post('/users/add', 'UsersController@add');

