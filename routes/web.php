<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::Routes();

Route::get('/', function () {
    return view('welcome');
});
Route::resource('items','itemsController');

Route::get('/add', function () {
    return view('add');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('/admin/users', 'Admin\UsersController', ['except' => ['show', 'create', 'store']]);
